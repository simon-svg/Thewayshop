<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('admin.team.updateForm') }}" method="POST"
            enctype='multipart/form-data'>
            @csrf
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $name }}'
                    name="name" placeholder="Name">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $position }}'
                    name="position" placeholder="Position">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="file" name="img">
            </div>
            <div class="form__flex">
                <textarea class="admin__inp admin__inp_header form-control" type="text" name="description"
                    placeholder="Description">{{ $description }}</textarea>
            </div>

            <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $id }}'
                name="id">
            <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $img }}'
                name="imgHid">
            <div>
                <button class="btn custom-btn admin__form_btn" name="submit">Update Team</button>
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
