<div class="col-sm-12 col-md-6">
            <br>
            <h4>Chi tiết sản phẩm trong giỏ hàng</h4>
            <table class="table table-striped" style="color:#111;background: #fff;">
                <tbody>
                    @foreach(Cart::content() as $row)
                    <tr>
                        <td>
                                <img style="width: 70px; height: 100px;" class="img-responsive" src="{{ asset('upload/'.$row->options->image) }}" alt="{{$row->name}}">
                        </td>
                        <td>
                            <p>{{$row->name}}</p>
                            <p>{{$row->options->color}}, {{$row->options->size}}</p>
                        </td>
                        <td style="width: 160px;">
                            <div>{{$row->price}} *</div>
                            <div>
                                    <input type="hidden" name="rowId_{{$row->rowId}}" value="{{$row->rowId}}">
                                    <table>
                                        <tbody><tr>
                                            <td><input type="text" class="form-control" value="{{$row->qty}}" name="qtyUpdate_{{$row->rowId}}"></td>
                                            <td><button type="submit" name="suaGioHang_{{$row->rowId}}" class="btn btn-default">Update</button></td>
                                        </tr>
                                    </tbody></table>
                                </form>
                            </div>

                            = <span>đ</span> <b>{!! number_format($row->qty * $row->price,0,'.',',') !!}</b>
                        </td>
                        <td>
                            <a href="{!! URL::route('xoasanpham',[$row->rowId]) !!}" class="js-removeFromCart"><i class="fa fa-remove"></i></a>
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
            </tbody></table>
            <hr>
            <button type="submit" name="datHang" class="js-btnPlaceOrder btn btn-info fw">Đặt hàng</button>
        </div>