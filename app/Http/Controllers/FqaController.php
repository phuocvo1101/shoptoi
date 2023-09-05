<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fqa;
class FqaController extends Controller
{
	public function getList () {
		$data = Fqa::select('*')->get()->toArray();
		return view('admin.fqa.list',compact('data'));
	}
    public function getAdd () {
    	return view('admin.fqa.add');
    }

    public function postAdd(Request $request) {
        $cate = new Fqa;
        $cate->title 		= $request->txtName;
        $cate->alias 		= changeTitle($request->txtName);
        $cate->content 		= $request->txtContent;
        $cate->save();
        return redirect()->route('admin.fqa.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
    }

    public function getDelete ($id) {
        $fqa = Fqa::find($id);
        $fqa->delete($id);
        return redirect()->route('admin.fqa.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    }

    public function getEdit ($id) {
        $fqa = Fqa::find($id)->toArray();
        return view('admin.fqa.edit',compact('fqa'));
    }
    public function postEdit (Request $request,$id) {
        $fqa = Fqa::find($id);
        $fqa->title 		= $request->txtName;
        $fqa->alias 		= changeTitle($request->txtName);
        $fqa->content 		= $request->txtContent;
        $fqa->save();
        return redirect()->route('admin.fqa.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công']);

    }

}
