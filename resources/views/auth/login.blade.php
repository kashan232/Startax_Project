<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <!-- Link Style -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>StarTax | Lightening Fast Taxation.</title>
</head>

<body>
    <!-- Sign In Page STart -->
    <section class="sign_in_sec">
        <div class="container_main">
            <div class="sign_in">
                <div class="sign_in_heading">
                    <h2>Sign In</h2>
                </div>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="from_group mt-2">
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="from_group mt-2">
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password"  />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="forget mt-4">
                        <a href="#">Forget Password</a>
                        <!-- @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif -->
                    </div>
                    <div class="btn__login mt-3">
                        <input type="Submit" value="Sign in">
                    </div>
                </form>
                <div class="register_span">
                    <span>Don't have an account? <a href="SignUp.html"> Sign Up </a></span>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign In Page End -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="assets/mainjs/main.js"></script>
</body>

</html>