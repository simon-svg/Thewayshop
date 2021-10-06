<div class="admin__section_content">
    <form class="admin__form" action="{{ route('admin.header.sub.updateForm') }}" method="POST">
        @csrf
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $name }}' name="name"
                placeholder="Name">
        </div>

        <div class="form__flex">
            <select name="parentCategoryId" class="admin__select">
                <option value="">no</option>
                @foreach ($headerCategoryData as $item)
                    <option value="{{ $item->id }}" class="parentCatId-option">{{ $item->name }}</option>
                @endforeach
            </select>
            <span>Parent Category Id</span>
        </div>

        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $link }}' name="link"
                placeholder="Link">
        </div>

        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $id }}'
                name="id">
        </div>
        <div>
            <button class="btn custom-btn admin__form_btn" name="submit">Update Header Submenu</button>
        </div>
    </form>
</div>

<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    $('option[value="{{ $parentCategoryId }}"][class="parentCatId-option"]').attr('selected', true);
</script>

{{-- errors --}}
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <p class="error">{{ $e }}</p>
    @endforeach
@endif
