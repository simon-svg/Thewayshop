<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('admin.users.updateForm') }}" method="POST" >
            @csrf
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $name }}'
                    name="name" placeholder="Name">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $lastName }}'
                    name="lastName" placeholder="Last Name">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="email" value='{{ $email }}'
                    name="email" placeholder="Email">
            </div>
            <div class="form__flex">
                <select class="form__flex admin__select" name="role">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                    <option value="superadmin">superadmin</option>
                </select>
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="login" value='{{ $login }}'
                    name="login" placeholder="login">
            </div>

            <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $id }}'
                name="id">
            <div>
                <button class="btn custom-btn admin__form_btn" name="submit">Update User</button>
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


<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    $('option[value="{{ $role }}"]').attr('selected', true);
</script>