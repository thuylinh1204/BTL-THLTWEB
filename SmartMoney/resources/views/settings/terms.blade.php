@extends("layout.index")

@section("title")

<title>Điều khoản và Chính sách</title>

@endsection

@section("content")
    <div id="app">
        <div>
            <!--    Header     -->
            @include('settings.layout.header')
            <!--    End header  -->
             <!--    Main      -->
             <div>
                <div class="_2ylm">
                    <div>
                        <div class="_2AsN">
                            <div class="_1BN0">
                                <div class="_2AsN">
                                    <div class="oTaE">
                                        <div class="LB4I">
                                            @include('settings.layout.sideBarLeft')
                                            <div class="_3fS2 o-cw _287O _1Ary">
                                                <div class="_1S3-">
                                                    <div class="_3AQP">
                                                        <fieldset class="_33IL">
                                                            <legend class="wqjZ">Điều khoản và Chính sách</legend>
                                                            <div class="_20EJ">
                                                                <span>
                                                                    <button class="_1gOp _1myF ">Điều khoản sử dụng</button>
                                                                </span>
                                                                <span>
                                                                    <button class="_1gOp _1myF ">Chính sách bảo mật</button>
                                                                </span>
                                                                <span>
                                                                    <button class="_1gOp _1myF ">Thời hạn hợp đồng</button>
                                                                </span>
                                                                <span>
                                                                    <button class="_1gOp _1myF ">Chính sách cookie</button>
                                                                </span>
                                                                <span>
                                                                    <button class="_1gOp _1myF ">Giấy phép</button>
                                                                </span>
                                                            </div>
                                                        </fieldset>
                                                        <form action="">
                                                            <fieldset class="_33IL">
                                                                <legend class="wqjZ">Chính Sách Sử Dụng Dữ Liệu</legend>
                                                                <div class="_1C-b">
                                                                    <div>
                                                                        <div class="_28E_">
                                                                            <label class="mgcW">
                                                                                <input class="check" type="hidden" name="check" value>
                                                                                <span class="_1yjd">
                                                                                    <span class='_3Go8'></span>
                                                                                </span>
                                                                                Nội Dung Quảng Cáo Được Cá Nhân Hoá
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <p class="_8nx6">Theo Điều khoản Sử dụng và Chính sách Bảo mật của Smart Money, tôi đồng ý với việc Smart Money có thể xử lý các dữ liệu cá nhân của tôi cho mục đích tiếp thị nhằm cung cấp cho tôi những nội dung quảng cáo và ưu đãi sản phẩm có liên quan hơn.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="LB4I">
                                                                        <div class="_3fS2 _3qCx">
                                                                            <button type="submit" class="_3SdL _2_oj " disabled>Lưu thay đổi</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                                @include('settings.layout.footer')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--    End main    -->
        </div>

    </div>

@endsection

@section("script")

 <script src="src/js/settings/terms.js"></script>

@endsection