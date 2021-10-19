<div class="login-reg__section">
    <div class="container">
        <div class="row">
            <div class="login-reg__section_cont">
                <form class="reg__form" action="{{ route('registration.process') }}" method="POST">
                    @csrf
                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="text" name="name" value="{{ old('name') }}"
                            placeholder=@lang('messages.register.name-placeholder')>
                        @error('name')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="text" name="lastName" value="{{ old('lastName') }}"
                            placeholder=@lang('messages.register.last-name-placeholder')>
                        @error('lastName')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="email" name="email" value="{{ old('email') }}"
                            placeholder=@lang('messages.register.email-placeholder')>
                        @error('email')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="text" name="login" value="{{ old('login') }}"
                            placeholder=@lang('messages.register.login-placeholder')>
                        @error('login')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="password" name="password" value="{{ old('password') }}"
                            placeholder=@lang('messages.register.password-placeholder')>
                        @error('password')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="password" name="password_confirmation"
                            value="{{ old('password_confirmation') }}"
                            placeholder=@lang('messages.register.confirm-password-placeholder')>
                    </div>
                    <div class="auth__more">
                        <a href="{{ route('login') }}">@lang('messages.register.login')</a>
                        <div class="login-reg__btn_cont">
                            <button class="login-reg__btn">@lang('messages.register.register')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
