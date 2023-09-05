<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use for request::input
use Request;

use App\Http\Requests;
//include Input 5.2
use Illuminate\Support\Facades\Input;
use App\CateNews;
use App\News;
use File;
use App\Http\Requests\NewsRequest;
use Auth;



class NewsController extends Controller
{
	public function getList() {
		$data = News::select('id','name','created_at')->orderBy('id','DESC')->get()->toArray();
		return view('admin.news.list',compact('data'));
	}
     public function getAdd() {
    	return view('admin.news.add');
    }
    public function postAdd (NewsRequest $request) {
    	//get name image use getClientOrginalName()
    	$file_name = $request->file('fImages')->getClientOriginalName();
    	$file_name = str_random(20).$file_name;

    	$news = new News();
    	$news->name = $request->txtName;
    	$news->alias = changeTitle($request->txtName);
    	$news->intro = $request->txtIntro;
        $news->content = $request->txtContent;
    	$news->image = $file_name;
    	$news->keywords = $request->txtKeywords;
    	$news->description = $request->txtDescription;
    	$news->user_id = Auth::user()->id;
    	$request->file('fImages')->move('upload/',$file_name);
    	$news->save();
  		return redirect()->route('admin.news.getList')->with(['flash_level'=>'success','flash_message'=>'Tin Tức đã được thêm thành công']);
	}
    public function getDelete ($id) {
    	$news = News::find($id);
    	if(!empty($news["image"])) {
    		File::delete('upload/'.$news["image"]);
    	}
    	$news->delete($id);
    	return redirect()->route('admin.news.getList')->with(['flash_level'=>'success','flash_message'=>'Tin tức đã xóa thành công']);
    }
     public function getEdit ($id) {
    	$news = News::find($id)->toArray();
    	return view('admin.news.edit',compact('news'));
    }
    public function postEdit (Request $request,$id) {
    	$news = News::find($id);
    	$news->name = Request::Input('txtName');
    	$news->alias = changeTitle(Request::Input('txtName')) ;
    	$news->intro = Request::Input('txtIntro');
    	$news->content = Request::Input('txtContent');
    	$news->keywords = Request::Input('txtKeywords');
    	$news->description = Request::Input('txtDescription');
    	$news->user_id = Auth::user()->id;
    	if (!empty(Request::File('fImages'))) {
    		$img_current = 'upload/'.Request::Input('img_current');
    		if(File::exists($img_current)) {
    			File::delete($img_current);
    		}
    		$news_img = str_random(20).(Request::File('fImages')->getClientOriginalName());
    		Request::File('fImages')->move('upload/',$news_img);
    		$news->image = $news_img;
    	}
    	$news-> save();
    	return redirect()->route('admin.news.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật Tin Tức thành công']);

    }

}
