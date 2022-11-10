@extends('layouts.auth-master')

@section('content')

<div id="menu">
    <a class="btn" id="registerclick" href="{{ url('/register') }}">新規登録</a></li>
    <a class="btn active" id="loginclick">ログイン</a></li>
</div>
<div>
    <!--他の方法のログイン-->
    <a class="social-media"><img src="images/google.png" alt="google" height="20" width="20" />Googleで続ける</a>
    <a class="social-media"><img src="images/twitter.png" alt="google" height="18" width="20" />Twitterで続ける</a>
    <a class="social-media"><img src="images/apple.png" alt="google" height="20" width="18" />Appleで続ける</a>
    <!--真中の線-->

    <div class="middle">
        <span class="mataha">または</span>
    </div>
    <!--下の部分-->

</div>

    <form method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        {{-- <img class="mb-4" src="{!! url('images/logo.png') !!}" alt="" width="300" height="90"> --}}
        
        {{-- <h1 class="h3 mb-3 fw-normal">Login</h1> --}}

        @include('layouts.partials.messages')

        {{-- <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div> --}}

        <label for="floatingName">
            <input type="text" name="username" id="form-control" value="{{ old('username') }}" placeholder="ユーザー名" required="required" autofocus>
        </label>
        @if ($errors->has('username'))
            {{$errors->first('username')}}
        @endif

                
        
        {{-- <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div> --}}

        <label for="floatingPassword">
            <input type="password" name="password" id="form-control" value="{{ old('password') }}" placeholder="パスワード" required="required">
        </label>
        @if ($errors->has('password'))
            {{$errors->first('password')}}
        @endif

        
        <input type="submit" name="submit" id='submit' value="ログイン">
{{--         
        <script>
            document.getElementById("registerclick").onclick = function() {
                this.classList.toggle("blue");
            };

            document.getElementById("loginclick").onclick = function() {
                this.classList.toggle("blue");
            };
        </script> --}}

        <script>
            // Add active class to the current button (highlight it)
            var header = document.getElementById("menu");
            var btns = header.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
              });
            }
        </script>



        @include('auth.partials.copy')
    </form>
@endsection