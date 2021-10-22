<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('team.store') }}" method="POST"
            enctype='multipart/form-data'>
            @csrf
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="nameEn" placeholder="Name En">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="nameRu" placeholder="Name Ru">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="positionEn" placeholder="Position En">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="positionRu" placeholder="Position Ru">
            </div>
            <div class="form__flex">
                <textarea class="admin__inp admin__inp_header form-control" type="text" name="descriptionEn"
                    placeholder="Description En"></textarea>
            </div>
            <div class="form__flex">
                <textarea class="admin__inp admin__inp_header form-control" type="text" name="descriptionRu"
                    placeholder="Description Ru"></textarea>
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
