<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Sign Up</title>

    <link rel="shortcut icon" href="{{ asset('backend/images/icon.ico') }} " type="image/x-icon">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/login.css') }}" />
</head>

<body>

    <div class="container sign-up-mode">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}"
                    class="sign-in-form">
                    @csrf
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" name="email" placeholder="E-mail"
                            class="form-control unicase-form-control text-input" id="exampleInputEmail1" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" name="password" placeholder="Password"
                            class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                    </div>
                    <div class="radio outer-xs">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember
                            me!
                        </label>
                        <a href="{{ route('password.request') }}" class="forgot-password pull-right">Forgot your
                            Password?</a>
                    </div>
                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <!-- <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label> -->
                        <input type="text" id="name" name="name" placeholder="Username"
                            class="form-control unicase-form-control text-input">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <!-- <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label> -->
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="form-control unicase-form-control text-input">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <!-- <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label> -->
                        <input type="text" id="phone" name="phone" placeholder="Phone Number"
                            class="form-control unicase-form-control text-input">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                    <i class="fas fa-envelope"></i>
                        <!-- <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label> -->
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="form-control unicase-form-control text-input">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <!-- <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label> -->
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="Password Confirmation" class="form-control unicase-form-control text-input">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>


        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Create your personal account here.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="/res/images/icons/art.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Hello, Welcome to your personal account.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="/res/images/icons/job.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/assets/js/login.js') }}"></script>
</body>

</html>
