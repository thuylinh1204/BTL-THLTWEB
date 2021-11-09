@extends("layout.index")

@section("title")

<title>Cài đặt</title>

@endsection

@section("content")
    <div id="app">
        <div>
            <!--    Header     -->
            @include('wallet.layout.Header')
            <!--    End header  -->
            <!--    Main      -->
            <div>
                <div class="_2ylm">
                    <div class="_2AsN">
                        <div class="_1BN0">
                            <div class="_2AsN">
                                <div class="oTaE">
                                    <div class="LB4I">
                                        <!-- sidebar -->
                                        @include('wallet.settings.layout.sidebar')
                                        <!-- end sidebar -->
                                        <div class="_3fS2 o-cw _287O _1Ary" style="padding: 0.5rem;">
                                            <!-- main content -->
                                            <div class="_1S3-">
                                                <div class="_3AQP">
                                                    <div>
                                                        <form action="" enctype="multipart/form-data">
                                                            <fieldset class="_33IL">
                                                                <legend class="wqjZ">Thông tin chung</legend>
                                                                <div class="oTaE">
                                                                    <div class="LB4I">
                                                                        <div class="_3fS2 _1SIO">
                                                                            <div class="iLEV IhHS">
                                                                                <div class="BVod">
                                                                                    <label for="wallet_name" class="_1Baa inline IhHS">Tên Ví</label>
                                                                                </div>
                                                                                <div class="_3Iet IhHS">
                                                                                    <div class="_2ieP">
                                                                                        <input class="firstname" type="text" id="wallet_name" placeholder="Tên Ví" name="wallet_name">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="LB4I">
                                                                        <div class="_3fS2 o-cw _1ubS">
                                                                            <div class="iLEV IhHS">
                                                                                <div class="BVod">
                                                                                    <label for="balance" class="_1Baa inline IhHS">Khởi tạo số dư</label>
                                                                                </div>
                                                                                <div class="_3Iet IhHS">
                                                                                    <div class="_2ieP">
                                                                                        <input class="balance" type="number" name="balance" placeholder="Số tiền" id="balance" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="_3fS2 _1SIO">
                                                                            <div class="iLEV IhHS">
                                                                                <div class="BVod">
                                                                                    <label for="currency" class="_1Baa inline IhHS">Đơn vị tiền</label>
                                                                                </div>
                                                                                <div class="_3Iet IhHS">
                                                                                    <div class="_2ieP">
                                                                                        <input class="currency" type="text" disabled placeholder="VND"  id ="currency" name="currency">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div>
                                                                <div class="LB4I">
                                                                    <div class="_3fS2 o-cw _1ubS">
                                                                        <button class="_3SdL _2_oj" disabled type="submit">Cập nhật cài đặt </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <fieldset class="_33IL">
                                                                <legend class="wqjZ">Ví thành viên</legend>
                                                                <div>
                                                                    <div class="_2XTe" style="right: 0px;"></div>
                                                                    <div class="_33BO">
                                                                        <div class="_3bjT">
                                                                            <form action="">
                                                                                <div class="oTaE">
                                                                                    <div class="LB4I _3je1" style="margin: 0px -0.5rem;">
                                                                                        <div class="_3fS2 o-cw _1ubS" style="padding: 0rem 0.5rem 0.5rem;">
                                                                                            <div class="iLEV IhHS">
                                                                                                <div class="BVod">
                                                                                                    <label for="email" class="_1Baa inline IhHS">Thêm thành viên mới </label>
                                                                                                </div>
                                                                                                <div class="_3Iet IhHS">
                                                                                                    <div class="_2ieP">
                                                                                                        <input class="_1mYU required" id="email" name="email" placeholder="Địa chỉ email của người được mời" type="email" value="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="_3fS2 o-cw _1ubS _3xLW" style="padding: 0rem 0.5rem 0.5rem;">
                                                                                            <button type="submit" disabled="" class="_3SdL _2_oj ">Gửi lời mời</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                    <div>
                                                        <hr>
                                                        <div>
                                                            <a href="" class="_3WuR _1gOp ">Xóa Ví</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end main content -->
                                            <!-- footer -->
                                            @include('wallet.settings.layout.footer')
                                            <!-- end footer -->
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


    <!-- Xóa ví -->
    <div class="ReactModalPortal">
        <div class="ReactModal__Overlay">
            <div class="ReactModal__Content ReactModal__Content--after-open _2RxW" style="z-index: 1000;">
                <div class="_3EUw">
                    <form action="">
                        <article class="_2ZwS ">
                            <div class="_13pY">
                                <div class="_36Dk">
                                    <button type="button" class="egUi B8bm ">
                                        <span class="_2nf9">
                                            <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="import-step-1" transform="translate(-1252.000000, -166.000000)" fill="currentColor"><g id="import-dialog" transform="translate(420.000000, 158.000000)"><g transform="translate(824.000000, 0.000000)"><path d="M13,13 L8.00684547,13 C7.44994876,13 7,13.4477153 7,14 C7,14.5561352 7.45078007,15 8.00684547,15 L13,15 L13,19.9931545 C13,20.5500512 13.4477153,21 14,21 C14.5561352,21 15,20.5492199 15,19.9931545 L15,15 L19.9931545,15 C20.5500512,15 21,14.5522847 21,14 C21,13.4438648 20.5492199,13 19.9931545,13 L15,13 L15,8.00684547 C15,7.44994876 14.5522847,7 14,7 C13.4438648,7 13,7.45078007 13,8.00684547 L13,13 Z" id="Combined-Shape" transform="translate(14.000000, 14.000000) rotate(45.000000) translate(-14.000000, -14.000000) "></path></g></g></g></g></svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="_2GnZ">
                                    <div class="_1bps">
                                        <svg width="24" height="32" viewBox="0 0 12 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M1 14.222C1 15.2 1.75 16 2.667 16h6.666C10.25 16 11 15.2 11 14.222V3.556H1v10.666zM12 1H9l-.857-1H3.857L3 1H0v1.667h12V1z"></path></g></svg>
                                    </div>
                                </div>
                                <h1 class="">Delete wallet Ví tiền mặt</h1>
                                <div class="j4fJ">
                                    <p>Are you sure you want to delete the wallet Ví tiền mặt? You will lose all your transactions, budgets and overview inside of this wallet.</p>
                                </div>
                            </div>
                            <div class="_2axu">
                                <button type="submit" class="_3SdL _1_Kr ">Xóa ví</button>
                                <a class="_3WuR _1gOp ">Hủy</a>
                            </div>
                        </article>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("script")

<script src="src/js/wallet/settings/general.js"></script>

@endsection