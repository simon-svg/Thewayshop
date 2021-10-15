<div class="admin__section_content">
    <form class="admin__form" action="{{ route('submenu.store') }}" method="POST">
        @csrf

        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="name" placeholder="Name">
        </div>

        <div class="form__flex">
            <select name="parentCategoryId" class="admin__select">
                <option value="">no</option>
                @foreach ($headerCategoryData as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <span>Parent Category Id</span>
        </div>

        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="link" placeholder="Link">
        </div>

        <div>
            <button class="btn custom-btn admin__form_btn" name="submit">Add Header Submenu</button>
        </div>
    </form>
</div>
