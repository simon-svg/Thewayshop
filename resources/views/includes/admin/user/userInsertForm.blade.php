<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('admin.users.insert') }}" method="POST" >
            @csrf
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="name" placeholder="Name">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="lastName" placeholder="Last Name">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form__flex">
                <select class="form__flex admin__select" name="role">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                    <option value="superadmin">superadmin</option>
                </select>
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="login" placeholder="Login">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="password" name="password" placeholder="Password">
            </div>
            <div>
                <button class="btn custom-btn admin__form_btn" name="submit">Add User</button>
            </div>
        </form>
    </div>

    {{-- errors --}}
    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <p class="error">{{ $e }}</p>
        @endforeach
    @endif
</div>