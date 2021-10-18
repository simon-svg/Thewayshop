<div class="admin__section_content">
    <form class="admin__form" action="{{ route('submenu.update', ['submenu' => $item->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->name }}' name="name"
                placeholder="Name">
        </div>
        <div class="form__flex">
            <select name="parentCategoryId" class="admin__select">
                <option value="">no</option>
                @foreach ($headerCategoryData as $categoryItem)
                    @if($categoryItem->id == $item->parentCategoryId){}
                        <option value="{{ $categoryItem->id }}" selected class="parentCatId-option">{{ $categoryItem->name }}</option>
                    @else
                        <option value="{{ $categoryItem->id }}" class="parentCatId-option">{{ $categoryItem->name }}</option>
                    @endif
                @endforeach
            </select>
            <span>Parent Category Id</span>
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $item->link }}' name="link"
                placeholder="Link">
        </div>

        <div>
            <button class="btn custom-btn admin__form_btn" name="submit">Update Header Submenu</button>
        </div>
    </form>
</div>

{{-- errors --}}
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <p class="error">{{ $e }}</p>
    @endforeach
@endif
