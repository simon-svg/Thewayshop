<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('admin.contact.updateForm') }}" method="POST" >
            @csrf
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $name }}'
                    name="name" placeholder="Name">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $email }}'
                    name="email" placeholder="Email">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="subject" value='{{ $subject }}'
                placeholder="Subject">
            </div>
            <div class="form__flex">
                <textarea class="admin__inp admin__inp_header form-control" type="text" name="message"
                    placeholder="Message">{{ $message }}</textarea>
            </div>

            <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $id }}'
                name="id">
            <div>
                <button class="btn custom-btn admin__form_btn" name="submit">Update Contact</button>
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
