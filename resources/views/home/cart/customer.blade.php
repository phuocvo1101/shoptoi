<div class="col-sm-12 col-md-6">
            <h4>Thông tin người mua/nhận hàng</h4>
            {{-- <form id="formPlaceOrder" action="/cart/PlaceOrder" method="POST"> --}}
                <div class="form-group">
                    <label for="txtCustomerName">Tên</label>
                    <input type="text" class="required form-control" id="txtCustomerName" name="txtCustomerName" placeholder="Tên người nhận">
                </div>
                <div class="form-group">
                    <label for="txtPhone">Điện thoại liên lạc</label>
                    <input type="text" class="required form-control" id="txtPhone" name="txtPhone" placeholder="Số điện thoại">
                    <input type="hidden" name="txtEmail" value="" id="txtEmail">
                </div>
                


                <div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="chosePickupAddress" checked="checked" value="shipToHome">Địa chỉ nhận hàng tại nhà/công ty/bưu điện
                        </label>
                    </div>
                    {{--<div class="radio">--}}
                        {{--<label>--}}
                            {{--<input type="radio" name="chosePickupAddress" value="pickFromShop">Nhận hàng tại cửa hàng YaMe gần nhất--}}
                        {{--</label>--}}
                    {{--</div>--}}
                </div>


                <div class="form-group" id="pnlAddress">
                    <input type="text" class="required form-control" id="txtAddressLine" name="txtAddressLine" placeholder="Địa chỉ nhận hàng">
                </div>


                

                <div class="form-group" id="pnlChoseShop" style="display: none;">
                    <select name="slTakeFromShop" id="slTakeFromShop" class="form-control">
                        <option value="">Chọn cửa hàng nhận hàng</option>
                        <option value="YaMe Cao Lãnh: 66A Tôn Đức Thắng">YaMe Cao Lãnh: 66A Tôn Đức Thắng</option>
                        <option value="YaMe Sóc Trăng: 126 Tôn Đức Thắng">YaMe Sóc Trăng: 126 Tôn Đức Thắng</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="txtNote">Ghi chú</label>
                    <textarea rows="2" class="form-control" id="txtNote" name="txtNote"></textarea>
                </div>
            {{-- </form> --}}
        </div>