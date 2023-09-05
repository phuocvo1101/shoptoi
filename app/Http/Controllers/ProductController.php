<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
// use for ajax request
use Request;

use App\Http\Requests;
use App\Cate;
use App\Product;
use App\ProductImage;
//include Input 5.2
use Illuminate\Support\Facades\Input;
// include File
use File;
use App\Http\Requests\ProductRequest;
use Auth;


class ProductController extends Controller
{
	public function getList() {
		$data = Product::select('id','name','price','cate_id','created_at')->where('parent_id',0)->orderBy('id','DESC')->get()->toArray();
		return view('admin.product.list',compact('data'));
	}
    public function getAdd() {
    	$cate = Cate::select('name','id','parent_id')->get()->toArray();
    	return view('admin.product.add',compact('cate'));
    }
    public function postAdd (ProductRequest $product_request) {
    	$product = new Product();
    	$product->name = $product_request->txtName;
    	$product->alias = changeTitle($product_request->txtName);
    	$product->price = $product_request->txtPrice;
    	$product->intro = $product_request->txtIntro;
    	$product->content = $product_request->txtContent;
    	$product->keywords = $product_request->txtKeywords;
    	$product->description = $product_request->txtDescription;
        $product->size = $product_request->size;
        $product->spmoi = $product_request->spmoi == 'on' ? 1 : 0;
        $product->spkhuyenmai = $product_request->spkhuyenmai == 'on' ? 1 : 0;
        $product->spbanchay = $product_request->spbanchay == 'on' ? 1 : 0;
    	$product->user_id = Auth::user()->id;
    	$product->cate_id = $product_request->sltParent;
    	$product->parent_id = 0;
    	$product->save();
    	$product_id = $product->id;

        for($i=1;$i < 13; $i++){
            $nameDetailProduct = 'fProductDetail' . (string)$i;
            $masp = 'masp' . (string)$i;
            $color = 'mausp' . (string)$i;
            if (Input::hasFile($nameDetailProduct)) {
                $product_img = new Product();
                $file_name_detail = $product_request->file($nameDetailProduct)->getClientOriginalName();
                $file_name_detail = str_random(20).$file_name_detail;
                $product_img->image = $file_name_detail;
                $product_img->user_id = Auth::user()->id;
                $product_img->cate_id = $product_request->sltParent;
                $product_img->size = $product_request->size;
                $product_img->spmoi = $product_request->spmoi == 'on' ? 1 : 0;
                $product_img->spkhuyenmai = $product_request->spkhuyenmai == 'on' ? 1 : 0;
                $product_img->spbanchay = $product_request->spbanchay == 'on' ? 1 : 0;
                $product_img->masp = $product_request->{$masp};
                $product_img->color = $product_request->{$color};
                $product_img->alias = changeTitle($product_request->{$color});
                $product_img->parent_id = $product_id;
                $product_request->file($nameDetailProduct)->move('upload/',$file_name_detail);
                $product_img->save();
         }
        }

    	return redirect()->route('admin.product.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm sản phẩm thành công']);

    }
    public function getDelete ($id) {
    	$product_detail = Product::select('id','name','price','cate_id','created_at')->where('parent_id',$id)->get()->toArray();
		foreach ($product_detail as $value) {
			if(!empty($value)) {
				File::delete('upload/'.$value["image"]);
				$id_img = $value["id"];
				$ProductImage = Product::find($id_img)->delete();
			}
		}
    	$product = Product::find($id);
    	if(!empty($product["image"])) {
    		File::delete('upload/'.$product["image"]);
    	}
    	$product->delete($id);
    	return redirect()->route('admin.product.getList')->with(['flash_level'=>'success','flash_message'=>'Sản phẩm đã được xóa']);
    }

    public function getEdit ($id) {
    	$cate = Cate::select('id','name','parent_id')->get()->toArray();
    	$product = Product::find($id)->toArray();
    	// echo "<pre>"; print_r($product);die();
    	$productDetail = Product::select('*')->where('parent_id',$product['id'])->get()->toArray();
    	return view('admin.product.edit',compact('cate','product','productDetail'));
    }
    public function postEdit (ProductRequest $product_request,$id) {
    	$product = Product::find($id);
        $product->name = $product_request->txtName;
        $product->alias = changeTitle($product_request->txtName);
        $product->price = $product_request->txtPrice;
        $product->intro = $product_request->txtIntro;
        $product->content = $product_request->txtContent;
        $product->keywords = $product_request->txtKeywords;
        $product->size = $product_request->size;
        $product->spmoi = $product_request->spmoi == 'on' ? 1 : 0;
        $product->spkhuyenmai = $product_request->spkhuyenmai == 'on' ? 1 : 0;
        $product->spbanchay = $product_request->spbanchay == 'on' ? 1 : 0;
        $product->description = $product_request->txtDescription;
        $product->user_id = Auth::user()->id;
        $product->cate_id = $product_request->sltParent;
        $product->parent_id = 0;
    	$product-> save();


        // update san pham da co
        $product_detail = Product::select('id','name','price','cate_id','created_at')->where('parent_id',$id)->get()->toArray();
        if($product_detail){
            foreach ($product_detail as $value) {
                $product_img = Product::find($value['id']);
                $product_img->cate_id = $product_request->sltParent;
                $product_img->size = $product_request->size;
                $product_img->spmoi = $product_request->spmoi == 'on' ? 1 : 0;
                $product_img->spkhuyenmai = $product_request->spkhuyenmai == 'on' ? 1 : 0;
                $product_img->spbanchay = $product_request->spbanchay == 'on' ? 1 : 0;
                $product_img-> save();
            }
        }

        // hinh chi tiet
        for($i=1;$i < 13; $i++){
            $nameDetailProduct = 'fProductDetail' . (string)$i;
            $masp = 'masp' . (string)$i;
            $color = 'mausp' . (string)$i;
            if (Input::hasFile($nameDetailProduct)) {
                $product_img = new Product();
                $file_name_detail = $product_request->file($nameDetailProduct)->getClientOriginalName();
                $file_name_detail = str_random(20).$file_name_detail;
                $product_img->image = $file_name_detail;
                $product_img->user_id = Auth::user()->id;
                $product_img->cate_id = $product_request->sltParent;
                $product_img->size = $product_request->size;
                $product_img->spmoi = $product_request->spmoi == 'on' ? 1 : 0;
                $product_img->spkhuyenmai = $product_request->spkhuyenmai == 'on' ? 1 : 0;
                $product_img->spbanchay = $product_request->spbanchay == 'on' ? 1 : 0;
                $product_img->masp = $product_request->{$masp};
                $product_img->color = $product_request->{$color};
                $product_img->alias = changeTitle($product_request->{$color});
                $product_img->parent_id = $id;
                $product_request->file($nameDetailProduct)->move('upload/',$file_name_detail);
                $product_img->save();
         }
        }
    	return redirect()->route('admin.product.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật sản phẩm thành công!!!']);

    }

    public function getDelImg ($id) {
    	if(Request::ajax()) {
    		$idHinh = Request::get('idHinh');
    		$image_detail = Product::find($idHinh);
    		if(!empty($image_detail)) {
    			$img = 'upload/'.$image_detail->image;
    			if(File::exists($img)) {
    				File::delete($img);
    			}
    			$image_detail->delete();
    		}
    		return "OKE";
    	}
    }
}
