@extends('home.master')

@section('title', 'Liên Hệ')


<!-- Informaster -->
@section('infomaster')
    <div class="infomaster">
        <div class="hotline">
            <h2>0909 222 022</h2> Hỗ trợ 24/7
        </div>
        <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>Nguyễn Văn Quý</h2>
    </div>
@endsection
<!-- End informaster -->

@section('right-content')
    <!-- Right content -->
	<div class="col-dl-9 right-content">
	    <div class="wrapper">
	        <h3 class="titlel row-title"><span>Liên hệ<img src="{{ asset('home/images/icon-3.png') }}" alt="danh muc"></span></h3>
	        <div class="clearfix"></div>
	        <div class="content">
	            <div class="col-dl-7">
	                <div class="contact">
	                    <form action="{!! url('lien-he') !!}" method="post" name="frmContact" id="frmContact">
	                    	<input type="hidden"  name="_token" value="{!! csrf_token() !!}">
	                        <label class="lblContact">(
	                            <font color="#FF0000" style="font-weight:normal;">*</font> ) là thông tin bắt buộc.</label>
	                        <div class="clear"></div>
	                        <label class="lblContact lbltxtName">Họ và tên
	                            <font color="#FF0000" style="font-weight:normal;">*</font>:</label>
	                        <br>
	                        <input type="text" name="txtName" id="txtName" class="txtContact require">
	                        <div class="clearfix"></div>
	                        <label class="lblContact lbltxtEmail">Email
	                            <font color="#FF0000" style="font-weight:normal;">*</font>:</label>
	                        <br>
	                        <input type="text" name="txtEmail" id="txtEmail" class="txtContact require">
	                        <div class="clearfix"></div>
	                        <label class="lblContact lbltxtPhone">Điện thoại:</label>
	                        <br>
	                        <input type="text" name="txtPhone" id="txtPhone" class="txtContact">
	                        <div class="clearfix"></div>
	                        <label class="lblContact lbltxtContent">Nội dung
	                            <font color="#FF0000" style="font-weight:normal;">*</font>:</label>
	                        <br>
	                        <textarea name="txtContent" id="txtContent" class="areaContact require" rows="5" cols="35"></textarea>                                                              
	                        <div class="clearfix"></div>
	                        <label class="lblContact"></label>
	                        <input type="hidden" name="token" value="alquG3c3UIWvzE8czVkf">
	                        <input type="hidden" name="action" value="contact">
	                        <input name="btnSubmit" type="submit" class="btnContact" value="Gửi">
	                        <input type="reset" class="btnContact" value="Hủy">
	                        <div class="clearfix"></div>
	                    </form>
	                </div>
	            </div>
	            <div class="col-dl-5 contactr">
	                <p align="center"><img src="{{ asset('home/images/contact.jpg') }}" align="bottom" alt="dang ky"></p>
	                <br>
	                <div class="infofooter">
	                    <h1><span style="color:#0258aa;">Vietnam Star Automobile</span></h1>
	                    <h3><span style="color:#0258aa;">Nhà phân phối Mercedes - Benz lớn nhất Việt Nam</span></h3> &nbsp;
	                    <p>Phân phối xe chính hãng, xe nhập khẩu chính hãng.
	                        <br> Hệ thống bảo hành toàn quốc.
	                        <br> Đổi xe cũ - sở hữu xe mới chính hãng giá ưu đãi.
	                        <br> Dịch vụ hỗ trợ 24/7, Tư vấn lái thử miễn phí.</p>
	                    <p>Địa chỉ: 02 Trường Chinh, P.Tây Thạnh, Q. Tân Phú, TpHCM
	                        <br> Điện thoại: 08.3.815.8888 , xưởng dịch vụ: 08.3815.7030
	                        <br> Email: nguyen-van.quy@vietnamstar-auto.com
	                        <br> Website bán hàng: <a href="{!! url('/')!!}">{!! url('/')!!}</a>
	                        <br><span style="font-size:8px;">LK: <a href="http://www.xemercedes.com.vn/">Mercedes Vietnam</a>,&nbsp;<a href="http://www.xemercedes.com.vn/mercedes-c-class/c200/">Mercedes C200</a> ,<a href="http://www.xemercedes.com.vn/mercedes-s-class/s400/">Mercedes S400</a> ,<a href="http://www.xemercedes.com.vn/mercedes-s-class/s500/">Mercedes S500</a> ,<a href="http://www.xemercedes.com.vn/mercedes-glc-class/">Mercedes GLC</a></span></p>
	                </div>
	            </div>
	            <div class="clearfix"></div>
	            <iframe src="https://www.google.com/maps/d/embed?mid=zWJHY4LnKXUs.kvri3sysezD8" width="100%" height="300"></iframe>
	        </div>
	        <script type="text/javascript">
	        $(document).ready(function() {
	            $('#frmContact').submit(function() {
	                var error = true;
	                $('label.error').remove();
	                $('.require').each(function() {
	                    var att = $(this).attr('id');
	                    if ($('#' + att).val() == '') {
	                        var lbl = 'lbl' + att;
	                        var err = '<label class="lblContact error">(Bắt buộc nhập)</label>';
	                        $(err).insertAfter('.' + lbl);
	                        error = false;
	                    }
	                });
	                if (error == false) {
	                    $('.require').eq(0).focus();
	                    return false;
	                }
	                return true;
	            });
	        });
	        </script>
	    </div>
	</div>
    <!-- End right content -->
@endsection
