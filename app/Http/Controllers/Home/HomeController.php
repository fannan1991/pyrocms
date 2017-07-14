<?php
namespace App\Http\Controllers\Home;

use Anomaly\PostsModule\Category\CategoryModel;
use Anomaly\PostsModule\Post\PostModel;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller{
    public function getIndex(){
        return view('home.home.index');
    }
    public function getList($category_id){
        $category = CategoryModel::find($category_id);
        $lists = PostModel::where('category_id',$category_id)
            ->where('enabled',1)
            ->orderBy('id','DESC')
            ->get();
        return view('home.home.list')->with('lists',$lists)->with('category',$category);
    }
    public function getDetail($category_id,$id){
        $category = CategoryModel::find($category_id);
        $detail = PostModel::find($id);
        return view('home.home.detail')
            ->with('category',$category)
            ->with('detail',$detail);
    }
}