@extends("layout.userAccount")

@section("title")

<title>Quên mật khẩu</title>

@endsection

@section("content")
    <div id="app">
        <div>
            <!--  header -->
            @include('auth.layout.header')
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
                                            <strong>Quên</strong>
                                            mật khẩu của bạn?
                                        </span>
                                    </h1>
                                    <p>
                                        Vui lòng nhập email của bạn bên dưới và chúng tôi sẽ gửi email hướng dẫn bạn cách đặt lại mật khẩu.
                                        <a href="auth/login" class="_1gOp _2_oj ">Quay lại đăng nhập</a>
                                    </p>
                                </header>
                                <div class="_6U5H">
                                    <div>
                                        <form action="auth/forgot-password" method="post">
                                            {{csrf_field()}}
                                            @if (session('thatbai'))
                                                <div class="alert alert-danger">
                                                    {{session('thatbai')}}
                                                </div>
                                            @endif  

                                            @if (session('thanhcong'))
                                                <div class="alert alert-success">
                                                    {{session('thanhcong')}}
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
                                                                    <input class="_1mYU required" value="{{old('email')}}" type="email" placeholder="Địa chỉ e-mail" name="email" id="email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_3fS2o-cw">
                                                        <button type="submit" disabled class="_3SdL _2_oj ">Đặt lại mật khẩu</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->
        </div>
    </div>
@endsection

@section("script")

<script src="src/js/auth/forgot-password.js"></script>

@endsection