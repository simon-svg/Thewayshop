<div class="admin__section_content">
    <form class="admin__form" action="{{ route('header.store') }}" method="POST">
        @csrf
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="nameEn" placeholder="Name En">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="nameRu" placeholder="Name Ru">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="link" placeholder="Link">
        </div>
        <div>
            <button class="btn custom-btn admin__form_btn" name="submit">Add Header Item</button>
        </div>
    </form>
</div>
