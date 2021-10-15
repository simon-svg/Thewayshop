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
                    <option value="{{ $categoryItem->id }}" class="parentCatId-option">{{ $categoryItem->name }}</option>
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

<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    $('option[value="{{ $item->parentCategoryId }}"][class="parentCatId-option"]').attr('selected', true);
</script>

{{-- errors --}}
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <p class="error">{{ $e }}</p>
    @endforeach
@endif
