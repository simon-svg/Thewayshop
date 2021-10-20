<div class="admin__section_content">
    <form class="admin__form" action="{{ route('productCategory.store') }}" method="POST">
        @csrf
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="name" placeholder="Name">
        </div>
        <div class="form__flex admin__select">parent category 
            <select name="parentCategoryId">
                <option value="">no</option>
                @foreach ($headerCategorys as $headerCategory)
                    <option value="{{ $headerCategory->id }}">{{ $headerCategory->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button class="btn custom-btn admin__form_btn" name="submit">Add Product Category</button>
        </div>
    </form>
</div>