@extends('layouts.auth-master')

@section('content')
    
    <div id="menu">
            <a class="btn active" id="registerclick">新規登録</a>
            <a class="btn" id="loginclick" href="{{ url('/login') }}">ログイン</a>

    </div>
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        {{-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"> --}}
        
        {{-- <h1 class="h3 mb-3 fw-normal">Register</h1> --}}
        {{-- <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div> --}}

        <label for='email'><input type="text" name="email" id="email" placeholder="メールアドレス" value="{{old('email')}}" required="required" autofocus></label>
        @if ($errors->has('email'))
        {{$errors->first('email')}}
        @endif

        {{-- <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div> --}}

        <label for="username"><input type="text" name="username" id="username" value="{{old('username')}}" placeholder="ユーザー名" required="required" autofocus></label>
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

        <label for='password'><input type="password" name="password" id="password" placeholder="パスワード" value="{{old('password')}}" required="required">
            <span id="buttonEye" class="fa fa-eye" onclick="pushHideButton1()"></span>
        </label>
        @if ($errors->has('password'))
        {{$errors->first('password')}}
        @endif

        

        <label for='password_confirmation'><input type="password" name="password_confirmation" id="password_confirmation" placeholder="パスワード再確認" value="{{old('password_confirmation')}}" required="required">
            <span id="buttonEye_confirm_password" class="fa fa-eye" onclick="pushHideButton2()"></span>
        </label>
        @if ($errors->has('required="required"'))
        {{$errors->first('required="required"')}}
        @endif

        <div class="checkbox">
            <input type="checkbox" id="scales" name="scales"
                   checked>
            <label for="scales">利用規約とプライバシーに同時して、新規登録をする。</label>
        </div>

        <input type="submit" name="submit" id='submit' value="新規登録">
        
        @include('auth.partials.copy')
    </form>

    <script language="javascript">
        function pushHideButton1() {
          var txtPass = document.getElementById("password");
          var btnEye = document.getElementById("buttonEye");
          if (txtPass.type === "text") {
            txtPass.type = "password";
            btnEye.className = "fa fa-eye";
          } else {
            txtPass.type = "text";
            btnEye.className = "fa fa-eye-slash";
          }
        }
    </script>

    <script language="javascript">
        function pushHideButton2() {
            var txtPass = document.getElementById("password_confirmation");
            var btnEye = document.getElementById("buttonEye_confirm_password");
            if (txtPass.type === "text") {
                txtPass.type = "password";
                btnEye.className = "fa fa-eye";
            } else {
                txtPass.type = "text";
                btnEye.className = "fa fa-eye-slash";
            }
        }
    </script>

    {{-- <script>
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

    {{-- <script>
        const btn = document.querySelector(".loginbtn")
        btn.addEventListener('click', ()=>{
            test.style.backgroundColor="red";
            btn.classList.add('active');
        });
        document.getElementById("loginclick").click();
    </script> --}}

  
@endsection