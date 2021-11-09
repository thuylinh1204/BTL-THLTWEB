@extends("layout.index")

@section("title")

<title>Tài khoản</title>

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
                                                        <div>
                                                            <form action="settings/account/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
                                                                {{csrf_field()}}

                                                                @if(count($errors) > 0)
                                                                    <div class="alert alert-danger">
                                                                        @foreach ($errors->all() as $err)
                                                                            {{$err}}
                                                                            <br>
                                                                        @endforeach
                                                                    </div>
                                                                @endif

                                                                @if (session('thongbao'))
                                                                    <div class="alert alert-success">
                                                                        {{session('thongbao')}}
                                                                    </div>
                                                                @endif
                                                                <fieldset class="_33IL">
                                                                    <legend class="wqjZ">Thiết lập tài khoản</legend>
                                                                    <div class="oTaE">
                                                                        <div class="LB4I">
                                                                            <div class="_3fS2 o-cw">
                                                                                <label class="_2vFQ">Ảnh cá nhân</label>
                                                                                <div class="_3yxU">
                                                                                    <div>
                                                                                       <div class="_3CNs">
                                                                                            <div class="_1vBK">
                                                                                                <div class="_2IY9">
                                                                                                    <img class="img" src="src/img/{{Auth::user()->img}}" alt="">
                                                                                                </div>
                                                                                                <div class="ZU-i">
                                                                                                    <span>Kéo ảnh vào đây</span>
                                                                                                </div>
                                                                                                <input class="inputimg" accept="image/*" name="img" type="file">
                                                                                            </div>
                                                                                       </div> 
                                                                                    </div>
                                                                                    <div>
                                                                                        <button class="egUi uploadAvatar _3SdL _3j13 ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="12" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M3.935 12h6L10 7h4L7 0 0 7h4l-.065 5zM0 14h14v2H0v-2z"></path></g></svg>
                                                                                            </span>
                                                                                            <span class="A4xM">Tải Ảnh đại diện</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button" class="egUi removeInverse _3SdL DfeI ">
                                                                                            <span class="_2nf9">
                                                                                                <svg width="12" height="16" viewBox="0 0 12 16" xmlns="http://www.w3.org/2000/svg"><g><path d="M1 14.222C1 15.2 1.75 16 2.667 16h6.666C10.25 16 11 15.2 11 14.222V3.556H1v10.666zM12 1H9l-.857-1H3.857L3 1H0v1.667h12V1z"></path></g></svg>
                                                                                            </span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="LB4I">
                                                                            <div class="_3fS2 _1SIO">
                                                                                <div class="iLEV IhHS">
                                                                                    <div class="BVod">
                                                                                        <label for="firstname" class="_1Baa inline IhHS">Tên</label>
                                                                                    </div>
                                                                                    <div class="_3Iet IhHS">
                                                                                        <div class="_2ieP">
                                                                                            <input class="firstname" value="{{Auth::user()->firstname}}" type="text" id="firstname" placeholder="Tên" name="firstname">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="_3fS2 _1SIO">
                                                                                <div class="iLEV IhHS">
                                                                                    <div class="BVod">
                                                                                        <label for="lastname" class="_1Baa inline IhHS">Họ</label>
                                                                                    </div>
                                                                                    <div class="_3Iet IhHS">
                                                                                        <div class="_2ieP">
                                                                                            <input class="lastname" value="{{Auth::user()->lastname}}" type="text" id="lastname" placeholder="Họ" name="lastname">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="LB4I">
                                                                            <div class="_3fS2 _1SIO">
                                                                                <div class="iLEV">
                                                                                    <div class="BVod">
                                                                                        <label for="gender" class="_1Baa inline">
                                                                                            Giới tính
                                                                                            (tùy chọn)
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="_3Iet">
                                                                                        <div class="_2ieP">
                                                                                            <div class="Select-control">
                                                                                                <select name="gender">
                                                                                                    @if (Auth::user()->gender != NULL)
                                                                                                    <option value="nam" @if (Auth::user()->gender == 'nam')
                                                                                                        selected
                                                                                                    @endif>Nam</option>
                                                                                                    <option value="nữ" @if (Auth::user()->gender == 'nữ')
                                                                                                        selected
                                                                                                    @endif>Nữ</option>
                                                                                                    @else
                                                                                                    <option value="" disabled selected>Giới Tính</option>
                                                                                                    <option value="nam">Nam</option>
                                                                                                    <option value="nữ">Nữ</option>
                                                                                                    @endif
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>                                                                              
                                                                            </div>
                                                                            <div class="_3fS2 o-cw _1ubS">
                                                                                <div class="iLEV">
                                                                                    <div class="BVod">
                                                                                        <label for="birth_date" class="_1Baa inline">
                                                                                            Ngày sinh
                                                                                            (tùy chọn)
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="_3Iet _31bC">
                                                                                        <div class="_2ieP">
                                                                                            <div class="VvaX">
                                                                                                <div class="_8u65">
                                                                                                    <div class="iLEV IhHS">
                                                                                                        <div class="_3Iet IhHS">
                                                                                                            <div class="_2ieP">
                                                                                                                <select class="day" name="day" id="day">
                                                                                                                    @if (Auth::user()->birthday != NULL)
                                                                                                                        @for ($i = 1; $i <= 30; $i++)
                                                                                                                            @if (explode("-", Auth::user()->birthday)[2] == $i)
                                                                                                                            <option value="{{$i}}" selected>{{$i}}</option> 
                                                                                                                            @else
                                                                                                                            <option value="{{$i}}">{{$i}}</option>
                                                                                                                            @endif                                                                                                                 
                                                                                                                        @endfor
                                                                                                                    @else
                                                                                                                        <option value="" disabled selected>Chọn ngày</option>
                                                                                                                        @for ($i = 1; $i <= 30; $i++)
                                                                                                                        <option value="{{$i}}">{{$i}}</option>
                                                                                                                        @endfor
                                                                                                                    @endif
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="_1nm3">
                                                                                                    <div class="iLEV IhHS">
                                                                                                        <div class="_3Iet IhHS">
                                                                                                            <div class="_2ieP">
                                                                                                                <select class="month" name="month" id="month">
                                                                                                                    @if (Auth::user()->birthday != NULL)
                                                                                                                        @for ($i = 1; $i <= 12; $i++)
                                                                                                                            @if (explode("-", Auth::user()->birthday)[1] == $i)
                                                                                                                            <option value="{{$i}}" selected>{{$i}}</option> 
                                                                                                                            @else
                                                                                                                            <option value="{{$i}}">{{$i}}</option>
                                                                                                                            @endif                                                                                                                 
                                                                                                                        @endfor
                                                                                                                    @else
                                                                                                                        <option value="" disabled selected>Chọn tháng</option>
                                                                                                                        @for ($i = 1; $i <= 12; $i++)
                                                                                                                        <option value="{{$i}}">{{$i}}</option>
                                                                                                                        @endfor
                                                                                                                    @endif
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="APyj">
                                                                                                    <div class="iLEV IhHS">
                                                                                                        <div class="_3Iet IhHS">
                                                                                                            <div class="_2ieP">
                                                                                                                <select class="year" name="year" id="year">
                                                                                                                    @if (Auth::user()->birthday != NULL)
                                                                                                                        @for ($i = 1990; $i <= 2020; $i++)
                                                                                                                            @if (explode("-", Auth::user()->birthday)[0] == $i)
                                                                                                                            <option value="{{$i}}" selected>{{$i}}</option> 
                                                                                                                            @else
                                                                                                                            <option value="{{$i}}">{{$i}}</option>
                                                                                                                            @endif                                                                                                                 
                                                                                                                        @endfor
                                                                                                                    @else
                                                                                                                        <option value="" disabled selected>Chọn năm</option>
                                                                                                                        @for ($i = 1990; $i <= 2020; $i++)
                                                                                                                        <option value="{{$i}}">{{$i}}</option>
                                                                                                                        @endfor
                                                                                                                    @endif
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="LB4I">
                                                                            <div class="_3fS2 o-cw _1ubS">
                                                                                <div class="iLEV IhHS">
                                                                                    <div class="BVod">
                                                                                        <label for="email" class="_1Baa inline IhHS">Địa chỉ e-mail</label>
                                                                                    </div>
                                                                                    <div class="_3Iet IhHS">
                                                                                        <div class="_2ieP">
                                                                                            <input class="email" type="email" name="email" placeholder="Địa chỉ e-mail" id="email" value="{{Auth::user()->email}}">
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
                                                                            <button class="_3SdL _2_oj" disabled type="submit">Cập nhật cài đặt của tôi</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div>
                                                            <hr>
                                                            <div>
                                                                <a href="" class="_3WuR _1gOp ">Xóa tài khoản</a>
                                                            </div>
                                                        </div>
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

    <!-- Xóa tài khoản -->

    <div class="ReactModal__Overlay">
        <div class="ReactModal__Content ReactModal__Content--after-open _2RxW" style="z-index: 1000;">
            <div class="_3EUw">
                <form action="settings/account/delete/{{Auth::user()->id}}" method="get">
                    <article class="_2ZwS ">
                        <div class="_13pY">
                            <div class="_36Dk">
                                <button type="button" class="egUi B8bm ">
                                    <span class="_2nf9">
                                        <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="import-step-1" transform="translate(-1252.000000, -166.000000)" fill="currentColor"><g id="import-dialog" transform="translate(420.000000, 158.000000)"><g transform="translate(824.000000, 0.000000)"><path d="M13,13 L8.00684547,13 C7.44994876,13 7,13.4477153 7,14 C7,14.5561352 7.45078007,15 8.00684547,15 L13,15 L13,19.9931545 C13,20.5500512 13.4477153,21 14,21 C14.5561352,21 15,20.5492199 15,19.9931545 L15,15 L19.9931545,15 C20.5500512,15 21,14.5522847 21,14 C21,13.4438648 20.5492199,13 19.9931545,13 L15,13 L15,8.00684547 C15,7.44994876 14.5522847,7 14,7 C13.4438648,7 13,7.45078007 13,8.00684547 L13,13 Z" id="Combined-Shape" transform="translate(14.000000, 14.000000) rotate(45.000000) translate(-14.000000, -14.000000) "></path></g></g></g></g></svg>
                                    </span>
                                </button>
                            </div>
                            <h1 class="_1Fvn">Xóa Tài khoản Spendee của bạn</h1>
                            <div class="j4fJ">
                                <p>Bạn sắp sửa xóa bỏ Tài Khoản Spendee của mình. Vui lòng xác nhận rằng bạn hiểu điều này có ý nghĩa gì. Sau đó xác minh bản thân bằng cách nhập lại mật khẩu tài khoản của bạn.</p>
                                <div class="_1V4J">
                                    <div class="_2k7K _3fHy">
                                        <span class="_17Fo _1D3_">
                                            <span class="_4Nff"></span>
                                        </span>
                                        Tôi hiểu rằng tất cả các ví của mình sẽ bị xóa vĩnh viễn (bao gồm các ví được chia sẻ và kết nối với các tài khoản ngân hàng).
                                    </div>
                                    <div class="_2k7K _3fHy">
                                        <span class="_17Fo _1D3_">
                                            <span class="_4Nff"></span>
                                        </span>
                                        Tôi hiểu rằng tất cả các giao dịch, ngân sách, và dữ liệu của mình trong các ví này sẽ bị xóa vĩnh viễn. (Các giao dịch trong ví chia sẻ sẽ trở thành các giao dịch của người sở hữu ví.)
                                    </div>
                                    <div class="_2k7K _3fHy">
                                        <span class="_17Fo _1D3_">
                                            <span class="_4Nff"></span>
                                        </span>
                                        <span>Tôi hiểu rằng tôi cần phải hủy thuê bao Spendee Plus hoặc Spendee Premium của mình bằng thủ công.</span>
                                    </div>
                                    <div class="_2k7K _3fHy">
                                        <span class="_17Fo _1D3_">
                                            <span class="_4Nff"></span>
                                        </span>
                                        Tôi hiểu rằng quá trình này là vĩnh viễn và không thể trở lại.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_2axu">
                            <button type="submit" disabled="" class="_3SdL _1_Kr ">Xóa tài khoản</button>
                            <a class="_3WuR _1gOp ">Hủy</a>
                        </div>
                    </article>
                </form>
            </div>
        </div>
    </div>

    <!-- End xóa tài khoản -->
    
@endsection

@section("script")

<script src="src/js/settings/account.js"></script>

@endsection