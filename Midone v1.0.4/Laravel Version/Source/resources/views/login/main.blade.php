@extends('../layout/' . $layout)

@section('head')
    <title>Login - Midone - Laravel Admin Dashboard Starter Kit</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Midone Laravel Admin Dashboard Starter Kit" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3">
                        Mid<span class="font-medium">one</span>
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone Laravel Admin Dashboard Starter Kit" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/illustration.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">A few more clicks to <br> sign in to your account.</div>
                    <div class="-intro-x mt-5 text-lg text-white">Manage all your e-commerce accounts in one place</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign In</h2>
                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                    <div class="intro-x mt-8">
                        <form id="login-form">
                            <input type="text" id="input-email" value="midone@left4code.com" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Email">
                            <div id="error-email" class="input__error w-5/6 text-theme-6 mt-2"></div>
                            <input type="password" id="input-password" value="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password">
                            <div id="error-password" class="input__error w-5/6 text-theme-6 mt-2"></div>
                        </form>
                    </div>
                    <div class="intro-x flex text-gray-700 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input type="checkbox" id="input-remember-me" class="input border mr-2" id="remember-me">
                            <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                        </div>
                        <a href="">Forgot Password?</a>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 xl:flex justify-center xl:justify-start">
                        <button id="btn-login" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Login</button>
                        <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Sign up</button>
                    </div>
                    <div class="intro-x mt-10 xl:mt-24 text-gray-700 text-center xl:text-left">
                        By signin up, you agree to our <br> <a class="text-theme-1" href="">Terms and Conditions</a> & <a class="text-theme-1" href="">Privacy Policy</a>
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>    
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            async function login() {
                // Reset state
                $('#login-form').find('.input').removeClass('border-theme-6')
                $('#login-form').find('.input__error').html('')

                // Post form
                let email = $('#input-email').val()
                let password = $('#input-password').val()
                let rememberMe = $('#input-remember-me').val()
                
                // Loading state
                $('#btn-login').html('<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>').svgLoader()
                await helper.delay(1500)

                axios.post(`login`, {
                    email: email,
                    password: password,
                    remember_me: rememberMe
                }).then(res => {
                    location.reload()
                }).catch(err => {
                    $('#btn-login').html('Login')
                    for (const [key, val] of Object.entries(err.response.data.errors)) {
                        $(`#input-${key}`).addClass('border-theme-6')
                        $(`#error-${key}`).html(val)
                    }
                })
            }

            $('#login-form').on('keyup', function(e) {
                if (e.keyCode === 13) {
                    login()
                }
            })
            
            $('#btn-login').on('click', function() {
                login()
            })
        })
    </script>
@endsection