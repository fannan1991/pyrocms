<?php
namespace App\Http\Controllers\Home;

use Fannan\RoomsModule\Room\RoomModel;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;

class RoomController extends Controller{
    public function getList(){
        $rooms = RoomModel::where('enable',1)->get();
        return view('home.room.list')->with('rooms',$rooms);
    }
    public function getDetail($id){
        $room = RoomModel::find($id);
        $images = DB::table('rooms_rooms_images')->where('entry_id',$id)->where('file_id','!=',0)->orderBy('sort_order','ASC')->get();
        return view('home.room.detail')->with('room',$room)->with('images',$images);
    }

}