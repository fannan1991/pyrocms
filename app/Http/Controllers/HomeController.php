<?php

namespace App\Http\Controllers;

use Anomaly\FilesModule\File\FileModel;
use Anomaly\PostsModule\Post\PostModel;
use Anomaly\Streams\Platform\Model\Files\FilesFilesEntryModel;
use App\AccessToken;
use App\Api\Transformers\AccessTokenTransformer;
use App\Api\Transformers\ClientTransformer;
use App\Api\Transformers\GoldTransformer;
use App\Api\Transformers\IntegralTransformer;
use App\Api\Transformers\LoanTransformer;
use App\Api\Transformers\MemberTransformer;
use App\Api\Transformers\MessageTransformer;
use App\Api\Transformers\PostTransformer;
use App\Api\Transformers\RepaymentTransformer;
use App\Api\Transformers\WithdrasTransformer;
use App\Api\Transformers\WithdrawTransformer;
use App\OauthClients;
use Carbon\Carbon;
use Fannan\EnvelopesModule\Envelope\EnvelopeModel;
use Fannan\EnvelopesModule\Log\LogModel;
use Fannan\LotteryModule\Ticket\TicketModel;
use Fannan\LotteryModule\Winning\WinningModel;
use Fannan\MembersModule\Gold\GoldModel;
use Fannan\MembersModule\Integral\IntegralModel;
use Fannan\MembersModule\Loan\LoanModel;
use Fannan\MembersModule\Member\MemberModel;
use Fannan\MembersModule\Message\MessageModel;
use Fannan\MembersModule\Repayment\RepaymentModel;
use Fannan\MembersModule\Withdraw\WithdrawModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Monolog\Formatter\GelfMessageFormatterTest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function test(Request $request){
        $sites = array
        (
            "runoob"=> "http://www.runoob.com",
            "google"=>array
            (
                "Google 搜索",
                "http://www.google.com"
            ),
            "taobao"=>array
            (
                "淘宝",
                "http://www.taobao.com"
            )
        );
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $sites
        );
        return $this->response->array($result);
    }

    //注册
    public function register(Request $request){
        $captcha = $request->captcha;
        $mobile = $request->mobile;
        $password = $request->password;
        $invitation_code = $request->invitation_code;
        if(MemberModel::where('mobile',$mobile)->first()){
            return $this->response->array(['status'=>'error','msg' => '手机号已注册','code'=>401]);
        }else{
            $str_time = $this->dec62($this->msectime());
            $code = $this->randChar().$str_time;
            $member = new MemberModel;
            $member->mobile = $mobile;
            $member->password = bcrypt($password);
            $member->invitation_code = $code;
            if($invitation_code){
                $father = MemberModel::where('invitation_code',$invitation_code)->first();
                if($father){
                    $member->parent_id_id = $father->id;
                    $member->grand_id_id = $father->parent_id_id;
                    $member->great_grand_id_id = $father->grand_id_id;
                }
            }
            $member->save();
            $member = MemberModel::find($member->id);
            if($member){
                $image_name = md5(date('ymdhis')).'.png';
                $this->qrcode(268,0,'http://baidu.com','qrcodes/'.$image_name);
                $member->qrcode = 'qrcodes/'.$image_name;
                $member->save();
                $result = array(
                    'code' => 100,
                    'status' => 'success',
                    'data' => $member
                );
                return $this->response->array($result);
            }else{
                return $this->response->array(['status'=>'error','msg' => '注册失败','code'=>401]);
            }
        }
    }

    //注册客户端
    public function registerClient(Request $request){
        $imsi = $request->imsi;
        $member_id = $request->member_id;
        $secret = bcrypt($imsi+$member_id);
        if(MemberModel::find($member_id)){
            $has_client = OauthClients::where('imsi',$imsi)->where('member_id',$member_id)->first();
            if($has_client){
                $result = array(
                    'code' => 100,
                    'status' => 'success',
                    'data' => $has_client
                );
                return $this->response->array($result);
            }else{
                $client = new OauthClients;
                $client->member_id = $member_id;
                $client->imsi = $imsi;
                $client->secret = $secret;
                $client->save();
                $client = OauthClients::find($client->id);
                $result = array(
                    'code' => 100,
                    'status' => 'success',
                    'data' => $client
                );
                return $this->response->array($result);
            }
        }else{
            return $this->response->array(['status'=>'error','msg' => '用户不存在','code'=>401]);
        }

    }

    //申请访问令牌access_token
    public function accessToken(Request $request){
        $client_id = $request->client_id;
        $secret = $request->secret;
        $client = OauthClients::find($client_id);
        if($client){
            if($secret == $client->secret){
                $has_token = AccessToken::where('member_id',$client->member_id)->where('client_id',$client_id)->first();
                if($has_token){
                    $access_token = AccessToken::find($has_token->id);
                    $access_token->access_token = bcrypt($client_id+$secret+time());
                    $access_token->save();
                    $result = array(
                        'code' => 100,
                        'status' => 'success',
                        'data' => $access_token
                    );
                    return $this->response->array($result);
                }else{
                    $access_token = new AccessToken;
                    $access_token->member_id = $client->member_id;
                    $access_token->client_id = $client_id;
                    $access_token->access_token = bcrypt($client_id+$secret+time());
                    $access_token->save();
                    $result = array(
                        'code' => 100,
                        'status' => 'success',
                        'data' => $access_token
                    );
                    return $this->response->array($result);
                }
            }
        }else{
            return $this->response->array(['status'=>'error','msg' => '非法请求','code'=>401]);
        }
    }

    //登录
    public function login(Request $request){
        $mobile = $request->mobile;
        $password = $request->password;
        $has_member = MemberModel::where('mobile',$mobile)->first();

        if($has_member){
            if($has_member->avatar_id){
                $avatar = FileModel::find($has_member->avatar_id);
                $has_member->avatar_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/'.$avatar->name;
            }else{
                $has_member->avatar_path = null;
            }

            if(Hash::check($password, $has_member->password)){
                $result = array(
                    'code' => 100,
                    'status' => 'success',
                    'data' => $has_member
                );
                return $this->response->array($result);
            }else{
                return $this->response->array(['status'=>'error','msg' => '用户名密码不匹配','code'=>401]);
            }
        }else{
            return $this->response->array(['status'=>'error','msg' => '用户不存在','code'=>401]);
        }
    }

    //忘记密码
    public function forgetPassword(Request $request){
        $mobile = $request->mobile;
        $captcha = $request->captcha;
        $password = $request->password;
        $has_member = MemberModel::where('mobile',$mobile)->first();
        if($has_member){
            $member = MemberModel::find($has_member->id);
            $member->password = bcrypt($password);
            $member->save();
            $result = array(
                'code' => 100,
                'status' => 'success',
                'data' => $member
            );
            return $this->response->array($result);
        }else{
            return $this->response->array(['status'=>'error','msg' => '用户不存在','code'=>401]);
        }
    }

    //修改密码
    public function changePassword(Request $request){
        $member_id = $request->member_id;
        $current_password = $request->current_password;
        $new_password = $request->new_password;
        $re_password = $request->re_password;
        $has_member = MemberModel::find($member_id);
        if($has_member){
            if(Hash::check($current_password, $has_member->password)){
                if($new_password == $re_password){
                    $has_member->password = bcrypt($new_password);
                    $has_member->save();
                    $result = array(
                        'code' => 100,
                        'status' => 'success',
                        'data' => $has_member
                    );
                    return $this->response->array($result);
                }else{
                    return $this->response->array(['status'=>'error','msg' => '两次密码输入不一致','code'=>401]);
                }
            }else{
                return $this->response->array(['status'=>'error','msg' => '当前密码错误','code'=>401]);
            }
        }else{
            return $this->response->array(['status'=>'error','msg' => '用户不存在','code'=>401]);
        }
    }

    //个人资料
    public function personalInformation(Request $request){
        $member_id = $request->member_id;
        $nickname = $request->nickname;
        $member = MemberModel::find($member_id);
        $member->nickname = $nickname;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $allowed_extensions = ["png", "jpg", "gif", "bmp", "jpeg"];
            if ($image->getClientOriginalExtension() && !in_array($image->getClientOriginalExtension(), $allowed_extensions)) {
                return $this->response->array(['status'=>'error','msg' => '图片格式错误','code'=>401]);
            }
            if($image->isValid()){
                $clientName = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $newName = md5(date('ymdhis') . $clientName) . "." . $extension;
                $path = '/'.$image->move('app\default\files-module\local\images', $newName);
                $file = new FilesFilesEntryModel;
                $file->name = $newName;
                $file->disk_id = 1;
                $file->folder_id = 1;
                $file->mime_type = 'image/jpeg';
                $file->entry_type = 'Anomaly\Streams\Platform\Model\Files\FilesImagesEntryModel';
                $file->save();
                $member->avatar_id = $file->id;
            }
        }
        $member->save();
        $member->avatar_path = $path;
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $member
        );
        return $this->response->array($result);
    }

    //实名认证
    public function verified(Request $request){
        $member_id = $request->member_id;
        $name = $request->name;
        $id_card = $request->id_card;
        $member = MemberModel::find($member_id);
        $member->real_name = $name;
        $member->id_card = $id_card;
        if($request->hasFile('card_positive_pic')){
            $card_positive_pic = $request->file('card_positive_pic');
            $allowed_extensions = ["png", "jpg", "gif", "bmp", "jpeg"];
            if ($card_positive_pic->getClientOriginalExtension() && !in_array($card_positive_pic->getClientOriginalExtension(), $allowed_extensions)) {
                return $this->response->array(['status'=>'error','msg' => '图片格式错误','code'=>401]);
            }
            if($card_positive_pic->isValid()){
                $clientName = $card_positive_pic->getClientOriginalName();
                $extension = $card_positive_pic->getClientOriginalExtension();
                $newName = md5(date('ymdhis') . $clientName) . "." . $extension;
                $card_positive_pic_path = '/'.$card_positive_pic->move('app\default\files-module\local\images', $newName);
                $file = new FilesFilesEntryModel;
                $file->name = $newName;
                $file->disk_id = 1;
                $file->folder_id = 1;
                $file->mime_type = 'image/jpeg';
                $file->entry_type = 'Anomaly\Streams\Platform\Model\Files\FilesImagesEntryModel';
                $file->save();
                $member->card_positive_pic_id = $file->id;
            }
        }
        if($request->hasFile('card_negative_pic')){
            $card_negative_pic = $request->file('card_negative_pic');
            $allowed_extensions = ["png", "jpg", "gif", "bmp", "jpeg"];
            if ($card_negative_pic->getClientOriginalExtension() && !in_array($card_negative_pic->getClientOriginalExtension(), $allowed_extensions)) {
                return $this->response->array(['status'=>'error','msg' => '图片格式错误','code'=>401]);
            }
            if($card_negative_pic->isValid()){
                $clientName = $card_negative_pic->getClientOriginalName();
                $extension = $card_negative_pic->getClientOriginalExtension();
                $newName = md5(date('ymdhis') . $clientName) . "." . $extension;
                $card_negative_pic_path = '/'.$card_negative_pic->move('app\default\files-module\local\images', $newName);
                $file = new FilesFilesEntryModel;
                $file->name = $newName;
                $file->disk_id = 1;
                $file->folder_id = 1;
                $file->mime_type = 'image/jpeg';
                $file->entry_type = 'Anomaly\Streams\Platform\Model\Files\FilesImagesEntryModel';
                $file->save();
                $member->card_negative_pic_id = $file->id;
            }
        }
        $member->save();
        $member->card_positive_pic_path = $card_positive_pic_path;
        $member->card_negative_pic_path = $card_negative_pic_path;
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $member
        );
        return $this->response->array($result);
    }

    //客户管理(一级)
    public function firstCustomer(Request $request){
        $member_id = $request->member_id;
        $first_customers = MemberModel::where('parent_id_id',$member_id)->get();
        $result = array(
            'code' => 100,
            'message' => 'success',
            'data' => $first_customers
        );
        return $this->response->array($result);
    }

    //客户管理（二级）
    public function secondCustomer(Request $request){
        $member_id = $request->member_id;
        $second_customers = MemberModel::where('grand_id_id',$member_id)->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $second_customers
        );
        return $this->response->array($result);
    }

    //客户管理（三级）
    public function threeCustomer(Request $request){
        $member_id = $request->member_id;
        $three_customers = MemberModel::where('great_grand_id_id',$member_id)->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $three_customers
        );
        return $this->response->array($result);
    }

    //会员等级
    public function grade(Request $request){
        $member_id = $request->member_id;
        $member = MemberModel::find($member_id);
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $member
        );
        return $this->response->array($result);
    }

    //积分记录
    public function integral(Request $request){
        $member_id = $request->member_id;
        $integral = IntegralModel::where('integral_member_id_id',$member_id)->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $integral
        );
        return $this->response->array($result);
    }

    //金币记录
    public function gold(Request $request){
        $member_id = $request->member_id;
        $gold = GoldModel::where('gold_member_id_id',$member_id)->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $gold
        );
        return $this->response->array($result);
    }

    //提现
    public function withdraw(Request $request){
        $member_id = $request->member_id;
        $captcha = $request->captcha;
        $member = MemberModel::find($member_id);
        if($member->gold >= $request->withdraw_amount){
            $withdraw = new WithdrawModel;
            $withdraw->withdraw_amount = $request->withdraw_amount;
            $withdraw->withdraw_bank = $request->withdraw_bank;
            $withdraw->withdraw_name = $request->withdraw_name;
            $withdraw->withdraw_card = $request->withdraw_card;
            $withdraw->withdraw_bank_card = $request->withdraw_bank_card;
            $withdraw->withdraw_mobile = $request->withdraw_mobile;
            $withdraw->withdraw_member_id_id = $member_id;
            $withdraw->withdraw_status = '0';
            $withdraw = $withdraw->save();
            if($withdraw){
                return $this->response->array(['status'=>'success','msg' => '申请已提交','code'=>100]);
            }
        }else{
            return $this->response->array(['status'=>'error','msg' => '金额不能大于您的金币数量','code'=>401]);
        }

    }

    //关于我们
    public function aboutUs(Request $request){
        $about = PostModel::find(1);
        if($about){
            $about->content = $about->entry->content;
            $result = array(
                'code' => 100,
                'status' => 'success',
                'data' => $about
            );
            return $this->response->array($result);
        }else{
            return $this->response->array(['status'=>'success','msg' => '无数据','code'=>401]);
        }
    }

    //提现记录
    public function withdrawLog(Request $request){
        $member_id = $request->member_id;
        $withdraw = WithdrawModel::where('withdraw_member_id_id',$member_id)->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $withdraw
        );
        return $this->response->array($result);
    }

    //消息记录
    public function message(Request $request){
        $member_id = $request->member_id;
        $message = MessageModel::where('message_member_id_id',$member_id)->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $message
        );
        return $this->response->array($result);
    }

    //申请贷款
    public function loan(Request $request){
        $loan = new LoanModel;
        $member = MemberModel::find($request->member_id);
        if($member->is_verified == true){
            $has_loan = LoanModel::where('loan_status','1')->count();
            if($has_loan){
                return $this->response->array(['status'=>'success','msg' => '您有正在进行的贷款记录，暂无法重复申请','code'=>401]);
            }else{
                $loan->loan_name = $member->real_name;
                $loan->loan_id_card = $member->id_card;
                $loan->loan_amount = $request->loan_amount;
                $loan->loan_order_sn = $this->orderSn();
                $loan->loan_status = '0';
                $loan->loan_term_date = $request->term_date;
                $loan->loan_member_id_id = $request->member_id;
                $loan->save();
                return $this->response->array(['status'=>'success','msg' => '申请已提交','code'=>100]);
            }
        }else{
            return $this->response->array(['status'=>'success','msg' => '未实名认证','code'=>401]);
        }
    }

    //贷款记录
    public function loanLog(Request $request){
        $member_id = $request->member_id;
        $loans = LoanModel::where('loan_member_id_id',$member_id)->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $loans
        );
        return $this->response->array($result);
    }

    //贷款须知
    public function loanNotice(Request $request){
        $post = PostModel::find(3);
        if($post){
            $post->content = $post->entry->content;
            $result = array(
                'code' => 100,
                'status' => 'success',
                'data' => $post
            );
            return $this->response->array($result);
        }else{
            return $this->response->array(['status'=>'error','msg' => '无数据','code'=>401]);
        }
    }

    //贷款记录详情
    public function loanDetail(Request $request){
        $loan_id = $request->loan_id;
        $loan = LoanModel::find($loan_id);
        $first_time = RepaymentModel::where('repayment_loan_id',$loan_id)->orderBy('id','ASC')->first();
        if($first_time){
            $loan->first_time = $first_time->repayment_date;
            $result = array(
                'code' => 100,
                'status' => 'success',
                'data' => $loan
            );
            return $this->response->array($result);
        }else{
            return $this->response->array(['status'=>'error','msg' => '尚未审核','code'=>401]);
        }

    }

    // 贷款页面
    public function loanAmount(Request $request){
        $member_id = $request->member_id;
        $loan = LoanModel::where('loan_member_id_id',$member_id)->where('loan_status',1)->first();
        $loan_amount = LoanModel::where('loan_member_id_id',$member_id)->where('loan_status',1)->first();
        $repayments = RepaymentModel::where('repayment_member_id_id',$member_id)
            ->where('repayment_loan_id',$loan->id)
            ->where('repayment_status',0)
            ->orderBy('id','ASC')
            ->get();
        $data = array
        (
            'loan_amount' => $loan_amount->loan_amount,
            "repayments"=> $repayments
        );
        $result = array(
            'code' => 100,
            'status' => 'success',
            'loan_amount' =>$loan_amount->loan_amount,
            'data' => $data
        );
        return $this->response->array($result);
    }


    //还款页面
    public function repayment(Request $request){
        $member_id = $request->member_id;
        $repayments = RepaymentModel::where('repayment_member_id_id',$member_id)->orderBy('id','ASC')->get();
        $period_repayment = RepaymentModel::whereMonth('repayment_date', date('m')+1)->whereYear('repayment_date', date('Y'))->first();
        if($period_repayment){
            $period_amount = $period_repayment->repayment_amount;
            $period_date = $period_repayment->repayment_date;
        }else{
            $period_amount = null;
            $period_date = null;
        }
        $not_repayment_amount = RepaymentModel::where('repayment_status',0)->sum('repayment_amount');
        $data = array
        (
            'period_amount' =>$period_amount,
            'period_date' =>$period_date,
            'not_repayment_amount' =>$not_repayment_amount,
            "repayments"=> $repayments
        );
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $data
        );
        return $this->response->array($result);
    }

    //资讯列表
    public function news(Request $request){
        $news = PostModel::whereNull('deleted_at')->where('category_id',3)->where('enabled',1)->get();
        foreach($news as $new){
            $file = FileModel::find($new->entry->image_id);
            $new->content = $new->entry->content;
            $new->image_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/'.$file->name;
            $new->url = 'http://x16311542j.51mypc.cn/api/new-detail?new_id='.$new->id;
            $lists[] = $new;
        }
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $lists
        );
        return $this->response->array($result);
    }

    //资讯详情
    public function newsDetail(Request $request){
        $new_id = $request->new_id;
        $new = PostModel::find($new_id);
        $file = FileModel::find($new->entry->image_id);
        if($new){
            $new->image_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/'.$file->name;
            $result = array(
                'code' => 100,
                'status' => 'success',
                'data' => $new
            );
            return $this->response->array($result);
        }else{
            return $this->response->array(['status'=>'error','msg' => '无数据','code'=>401]);
        }
    }

    //中奖记录
    public function winningLog(Request $request){
        $member_id = $request->member_id;
        $winning = WinningModel::where('winning_member_id_id',$member_id)->orderBy('id','DESC')->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $winning
        );
        return $this->response->array($result);
    }

    //抽奖券（可使用）
    public function ticketUse(Request $request){
        $member_id = $request->member_id;
        $ticketUse = TicketModel::where('ticket_member_id_id',$member_id)->where('ticket_valid_period','>',Carbon::now())->where('ticket_is_use',0)->orderBy('id','DESC')->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $ticketUse
        );
        return $this->response->array($result);

    }

    //抽奖券（已使用）
    public function ticketUsed(Request $request){
        $member_id = $request->member_id;
        $ticketUsed = TicketModel::where('ticket_member_id_id',$member_id)->where('ticket_valid_period','>',Carbon::now())->where('ticket_is_use',1)->orderBy('id','DESC')->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $ticketUsed
        );
        return $this->response->array($result);

    }

    //已过期
    public function ticketExpired(Request $request){
        $member_id = $request->member_id;
        $ticketExpired = TicketModel::where('ticket_member_id_id',$member_id)->where('ticket_valid_period','<',Carbon::now())->orderBy('id','DESC')->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $ticketExpired
        );
        return $this->response->array($result);

    }

    //红包记录
    public function redEnvelopes(Request $request){
        $member_id = $request->member_id;
        $red_envelopes = LogModel::where('log_member_id_id',$member_id)->orderBy('id','DESC')->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $red_envelopes
        );
        return $this->response->array($result);

    }

    //个人中心首页
    public function personalCenter(Request $request){
        $member_id = $request->member_id;
        $member = MemberModel::find($member_id);
        $lottery_tickets = TicketModel::where('ticket_member_id_id',$member_id)->where('ticket_valid_period','<',Carbon::now())->where('ticket_is_use',0)->count();
        $first_customer = MemberModel::where('parent_id_id',$member_id)->count();
        $second_customer = MemberModel::where('grand_id_id',$member_id)->count();
        $three_customer = MemberModel::where('great_grand_id_id',$member_id)->count();
        if($member){
            $data = array
            (
                'lottery_tickets' => $lottery_tickets,
                'first_customer' => $first_customer,
                'second_customer' => $second_customer,
                'three_customer' => $three_customer,
                "member"=> $member
            );
            $result = array(
                'code' => 100,
                'status' => 'success',
                'data' => $data
            );
            return $this->response->array($result);
        }else{
            return $this->response->array(['status'=>'error','msg' => '无效用户','code'=>401]);
        }

    }

    //邀请码
    public function invitationCode(Request $request){
        $member_id = $request->member_id;
        $member = MemberModel::find($member_id);
        if($member){
            if(!$member->qrcode){
                $image_name = md5(date('ymdhis')).'.png';
                $this->qrcode(268,0,'http://baidu.com','qrcodes/'.$image_name);
                $member->qrcode = 'qrcodes/'.$image_name;
                $member->save();
            }
            $data = array
            (
                'qrcode'    =>  'http://'.$_SERVER['HTTP_HOST'].'/'.$member->qrcode,
                'invitation_code' => $member->invitation_code,
            );
            $result = array(
                'code' => 100,
                'status' => 'success',
                'data'    =>  $data,
            );
            return $this->response->array($result);
        }
    }



    //生成二维码,size（二维码尺寸），margin(边距)，data(内容)，path(图片路径及名称)
    public function qrcode($size,$margin,$data,$path){
        if(!file_exists(public_path('qrcodes')))
            mkdir(public_path('qrcodes'));
        QrCode::format('png')->size($size)->margin($margin)->generate($data,public_path($path));
    }

    //生成单号
    public function orderSn(){
        $orderSn = strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) .substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
        return $orderSn;
    }


    // 当前的毫秒时间戳
    public function msectime(){
        $arr = explode(' ', microtime());
        $tmp1 = $arr[0];
        $tmp2 = $arr[1];
        return (float)sprintf('%.0f', (floatval($tmp1) + floatval($tmp2)) * 1000);
    }
    // 10进制转62进制
    public function dec62($dec){
        $base = 62;
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ret = '';
        for($t = floor(log10($dec) / log10($base)); $t >= 0; $t--){
            $a = floor($dec / pow($base, $t));
            $ret .= substr($chars, $a, 1);
            $dec -= $a * pow($base, $t);
        }
        return $ret;
    }
    // 随机字符
    public function randChar(){
        $base = 62;
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return $chars[mt_rand(1, $base) - 1];
    }

}