<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('team.store') }}" method="POST"
            enctype='multipart/form-data'>
            @csrf
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="name" placeholder="Name">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="position" placeholder="Position">
            </div>
            <div class="form__flex">
                <textarea class="admin__inp admin__inp_header form-control" type="text" name="description"
                    placeholder="Description"></textarea>
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="file" name="img">
            </div>
            <div>
                <button class="btn custom-btn admin__form_btn" name="submit">Add Home Item</button>
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
