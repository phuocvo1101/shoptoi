<?php

namespace App\Http\Controllers;
use View;
use App\Http\Requests;
//use Illuminate\Http\Request;
use Request;
use DB, Mail;
use Cart;
use App\Http\Requests\DatHangRequest;
use Redirect;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $pag = 16;
    public function __construct()
    {
       // $this->middleware('auth');
        $infors = array(
                        'name' => "Mr. Hiếu" ,
                        'mobile' => "093456.4161",
                        'cty' => "Toyota Tân Cảng",
                        'email' => "toyotahcm.tancang@gmail.com",
                        'addr' =>  "220Bis Ðiện Biên Phủ, P.22, Q. Bình Thạnh, Tp. HCM"                   
                        );

        $title_home = env("TITLE_HOME", 'XuanNguyen');
        View::share ( 'title_home', $title_home );
        $slider = DB::table('sliders')->select('id','name','img')->orderBy('id', 'desc')->get();
        View::share ( 'slider', $slider );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spMoi = DB::table('products')->select('*')->where('parent_id', '<>', 0)->where('spmoi', 1)->orderBy('id', 'desc')->skip(0)->take(8)->get();
        $spBanChay = DB::table('products')->select('*')->where('parent_id', '<>', 0)->where('spbanchay', 1)->orderBy('id', 'desc')->skip(0)->take(8)->get();
        return view('home.index1',compact('spMoi','spBanChay'));
    }
    public function fqa($id)
    {
        $fqa = DB::table('fqas')->select('*')->where('id', $id)->first();
        return view('home.fqa',compact('fqa'));
    }

    public function detailProduct ($id)
    {
        $product = DB::table('products')->select('*')->where('id', $id)->first();
        $productParent = DB::table('products')->select('*')->where('id', $product->parent_id)->first();
        $size_product = DB::table('configs')->select('*')->where('id', $productParent->size)->first();
        $size_product = json_decode($size_product->value);
        $cate = DB::table('cates')->select('*')->where('id', $product->cate_id)->first();
        $relatedProducts = DB::table('products')->select('*')->where('parent_id',$product->parent_id)->where('id','<>',$product->id)->orderBy('id', 'desc')->skip(0)->take(3)->get();
        // var_dump($relatedProducts);die;
        // $image = DB::table('product_images')->select('*')->where('product_id', $product->id)->get();
        return view('home.chitiet',compact('product', 'cate', 'productParent', 'relatedProducts', 'size_product'));
    }

    public function loaisanpham($id, $tenloai) 
    {
        $cate = DB::table('cates')->select('*')->where('id', $id)->first();
        $loai = $cate->name;
        $arrCate = [$id];

        $cate_child_1 = DB::table('cates')->select('*')->where('parent_id', $cate->id)->get();
        if($cate_child_1){
            foreach ($cate_child_1 as $item){
                $cate_child_2 = DB::table('cates')->select('*')->where('parent_id', $item->id)->first();
                array_push($arrCate, $item->id);
                if($cate_child_2){
                    array_push($arrCate, $cate_child_2->id);
                }
            }
        }

        $cate_products = DB::table('products')->select('*')->whereIn('cate_id', $arrCate)->where('parent_id', '<>', 0)->orderBy('id', 'desc')->paginate($this->pag);
        
        return view('home.cate',compact('loai','cate_products'));
    }

    public function postmuahang(){
        $id        = Request::input('product_id');
        $name      = Request::input('product_name');
        $size      = Request::input('product_size');
        $color     = Request::input('product_color');
        $price     = Request::input('product_price');
        $image     = Request::input('product_image');
        
        Cart::add(['id' => $id, 'name' => $name, 'qty' => 1, 'price' => $price, 'options' => ['size' => $size, 'color' => $color, 'image'=> $image]]);
        if(isset($_POST['themGioHang'])){
            $uri = Request::input('router_chi_tiet');
            return Redirect::to($uri);
        }
        return redirect('gio-hang');

    }
    public function giohang(){
        return view('home.cart.giohang');
    }

    public function xoasanpham($rowId){
        Cart::remove($rowId);
        return redirect('gio-hang');
    }

    public function newProduct ()
    {
        $loai = 'MỚI VỀ';
        $cate_products = DB::table('products')->select('*')->where('parent_id', '<>', 0)->where('spmoi', 1)->orderBy('id', 'desc')->paginate($this->pag);
        return view('home.cate',compact('loai','cate_products'));
    }

    public function sanPhamBanChay ()
    {
        $loai = 'BÁN CHẠY';
        $cate_products = DB::table('products')->select('*')->where('parent_id', '<>', 0)->where('spbanchay', 1)->orderBy('id', 'desc')->paginate($this->pag);
        return view('home.cate',compact('loai','cate_products'));
    }

    public function tintuc ()
    {
        $loai = 'Tin tức';
        $news = DB::table('news')->select('id','name','alias','image', 'intro')->orderBy('id', 'desc')->paginate($this->pag);
        return view('home.tintuc',compact('loai','news'));
    }

    public function noibat ()
    {
        $loai = 'Nổi bật';
        $cate_products = DB::table('products')->select('*')->where('parent_id', '<>', 0)->where('spkhuyenmai', 1)->orderBy('id', 'desc')->paginate($this->pag);
        return view('home.cate',compact('loai','cate_products'));
    }

    public function chitiettintuc ($id)
    {
        $new = DB::table('news')->select('*')->where('id', $id)->first();
        return view('home.chitiettintuc',compact('new'));
    }

    public function gioithieu()
    {
        $a = Cart::content();
        $loai = 'Giới thiệu';
        $new = DB::table('news')->select('*')->where('cate_news_id', 3)->first();
        return view('home.gioithieu',compact('loai','new'));
    }
    public function getLienhe () 
    {
        return view('home.lienhe');
    }
    public function postLienhe (Request $request)
    {
        $data = [
                    'hoten'=>Request::input('txtName'),
                    'email'=>Request::input('txtEmail'),
                    'phone'=>Request::input('txtPhone'),
                    'noidung'=>Request::input('txtContent')
                ];
        Mail::send('emails.blanks',$data, function($m) {
            $m->from(Request::input('txtEmail'), 'Phuoc Vo');
            $m->to('phuoclaravel@gmail.com','Admin laravel')->subject('Tin nhắn Khách Hàng Mail xe Oto');

        });
        echo "<script>
                alert('Cảm ơn bạn đã gửi tin. Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất!');
                window.location = '".url('/')."'
            </script>";
    }

    public function postDatHang(Request $dh_request)
    {

        if(isset($_POST['datHang'])){
            $validator = Validator::make(Request::all(), [
                'txtCustomerName' => 'required',
                'txtPhone'   => 'required',
                'txtAddressLine'   => 'required'
            ],
            [
                'txtCustomerName.required'    => 'Vui lòng nhập tên.',
                'txtPhone.required'      => 'Vui lòng nhập điện thoại.',
                'txtAddressLine.required'      => 'Vui lòng nhập địa chỉ.'
            ]);

            if ($validator->fails()) {
                return Redirect::back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $data = [
                    'hoten'=> Request::input('txtCustomerName'),
                    'diachi'=>Request::input('txtAddressLine'),
                    'dienthoai'=>Request::input('txtPhone'),
                    'ghichu'=>Request::input('txtNote')
                ];
            Mail::send('emails.blanks',$data, function($m) {
                $m->from('shopthoitrangtoi@gmail.com', 'Khách Hàng');
                $m->to('shopthoitrangtoi@gmail.com','Shop Toi')->subject('Tin nhắn Khách Hàng Mua Hàng');

            });
    //        ket thuc dat hang
            Cart::destroy();
            return view('home.cart.dathang');
        }

        $cart = Cart::content();
        if($cart){
            foreach ($cart as $item) {
                $id = $item->rowId;
                if(isset($_POST['suaGioHang_'.$id])){
                    $rowId        = Request::input('rowId_'.$id);
                    $qty      = Request::input('qtyUpdate_'.$id);
                    Cart::update($rowId, $qty);
                    return redirect('gio-hang');
                }
            
            }
        }
        
    }

}
