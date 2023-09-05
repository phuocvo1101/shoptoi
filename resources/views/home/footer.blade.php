 <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <img style="width: 154px; height: 71px" src="{{ asset('res.yame.vn/Content/images/logo.jpg') }}" alt="Yame.vn" />
                    {{--<img src="../res.yame.vn/Content/images/yame-f-logo-white.png" style="height: 70px;" />--}}
                    <h3>"UY TÍN và CHẤT LƯỢNG"</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div>
                    <p style="margin-bottom: 0;">
                        <span style="font-size: 18px;">Chất lượng</span>
                    </p>
                    <p style="font-size: 14px; font-weight: 300;">Xuân Nguyên cam kết chất lượng cho tất cả sản phẩm của mình.</p>
                    <p style="margin-bottom: 0;">
                        <span style="font-size: 18px;">Phục vụ</span><br/>
                    </p>
                    <p style="font-size: 14px; font-weight: 300;">Xuân Nguyên cam kết chất lượng phục vụ tốt và nhiệt tình nhất, với phương châm Khách Hàng là Thượng Đế.</p>

                    <p style="margin-bottom: 0;">
                        <span style="font-size: 18px;">Hỗ trợ</span>                        
                    </p>
                    <p style="font-size: 14px; font-weight: 300;">Nếu bạn gặp rắc rối về sản phẩm hay chất lượng dịch vụ thì hãy gọi ngay đến số 0888.771077
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <p>&nbsp;</p>
                        <div class="left-aligned">
                            <p style="margin-bottom: 0;">Đặt hàng và thu tiền tận nơi toàn quốc</p>
                            <h5 class="boxed-content-title">0888 771077</h5>
                        </div>
                        <br/>
                        <h4>Thông tin</h4>
                        <ul>
                            <li><a href="/">Giới thiệu về xuannguyen.com.vn</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p>&nbsp;</p>
                        <div class="left-aligned">
                            
                            <h5>CSKH</h5>
                            <p style="margin-bottom: 0;">
                                Than phiền/Chăm sóc khách hàng
                            </p>
                        </div>
                        <br/>
                        <h4>FQA</h4>
                        <?php
                        $fqas = DB::table('fqas')->get();
                        ?>
                        @if (!empty($fqas))
                        <ul>
                            @foreach($fqas as $item)
                            <li><a href="{!! URL::route('fqa',[$item->id,$item->alias]) !!}">{!! $item->title !!}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <h4><i class="fa fa-map-signs"></i> Hệ thống cửa hàng</h4>
            </div>

            <div class="col-md-4">
                <h4>Tp. HỒ CHÍ MINH</h4>
                <p>
                <i class="" style="background-image:
                url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiBQoDAgF3cpNwAAAA70lEQVQoz6XQzyqEcRTG8c95Z0j+RjTTWGBJuQBs2ShKuQzX4w7sLEZyBVNqlkoWNqMky5HRmBHvz8KMXrHzbE49fZ/OOU/4VoKq8Eh8u5mi5h3YNlO0fgJJSVPnF5CkSLMqqibtWlVNcykSiMHuDWsqOs7l9k1ou3ZJKCfYsuxExY4xJV2nnh0qaSSR2LSsrosV63JX7jHuUEujjJq2nmkdrWiRCFNePFkkEqP21OSOpTAAjox4UNfPgjcXbr0X2gnvbpzph4ygp6lbAHjV1ItfRf2h/wPlwfywYFeehrF5H8N7vx7LLJkoBLvu5IFPD8BHPpwYdgUAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTgtMDUtMTBUMDM6MDI6MDEtMDQ6MDA8Zfw7AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE4LTA1LTEwVDAzOjAyOjAxLTA0OjAwTThEhwAAAABJRU5ErkJggg==');display: inline-block;width: 16px;height: 16px;"></i> Cửa Hàng 1: Xuân Nguyên: 216-216c Huỳnh Tấn Phát, p Tân Thuận Tây, Quận 7.
                </p>
                <p>
                <i class="" style="background-image:
                url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiBQoDAgF3cpNwAAAA70lEQVQoz6XQzyqEcRTG8c95Z0j+RjTTWGBJuQBs2ShKuQzX4w7sLEZyBVNqlkoWNqMky5HRmBHvz8KMXrHzbE49fZ/OOU/4VoKq8Eh8u5mi5h3YNlO0fgJJSVPnF5CkSLMqqibtWlVNcykSiMHuDWsqOs7l9k1ou3ZJKCfYsuxExY4xJV2nnh0qaSSR2LSsrosV63JX7jHuUEujjJq2nmkdrWiRCFNePFkkEqP21OSOpTAAjox4UNfPgjcXbr0X2gnvbpzph4ygp6lbAHjV1ItfRf2h/wPlwfywYFeehrF5H8N7vx7LLJkoBLvu5IFPD8BHPpwYdgUAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTgtMDUtMTBUMDM6MDI6MDEtMDQ6MDA8Zfw7AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE4LTA1LTEwVDAzOjAyOjAxLTA0OjAwTThEhwAAAABJRU5ErkJggg==');display: inline-block;width: 16px;height: 16px;"></i> Cửa Hàng 2: Tiến Phát: 476 Huỳnh Tấn Phát, Quận 7 ( Trực thuộc của Xuân Nguyên )
                </p>
            </div>
            <div class="col-md-4">
                <h4>BÌNH DƯƠNG</h4>
                <p>
                    <i class="" style="background-image:
                url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiBQoDAgF3cpNwAAAA70lEQVQoz6XQzyqEcRTG8c95Z0j+RjTTWGBJuQBs2ShKuQzX4w7sLEZyBVNqlkoWNqMky5HRmBHvz8KMXrHzbE49fZ/OOU/4VoKq8Eh8u5mi5h3YNlO0fgJJSVPnF5CkSLMqqibtWlVNcykSiMHuDWsqOs7l9k1ou3ZJKCfYsuxExY4xJV2nnh0qaSSR2LSsrosV63JX7jHuUEujjJq2nmkdrWiRCFNePFkkEqP21OSOpTAAjox4UNfPgjcXbr0X2gnvbpzph4ygp6lbAHjV1ItfRf2h/wPlwfywYFeehrF5H8N7vx7LLJkoBLvu5IFPD8BHPpwYdgUAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTgtMDUtMTBUMDM6MDI6MDEtMDQ6MDA8Zfw7AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE4LTA1LTEwVDAzOjAyOjAxLTA0OjAwTThEhwAAAABJRU5ErkJggg==');display: inline-block;width: 16px;height: 16px;"></i> Cửa Hàng 3: Tiến Phát: Đường NB16, KCN Mỹ Phước 2, Bến Cát ( Trực thuộc của Xuân Nguyên )
                </p>
            </div>
        </div>
    </div>
</div>