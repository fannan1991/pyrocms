<?php
namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Fannan\RoomsModule\Order\OrderModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller{
    public function postRoomOrder(Request $request){
        $this->validate($request,
            [
                'num' =>'required | integer',
                'time_start' =>'required',
                'time_end' =>'required',
                'name' =>'required',
                'mobile' => array('required', 'regex:/(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}/')
            ],
            [
                'num.required' =>'请输入入住人数',
                'num.integer' =>'请输入正确的人数',
                'time_start.required' =>'请选择入住时间',
                'time_end.required' =>'请选择入住时间',
                'name.required' =>'请输入入住人姓名',
                'mobile.required' =>'请输入手机号',
                'mobile.regex' =>'请输入正确的手机号',
            ]
        );

        $time_start = new Carbon($request->input('time_start'));
        $time_end = new Carbon($request->input('time_end'));
        if($time_start->lt(Carbon::now()) || $time_start->gt($time_end))
        {
            echo('<script>alert("入住时间有误");history.go(-1);</script>');
        }else{
            $orderSn = date('m') . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
            $orderRoom = new OrderModel;
            $orderRoom->order_sn = $orderSn;
            $orderRoom->order_name = $request->input('name');
            $orderRoom->mobile = $request->input('mobile');
            $orderRoom->order_num = $request->input('num');
            $orderRoom->time_in = $request->input('time_start');
            $orderRoom->time_out = $request->input('time_end');
            $orderRoom->room_type_id = $request->input('room_id');
            $orderRoom->mid = Auth::user()->get()->id;


            if($orderRoom->save()){
                echo('<script>alert("预定成功！");location.href="/mem/rorder";</script>');
            }
        }


    }
    public function postTicketOrder(Request $request){
        $this->validate($request,
            [
                'num' =>'required | integer',
                'play_time' =>'required',
                'name' =>'required',
                'mobile' => array('required', 'regex:/(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}/')
            ],
            [
                'num.required' =>'请输入票数',
                'num.integer' =>'请输入正确的票数',
                'play_time.required' =>'请选择游玩时间',
                'name.required' =>'请输入您的姓名',
                'mobile.required' =>'请输入您的手机号',
                'mobile.regex' =>'请输入正确的手机号',
            ]
        );
        $play_time = new Carbon($request->input('play_time'));
        if($play_time->lt(Carbon::now())){
            echo('<script>alert("入住时间有误");history.go(-1);</script>');
        }else{
            $orderSn = date('m') . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
            $orderTicket = new \Jiege\TicketModule\Order\OrderModel;
            $orderTicket->order_sn = $orderSn;
            $orderTicket->name = $request->input('name');
            $orderTicket->phone = $request->input('mobile');
            $orderTicket->num = $request->input('num');
            $orderTicket->play_time = $request->input('play_time');
            $orderTicket->ticket_id = $request->input('ticket_id');
            $orderTicket->user_id = Auth::user()->get()->id;


            if($orderTicket->save()){
                echo('<script>alert("预定成功！");location.href="/mem/torder";</script>');
            }
        }


    }
}