<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Slider;
use File;
class SliderController extends Controller
{
	public function getList () {
		$data = Slider::select('*')->get()->toArray();
		return view('admin.slider.list',compact('data'));
	}
    public function getAdd () {
    	return view('admin.slider.add');
    }

    public function postAdd(Request $request) {
        $file_name = str_random(20).($request->file('fImages')->getClientOriginalName());
    	$cate = new Slider();
    	$cate->name 		= $request->txtName;
        $cate->type 		= 1;
    	$cate->img  = $file_name;
    	$cate->save();
        $request->file('fImages')->move('upload/', $file_name);
    	return redirect()->route('admin.slider.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thanh công']);
    }
    public function getDelete($id) {
        $slider = Slider::find($id);

        if(!empty($slider["img"])) {
            File::delete('upload/'.$slider["img"]);
        }
        $slider->delete($id);
        return redirect()->route('admin.slider.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }

}
