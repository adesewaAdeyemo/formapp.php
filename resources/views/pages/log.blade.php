@extends('layout.master')
@section('title', 'Home Page')
@section('content')
<center>
    <div class="login" style="display:;">
        <div class="wrapper">
            <div class="formlogo">
                <img src="/images/e.png" alt="">
            </div>
            <div class="text-center mt-4 formname" style="text-align:Center; padding:10px 0;">
                Monk Concept
            </div>
            <form class="p-3 mt-3" action="{{Route('login')}}" method='POST'>
                @csrf
                <div class="form-field d-flex align-items-center">
                    @error('email') <span class="field-error">{{$message}}</span> @enderror
                    <input type="email" name="email" id="uMail" placeholder="E-mail" required>
                </div>
                <div class="form-field d-flex align-items-center">
                    @error('password') <span class="field-error">{{$message}}</span> @enderror
                    <input type="password" name="password" id="uPwd" placeholder="Password" required>
                </div>
                <input type="submit" name="login" id="login" class="logbtn mt-3" value='Log In' required>
            </form>
            <div class="text-center fs-6">
                <a href="#">Forget password?</a> or <a><input type="submit" id="sign" name="signUp" value="Sign Up" style="border:none; outline:none; background:transparent;"></a>
            </div>
        </div>
    </div>
    <div class="signup" style="display:none;">
        <div class="wrapper">
            <div class="formlogo">
                <img src="/images/e.png" alt="">
            </div>
            <div class="text-center mt-4 formname" style="text-align:Center; padding:10px 0;">
                Monk Concept
            </div>
            <form class="p-3 mt-3" action="{{Route('registerlog')}}" method='POST'>
                @csrf
                <div class="form-field d-flex align-items-center">
                    @error('email') <span class="field-error">{{$message}}</span> @enderror
                    <input type="email" name="email" value="" id="newUMail" placeholder="E-mail">
                </div>
                <div class="error"></div>

                <div class="form-field d-flex align-items-center">
                    @error('name') <span class="field-error">{{$message}}</span> @enderror
                    <input type="text" name="name" value="" id="newUName" placeholder="Username">
                </div>
                <div class="error"></div>

                <div class="form-field d-flex align-items-center">
                    @error('password') <span class="field-error">{{$message}}</span> @enderror
                    <input type="password" name="password" value="" id="newUPwd" placeholder="Password">
                </div>
                <div class="error"></div>

                <div class="form-field d-flex align-items-center">
                    @error('password_confirm') <span class="field-error">{{$message}}</span> @enderror
                    <input type="password" name="password_confirmation" value="" id="newPUPwd" placeholder="Repeat Password">
                </div>
                <div class="error"></div>

                <input type="submit" name="signup" id="login" class="logbtn mt-3" value='Sign Up'>
            </form>
            <div class="text-center fs-6">
                <a href="#">Forget password?</a> or <a><input type="submit" id="log" name="log" value="Log In" style="border:none; outline:none; background:transparent;"></a>
            </div>
        </div>
    </div>
</center>
<script>
    const login = document.querySelector(".login");
    const signup = document.querySelector(".signup");
    const sign = document.querySelector("#sign");
    const log = document.querySelector("#log");
    sign.addEventListener('click',(e) => {
        login.style.display='none';
        signup.style.display='block';
        e.preventDefault();
    })
    log.addEventListener('click',(e) => {
        e.preventDefault();
        login.style.display='block';
        signup.style.display='none';
    })

</script>

@endsection