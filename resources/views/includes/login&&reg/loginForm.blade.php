<div class="login-reg__section">
    <div class="container">
        <div class="row">
            <div class="login-reg__section_cont">
                <form class="login__form" action="#" method="POST">
                    @csrf
                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="text" name="login" placeholder="Login">
                    </div>
                    <div class="login-reg__input_cont">
                        <input class="login-reg__inp" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="login-reg__btn_cont">
                        <button class="login-reg__btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>