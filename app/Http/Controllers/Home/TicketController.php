<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Jiege\TicketModule\Ticket\TicketModel;
use Session;

class TicketController extends Controller{
    public function getList(){
        $tickets = TicketModel::where('enable',1)->get();
        return view('home.ticket.list')->with('tickets',$tickets);
    }
    public function getDetail($id){
        $ticket = TicketModel::find($id);
        $images = DB::table('ticket_ticket_images')->where('entry_id',$id)->where('file_id','!=',0)->orderBy('sort_order','ASC')->get();
        return view('home.ticket.detail')->with('ticket',$ticket)->with('images',$images);
    }
}