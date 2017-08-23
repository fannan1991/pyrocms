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
use Fannan\AdvertisingModule\Advertising\AdvertisingModel;
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
use Fannan\TransactionModule\Transaction\TransactionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Monolog\Formatter\GelfMessageFormatterTest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class HomeController extends Controller
{
    //首页
    public function index()
    {
        $banners = AdvertisingModel::where('ad_slot_id',1)->orderBy('ad_sorting','ASC')->get();
        foreach($banners as $banner){
            $fileBanner = FileModel::find($banner->ad_image_id);
            $banner->image_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/'.$fileBanner->name;
            $bannerLists[] = $banner;
        }

        $activities = AdvertisingModel::where('ad_slot_id',2)->orderBy('ad_sorting','ASC')->get();
        foreach($activities as $activity){
            $fileActivity = FileModel::find($activity->ad_image_id);
            $activity->image_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/'.$fileActivity->name;
            $activityLists[] = $activity;
        }

        $adsIndex = AdvertisingModel::where('ad_slot_id',3)->orderBy('ad_sorting','ASC')->first();
        $fileAds = FileModel::find($adsIndex->ad_image_id);
        $adsIndex->image_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/'.$fileAds->name;

        $news = PostModel::whereNull('deleted_at')->where('category_id',3)->where('enabled',1)->orderBy('id','DESC')->limit(2)->get();
        foreach($news as $new){
            $file = FileModel::find($new->entry->image_id);
            $new->content = $new->entry->content;
            $new->image_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/'.$file->name;
            $new->url = 'http://x16311542j.51mypc.cn/api/new-detail?new_id='.$new->id;
            $newLists[] = $new;
        }

        $data = array
        (
            "banner"=> $bannerLists,
            'activity' => $activityLists,
            'ads' => $adsIndex,
            'news' => $newLists
        );
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data' => $data
        );
        return $this->response->array($result);
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
                    $father->integral += 10;
                    $father->save();
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
            if($has_member->card_positive_pic_id){
                $card_positive_pic = FileModel::find($has_member->card_positive_pic_id);
                $has_member->card_positive_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/'.$card_positive_pic->name;
            }else{
                $has_member->card_positive_path = null;
            }
            if($has_member->card_negative_pic_id){
                $card_negative_pic = FileModel::find($has_member->card_negative_pic_id);
                $has_member->card_negative_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/'.$card_negative_pic->name;
            }else{
                $has_member->card_negative_path = null;
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
        if($member->avatar_id){
            $file = FileModel::find($member->avatar_id);
            $member->avatar_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/'.$file->name;
        }else{
            $member->avatar_path = 'http://'.$_SERVER['HTTP_HOST'].'/app/default/files-module/local/images/detault_avatar.png';
        }

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
        $member->card_positive_pic_path = 'http://'.$_SERVER['HTTP_HOST'].$card_positive_pic_path;
        $member->card_negative_pic_path = 'http://'.$_SERVER['HTTP_HOST'].$card_negative_pic_path;
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
        $captcha = $request->verification_code;
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
        $last_time = RepaymentModel::where('repayment_loan_id',$loan_id)->orderBy('id','DESC')->first();
        if($first_time){
            $loan->first_time = $first_time->repayment_date;
            $loan->last_time = $last_time->repayment_date;
            $loan->interest_rate = '零利率';
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
        $loan_id = $period_repayment->repayment_loan_id;
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
            'loan_id'   => $loan_id,
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

    //红包
    public function envelopes(Request $request){
        $member_id = $request->member_id;
        $member = MemberModel::find($member_id);
        if($member->is_verified == true){
            $setting = EnvelopeModel::find(1);
            $date = date('Y-m-d');
            $log_num = LogModel::where('log_member_id_id',$member_id)->whereDate('created_at', $date)->count();
            if($setting->envelopes_is_open == true){
                if($member->grade == '0' && $setting->envelopes_visitor_times == 0){
                    return $this->response->array(['status'=>'error','msg' => '游客不能参与活动','code'=>401]);
                }elseif($member->grade == '0' && $setting->envelopes_visitor_times == $log_num){
                    return $this->response->array(['status'=>'error','msg' => '今日红包次数已用完','code'=>401]);
                }elseif($member->grade == '1' && $setting->envelopes_ordinary_times == 0){
                    return $this->response->array(['status'=>'error','msg' => '普通会员暂不能参与活动','code'=>401]);
                }elseif($member->grade == '1' && $setting->envelopes_ordinary_times == $log_num){
                    return $this->response->array(['status'=>'error','msg' => '今日红包次数已用完','code'=>401]);
                }elseif($member->grade == '2' && $setting->envelopes_bronze_times == 0){
                    return $this->response->array(['status'=>'error','msg' => '铜牌会员暂不能参与活动','code'=>401]);
                }elseif($member->grade == '2' && $setting->envelopes_bronze_times == $log_num){
                    return $this->response->array(['status'=>'error','msg' => '今日红包次数已用完','code'=>401]);
                }elseif($member->grade == '3' && $setting->envelopes_silver_times == 0){
                    return $this->response->array(['status'=>'error','msg' => '银牌会员暂不能参与活动','code'=>401]);
                }elseif($member->grade == '3' && $setting->envelopes_silver_times == $log_num){
                    return $this->response->array(['status'=>'error','msg' => '今日红包次数已用完','code'=>401]);
                }elseif($member->grade == '4' && $setting->envelopes_gold_times == 0){
                    return $this->response->array(['status'=>'error','msg' => '金牌会员暂不能参与活动','code'=>401]);
                }elseif($member->grade == '4' && $setting->envelopes_gold_times == $log_num){
                    return $this->response->array(['status'=>'error','msg' => '今日红包次数已用完','code'=>401]);
                }elseif($member->grade == '5' && $setting->envelopes_diamond_times == 0){
                    return $this->response->array(['status'=>'error','msg' => '钻石会员暂不能参与活动','code'=>401]);
                }elseif($member->grade == '5' && $setting->envelopes_diamond_times == $log_num){
                    return $this->response->array(['status'=>'error','msg' => '今日红包次数已用完','code'=>401]);
                }else{
                    $log = new LogModel;
                    $log->log_name = $member->real_name;
                    $log->log_mobile = $member->mobile;
                    $log->log_amount = rand($setting->envelopes_amount_min,$setting->envelopes_amount_max);
                    $log->log_member_id_id = $member_id;
                    if($log->save()){
                        $member->gold += $log->log_amount;
                        $member->save();
                        $log = LogModel::find($log->id);
                        if($member->grade == '0'){
                            $remaining = $setting->envelopes_visitor_times - $log_num-1;
                        }elseif($member->grade = '1'){
                            $remaining = $setting->envelopes_ordinary_times - $log_num-1;
                        }elseif($member->grade = '2'){
                            $remaining = $setting->envelopes_bronze_times - $log_num-1;
                        }elseif($member->grade = '3'){
                            $remaining = $setting->envelopes_silver_times - $log_num-1;
                        }elseif($member->grade = '4'){
                            $remaining = $setting->envelopes_gold_times - $log_num-1;
                        }elseif($member->grade = '5'){
                            $remaining = $setting->envelopes_diamond_times - $log_num-1;
                        }
                        $data = array
                        (
                            'remaining' => $remaining,
                            'log'    =>  $log,
                        );
                        $result = array(
                            'code' => 100,
                            'status' => 'success',
                            'data'    =>  $data,
                        );
                        return $this->response->array($result);
                    }
                }

            }else{
                return $this->response->array(['status'=>'error','msg' => '活动已关闭','code'=>401]);
            }
        }else{
            return $this->response->array(['status'=>'error','msg' => '尚未认证，暂不能参与活动','code'=>401]);
        }
    }

    //获取剩余抽取红包次数
    public function remaining(Request $request){
        $member_id = $request->member_id;
        $member = MemberModel::find($member_id);
        $setting = EnvelopeModel::find(1);
        $date = date('Y-m-d');
        $log_num = LogModel::where('log_member_id_id',$member_id)->whereDate('created_at', $date)->count();
        if($member->grade == '0'){
            $remaining = $setting->envelopes_visitor_times - $log_num;
        }elseif($member->grade = '1'){
            $remaining = $setting->envelopes_ordinary_times - $log_num;
        }elseif($member->grade = '2'){
            $remaining = $setting->envelopes_bronze_times - $log_num;
        }elseif($member->grade = '3'){
            $remaining = $setting->envelopes_silver_times - $log_num;
        }elseif($member->grade = '4'){
            $remaining = $setting->envelopes_gold_times - $log_num;
        }elseif($member->grade = '5'){
            $remaining = $setting->envelopes_diamond_times - $log_num;
        }
        $data = array
        (
            'remaining' => $remaining,
        );
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data'    =>  $data,
        );
        return $this->response->array($result);

    }

    //红包动态
    public function envelopesWinning(Request $request){
        $wining = LogModel::orderBy('id','DESC')->limit(5)->get();
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data'    =>  $wining,
        );
        return $this->response->array($result);
    }

    //支付宝请求
    public function alipayResonse(Request $request){
        $member_id = $request->member_id;
        $member = MemberModel::find($member_id);
        $amount = 0.01;
        $order = new TransactionModel;
        $order_sn = $this->orderSn();
        $order->trade_out_no = $order_sn;
        $order->trade_amount = $amount;
        $order->trade_project = '购买会员';
        $order->trade_member_id = $member_id;
        $order->trade_mobile = $member->mobile;
        $order->trade_status = '1';
        $order->save();

        $aop = new \AopClient;
        $aop->gatewayUrl = "https://openapi.alipay.com/gateway.do";
        $aop->appId = "2017072807934470";
        $aop->rsaPrivateKey = 'MIIEowIBAAKCAQEA2yZ1LPHfelu1Tawtuo+qxheMss4SSH6MkpvB4q6cHdhZSrfK9iS299owU+2U3M3tM2/JtNLQO+FRdaA2fC3rik+LwedBoDB9VMzFRU2iVt35bWttqrqmEpW3cWZwar2M9vjtNqA+D8d/cp6zg57G962OkMb8pH6n5jGP4PFFj478tUWXjsq/ThwBDRm38BkgCXmDsfeQtDfV7m8LA4YjY5c4PH9UK0QD7ZdH7F6AF+ntrXj0DvpW/HA6MX1B7vD76ndRklt/U5U+xCC/4zitZIEsMZFKAFgYUUpfoYvacBxVlXvfLNQ47P0eVTBpuRceRxtiXOj3cBqWgnTsvgrOzwIDAQABAoIBABSio2fvAocH+aNtsgSeIIt0jjgL9WbEG8J2TiRlIqggxg+mDMNuo5flAKX2egzsiwhL32dabmclCUGVK2w3+rTUVqmUd/Z4emSwv2aOL9oUHrdx5SqtVpPraxGPfshePtbGi7eYER/1Pgfx759WJRAPVJxHUGTA1Fh1lEGvFki1FnSd+WSyyHIQGZm3FV77usDKBb/v3FTqg0i+47W9dCfFuJ/kFLW8agtBW+vf8X97AcxPPglK/HBfWKkuynfLis7nD8U6RYu2qrWTzgBwIzBxdGMIY9c4/Mvjc/JMgxFHHN3eKy+499TInjoHNEpRZxltXJCFlY22cSSRV90hrSkCgYEA74jc082LF9C+CefFdNYqOMfqGSFlVV2PAOUuFsr0h2iGY5vORimghh4zxTXmfpm7Wkiw3oSJCBdlk2clQsIO3ONzYGLjlbFHZCoxXD4cY5VA0WtMD0O8jnz3D9+VEyWzEtXXjBFV1g6GARzkAw9QNcPl0wSxlPY7Mw796K+Lp80CgYEA6jbjD2T66KBmEZ7Zltr/TPRIvvyyFKSS1k+6e/kh5XCt1RmheSBqNe5xm6KadsBpWPh21+oQKbW3g/aMHZm84nu3YCTjXdUSeOU/2En2rW5RNExbbcdRUnPyaTKocNiSE0qSUXPZVqQz3hhrqsJD9175aG/l0sMNHDjTzGgJ/QsCgYBqCKjQbZWcBkCJu/qRnNh16DE9zKXB4zeRiuIbHt6eLmwHHgpyzqyLkkUSkKim9ECWV8VLy1mppknFtYwuAB96Mol5am0ab66NrYvKLIh+oKxfx+KUg0Stwq3PbgbcwfyCYv0WuPnJVwaE6ZgZrqawFjbfcZ12toVANeu6HDNzJQKBgBINFuTp2HizXAqBnq2ExWZt8Wle2m7C3FpOHMZPRjCDxbIF3q8SM31imjjviE4cuEHWLHqpnINKcRFnoBbr8WXXOSPc0/U4ZcsRiCEoWi21seaA+A727KqZKxa2g8rmtiNsfOhwMFEAKMs2QJ4RiOF43WoSLblXtRv2uUQoxJRPAoGBALri98ip+bopucEjGbqV2DAPPaeFy6hsd3VM7/wdXYLN55pu4gqkkw9zJkQklkTcZjmqp/qKU5av60/e1UtcNKLoPpb7bBlrTHaK7Kd29oUAgN4QKblIk2voVwWEv1FUWeUQRXZoX0M9/hFkk6cvyZe/oG/CRtWNlzUqda+4pCdR';
        $aop->format = "json";
        $aop->charset = "UTF-8";
        $aop->signType = "RSA2";
        $aop->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAl2qbdwLaC3146/j0gEXpnlTNd7MuknBhLAMUKygjHj18JreBGyDPIl7HvKMtx4zYGJP8cw4RhxlzMmPMB8STynHI3cfQkzZVVfPlzUJ9w0S07qLLJFeM/XaHbLTIZW2227oxA4rWMxvJWrk3e6GMIkJHJV2OjxUGQowooS73DEWP6pJ5eAPk4t7L9UN9pbOWlk/A+02TmJLhyntKvuZ7m5VDws7V4q7PgBU5EbxCMNInCCIezA0NNnB8UVByR0WqCiyKQRCtSx8xlz8X5DrbNb8ijNboOcsAiRlRnHMPykGi5rL3e/4Z7QejRMOkY/fx6SHyGuBjrct5qpbkR/BDuQIDAQAB';
        //实例化具体API对应的request类,类名称和接口名称对应,当前调用接口名称：alipay.trade.app.pay
        $request = new \AlipayTradeAppPayRequest();
        //SDK已经封装掉了公共参数，这里只需要传入业务参数
        $bizcontent = "{\"body\":\"购买会员\","
            . "\"subject\": \"购买会员\","
            . "\"out_trade_no\": \"$order_sn\","
            . "\"timeout_express\": \"30m\","
            . "\"total_amount\": \"$amount\","
            . "\"product_code\":\"QUICK_MSECURITY_PAY\""
            . "}";
        $request->setNotifyUrl("http//x16311542j.51mypc.cn/api/alipay-notify");
        $request->setBizContent($bizcontent);
        $response = $aop->sdkExecute($request);
        echo htmlspecialchars($response);
    }

    //支付宝接收异步通知
    public function alipayNotify(){
        $pid = '2088721571066306';
        $app_id = '2017072807934470';
        $aop = new \AopClient;
        $aop->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAl2qbdwLaC3146/j0gEXpnlTNd7MuknBhLAMUKygjHj18JreBGyDPIl7HvKMtx4zYGJP8cw4RhxlzMmPMB8STynHI3cfQkzZVVfPlzUJ9w0S07qLLJFeM/XaHbLTIZW2227oxA4rWMxvJWrk3e6GMIkJHJV2OjxUGQowooS73DEWP6pJ5eAPk4t7L9UN9pbOWlk/A+02TmJLhyntKvuZ7m5VDws7V4q7PgBU5EbxCMNInCCIezA0NNnB8UVByR0WqCiyKQRCtSx8xlz8X5DrbNb8ijNboOcsAiRlRnHMPykGi5rL3e/4Z7QejRMOkY/fx6SHyGuBjrct5qpbkR/BDuQIDAQAB';
        $flag = $aop->rsaCheckV1($_POST, NULL, "RSA");
        if($flag == true){
            //验证out_trade_no是否为该系统创建的单号
            $transaction = TransactionModel::where('trade_out_no',$_POST['out_trade_no'])->first();
            if($transaction){
                //验证total_amount是否为该订单金额
                if($transaction->trade_amount == $_POST['total_amount']){
                    //验证seller_id会否为商户PID
                    if($_POST['seller_id'] == $pid){
                        //验证app_id是否正确
                        if($_POST['app_id'] = $app_id){
                            //验证支付状态是否成功
                            if($_POST['trade_status'] == 'TRADE_SUCCESS'){
                                $update_transaction = TransactionModel::find($transaction->id);
                                $update_transaction->trade_payment_time = $_POST['gmt_payment'];
                                $update_transaction->trade_status = '2';
                                if($update_transaction->save()){
                                    echo 'success';
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    //获取购买会员金额
    public function amount(Request $request){
        $amount = 0.01;
        $data = array
        (
            'amount' => $amount,
        );
        $result = array(
            'code' => 100,
            'status' => 'success',
            'data'    =>  $data,
        );
        return $this->response->array($result);
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