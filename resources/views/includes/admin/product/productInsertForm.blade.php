<div class="admin__section_content">
    <form class="admin__form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="nameEn" placeholder="Name En">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="nameRu" placeholder="Name Ru">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="number" name="price" placeholder="Price">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="sale" placeholder="Sale">
        </div>
        <div class="form__flex">
            <textarea class="admin__inp admin__inp_header form-control" type="text" name="descriptionEn"
                placeholder='Description En'></textarea>
        </div>
        <div class="form__flex">
            <textarea class="admin__inp admin__inp_header form-control" type="text" name="descriptionRu"
                placeholder='Description Ru'></textarea>
        </div>
        <div class="product__select_group">
            <div class="more__info_group">
                <div class="more__info_group_plus more__size_group_plus">+</div>
                <div class="admin__inps_with_plus">
                    <input class="admin__inp admin__inp_header form-control admin__inp_with_plus" type="text"
                        name="size[]" placeholder="Size">
                </div>
            </div>
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="number" name="count" placeholder="Count">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="number" placeholder="Number">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="file" name="img" placeholder="Img">
        </div>
        <div class="form__flex admin__select">show
            <select name="show">
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
        </div>
        <div class="form__flex admin__select">best product
            <select name="bestProduct">
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
        </div>
        <div class="form__flex admin__select">category
            <select name="categoryId">
                @foreach ($productCategory as $item)
                    <option value="{{ $item->id }}">{{ $item->name_en }}</option>
                @endforeach
            </select>
        </div>
        <div class="product__select_group">
            <span class="select__info">Images</span>
            <div class="more__info_group">
                <div class="more__info_group_plus more__img_group_plus">+</div>
                <div class="admin__imgs_with_plus">
                    <input class="admin__inp admin__inp_header form-control admin__inp_with_plus" type="file"
                        name="imgs[]" placeholder="Imgs">
                </div>
            </div>
        </div>

        <div>
            <button class="btn custom-btn admin__form_btn" name="submit">Add Product</button>
        </div>
    </form>
    @foreach ($errors->all() as $error)
        <p style="color: red">{{ $error }}</p>
    @endforeach
</div>
