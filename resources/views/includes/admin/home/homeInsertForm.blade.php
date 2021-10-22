<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('home.store') }}" method="POST"
            enctype='multipart/form-data'>
            @csrf
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="titleEn" placeholder="Title En">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="titleRu" placeholder="Title Ru">
            </div>
            <div class="form__flex">
                <textarea class="admin__inp admin__inp_header form-control" type="text" name="subtitleEn"
                    placeholder="Subtitle En"></textarea>
            </div>
            <div class="form__flex">
                <textarea class="admin__inp admin__inp_header form-control" type="text" name="subtitleRu"
                    placeholder="Subtitle Ru"></textarea>
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
