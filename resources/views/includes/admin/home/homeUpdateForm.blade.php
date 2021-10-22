<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('home.update', ['home' => $item]) }}" method="POST"
            enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->title_en }}'
                    name="titleEn" placeholder="Title En">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->title_ru }}'
                    name="titleRu" placeholder="Title Ru">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->subtitle_en }}'
                    name="subtitleEn" placeholder="Subtitle En">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->subtitle_ru }}'
                    name="subtitleRu" placeholder="Subtitle Ru">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="file" name="img">
            </div>

            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $item->id }}'
                    name="id">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $item->img }}'
                    name="imgHid">
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
