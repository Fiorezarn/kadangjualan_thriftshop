@extends('layouts.app')
@section('css', '/css/login.css')
@section('content')
<section>
    <div class="form-structor">
        <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="signup">
                    <h2 class="form-title" id="signup">Sign up</h2> 
                    <div class="form-holder">
                        <input type="text" id="name" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" />
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <input type="email" id="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" />
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <input type="password" id="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" />
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <input type="password" id="password-confirm" class="input" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password" />
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6">
                            <button type="submit" class="submit-btn">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </div>
        </form>


        <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="login slide-up">
                    <div class="center">
                        <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                        <div class="form-holder">
                            <input type="email" id="email" class="input @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            
                            <input type="password"  id="password" class="input  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="row mb-3 mt-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="submit-btn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</section>

<script>
    const loginBtn = document.getElementById('login');
    const signupBtn = document.getElementById('signup');

    loginBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode.parentNode;
        Array.from(e.target.parentNode.parentNode.classList).find((element) => {
            if(element !== "slide-up") {
                parent.classList.add('slide-up')
            }else{
                signupBtn.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
	});
});

    signupBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode;
        Array.from(e.target.parentNode.classList).find((element) => {
            if(element !== "slide-up") {
                parent.classList.add('slide-up')
            }else{
                loginBtn.parentNode.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
	});
});
</script>
@endsection
