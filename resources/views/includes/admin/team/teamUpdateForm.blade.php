<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('team.update', ['team' => $item]) }}" method="POST"
            enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->name_en }}'
                    name="nameEn" placeholder="Name En">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->name_ru }}'
                    name="nameRu" placeholder="Name Ru">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->position_en }}'
                    name="positionEn" placeholder="Position En">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->position_ru }}'
                    name="positionRu" placeholder="Position Ru">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="file" name="img">
            </div>
            <div class="form__flex">
                <textarea class="admin__inp admin__inp_header form-control" type="text" name="descriptionEn"
                    placeholder="Description En">{{ $item->description_en }}</textarea>
            </div>
            <div class="form__flex">
                <textarea class="admin__inp admin__inp_header form-control" type="text" name="descriptionRu"
                    placeholder="Description Ru">{{ $item->description_ru }}</textarea>
            </div>

            <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $item->id }}'
                name="id">
            <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $item->img }}'
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
