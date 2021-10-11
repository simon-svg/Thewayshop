<div class="login-reg__section">
    <div class="container">
        <div class="row">
            <div class="login-reg__section_cont">
                <form class="reg__form" action="{{ route('registration.process') }}" method="POST">
                    @csrf
                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="text" name="name" placeholder="Name">
                        @error('name')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="text" name="lastName" placeholder="Last Name">
                        @error('lastName')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="email" name="email" placeholder="Email">
                        @error('email')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="text" name="login" placeholder="Login">
                        @error('login')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="password" name="password" placeholder="Password">
                        @error('password')
                            <p class="text__red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="password" name="password_confirmation"
                            placeholder="Confirm Password">
                    </div>
                    <div class="auth__more">
                        <a href="{{ route('login') }}">Login</a>
                        <div class="login-reg__btn_cont">
                            <button class="login-reg__btn">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
