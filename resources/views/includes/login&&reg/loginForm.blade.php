<div class="login-reg__section">
    <div class="container">
        <div class="row">
            <div class="login-reg__section_cont">
                <form class="login__form" action="{{ route('login.process') }}" method="POST">
                    @csrf
                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="text" name="login"
                            placeholder=@lang('messages.login.login-placeholder')>
                        @error('login')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="password" name="password"
                            placeholder=@lang('messages.login.password-placeholder')>
                        @error('password')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="auth__more">
                        <a href="{{ route('registration') }}">@lang('messages.login.register')</a>
                        <div class="login-reg__btn_cont">
                            <button class="login-reg__btn">@lang('messages.login.login')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
