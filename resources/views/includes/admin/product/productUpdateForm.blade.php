<div class="admin__section_form">
    <div class="admin__section_content">
        <form class="admin__form" action="{{ route('product.update', ['product' => $item]) }}" method="POST"
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
                <input class="admin__inp admin__inp_header form-control" type="number" value='{{ $item->price }}'
                    name="price" placeholder="Price">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" name="sale" value='{{ $item->sale }}'
                placeholder="Sale">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->description_en }}'
                    name="descriptionEn" placeholder="Description Ru">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->description_ru }}'
                    name="descriptionRu" placeholder="Description Ru">
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
                <input class="admin__inp admin__inp_header form-control" type="number" value='{{ $item->count }}'
                    name="count" placeholder="Count">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->number }}'
                    name="number" placeholder="Number">
            </div>
            <div class="form__flex">
                <input class="admin__inp admin__inp_header form-control" type="file" name="img">
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
            <div class="form__flex admin__select">category id
                <select name="categoryId">
                    @foreach ($productCategory as $categoryItem)
                        @if($categoryItem->id == $item->category_id)
                            <option value="{{ $categoryItem->id }}" selected>{{ $categoryItem->name_en }}</option>
                        @else
                            <option value="{{ $categoryItem->id }}">{{ $categoryItem->name_en }}</option>
                        @endif
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
