<h4>Thông tin khách hàng</h4>
<p>Tên: {!! $hoten !!}</p>
<p>Điện Thoại: {!! $dienthoai !!}</p>
<p>Địa chỉ nhận hàng: {!! $diachi !!}</p>
<p>Ghi Chú: {!! $ghichu !!}</p>


<h4>Chi tiết sản phẩm trong giỏ hàng</h4>
<table class="table table-striped" style="color:#111;background: #fff;">
    <tbody>
        @foreach(Cart::content() as $row)
        <tr>
            <td>
            	{{ asset('upload/'.$row->options->image) }}
                {{-- <img style="width: 70px; height: 100px;" src="{{ asset('upload/'.$row->options->image) }}"> --}}
            </td>
            <td>
                <p>{{$row->name}}</p>
                <p>{{$row->options->color}}, {{$row->options->size}}</p>
            </td>
            <td>
                <div>
                      Giá: {!!$row->price !!} * Số lượng: {!!$row->qty!!}  = <span>đ</span> <b>{!! number_format($row->qty * $row->price,0,'.',',') !!}</b>
                </div>
            </td>
            
        </tr>
        @endforeach

        <tr>
            <td colspan="2" class="text-right">
                Tổng cộng:
            </td>
            <td colspan="2">
                <span>đ</span> <b>{{Cart::subtotal()}}</b>
            </td>
        </tr>
</tbody>
</table>