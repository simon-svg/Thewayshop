<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('admin.home.updateForm') }}" method="POST"
            enctype='multipart/form-data'>
            @csrf
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $title }}'
                    name="title" placeholder="Title">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $subtitle }}'
                    name="subtitle" placeholder="Subtitle">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="file" name="img">
            </div>

            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $id }}'
                    name="id">
            </div>
            <div>
                <button class="btn custom-btn admin__form_btn" name="submit">Update Home Item</button>
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
