@extends("layout.userAccount")

@section("title")

<title>Đăng nhập</title>

@endsection

@section("content")

<div id="app">
    <div>
        <!--  header -->
        @include("auth.layout.header")
        <!-- end header -->
        <!-- content -->
        <div>
            <div class="_2ylm">
                <div>
                    <div class="_2tU6">
                        <section>
                            <header class="_2UJB">
                                <h1>
                                    <span>
                                        <strong>Đăng nhập</strong>
                                        vào SmartMoney
                                    </span>
                                </h1>
                                <p>
                                    Bạn chưa có tài khoản?
                                    <a href="auth/signup" class="_1gOp _2_oj ">Đăng ký ở đây!</a>
                                </p>
                            </header>
                            <div class="_6U5H">
                                <div>
                                    <form action="auth/login" method="post">
                                        {{csrf_field()}}

                                        @if (session('thongbao'))
                                            <div class="alert alert-danger">
                                                {{session('thongbao')}}
                                            </div>
                                        @endif
                                        <div class="oTaE">
                                            <div class="LB4I">
                                                <div class="_3fS2o-cw">
                                                    <div class="iLEV IhHS">
                                                        <div class="BVod">
                                                            <label for="email" class="_1Baa inline IhHS">Địa chỉ e-mail</label>
                                                        </div>
                                                        <div class="_3Iet IhHS">
                                                            <div class="_2ieP">
                                                                <input class="_1mYU required" type="email" value="{{old('email')}}" placeholder="Địa chỉ e-mail" name="email" id="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_3fS2o-cw">
                                                    <div class="iLEV IhHS">
                                                        <div class="BVod">
                                                            <label for="password" class="_1Baa inline IhHS">Mật khẩu</label>
                                                        </div>
                                                        <div class="_3Iet IhHS">
                                                            <div class="_2ieP">
                                                                <input class="_1mYU required" type="password" placeholder="Mật khẩu" name="password" id="password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_3fS2o-cw">
                                                    <div style="text-align: right;
                                                    font-size: 12px;">
                                                        <a href="auth/forgot-password" class="_1gOp">
                                                            <span>Quên mật khẩu?</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="_3fS2o-cw">
                                                    <button type="submit" disabled class="_3SdL _2_oj ">Đăng nhập vào SmartMoney</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                    @include("auth.layout.footer")
                </div>
            </div>
        </div>
        <!-- end content -->
    </div>
</div>

@endsection

@section("script")

<script src="src/js/auth/login.js"></script>

@endsection