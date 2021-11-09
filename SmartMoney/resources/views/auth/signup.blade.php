@extends("layout.userAccount")

@section("title")

<title>Đăng ký</title>

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
                                        <strong>Đăng ký</strong>
                                        vào SmartMoney
                                    </span>
                                </h1>
                                <p>
                                    Đã có tài khoản?
                                    <a href="auth/login" class="_1gOp _2_oj ">Đăng nhập ở đây!</a>
                                </p>
                            </header>
                            <div class="_6U5H">
                                <div>
                                    <form action="auth/signup" method="post">
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
                                                    <div class="iLEV IhHS">
                                                        <div class="BVod">
                                                            <label for="confirmPassword" class="_1Baa inline IhHS">Xác nhận mật khẩu</label>
                                                        </div>
                                                        <div class="_3Iet IhHS">
                                                            <div class="_2ieP">
                                                                <input class="_1mYU required" type="password" placeholder="Xác nhận mật khẩu" name="confirmPassword" id="confirmPassword">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_3fS2o-cw">
                                                    <button type="submit" disabled class="_3SdL _2_oj ">Đăng ký SmartMoney</button>
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

<script src="src/js/auth/signup.js"></script>

@endsection