<div class="admin__section_content">
    <form class="admin__form" action="{{ route('admin.header.updateForm') }}" method="POST">
        @csrf
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $name }}' name="name" placeholder="Name">
        </div>
        <div class="form__flex">
            <span>Parent Id</span>
            <select name="parentId" class="admin__select">
                <option value="">no</option>
                @foreach ($data as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $link }}' name="link" placeholder="Link">
        </div>

        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="hidden" value='{{ $id }}' name="id">
        </div>
        <div>
            <button class="btn custom-btn admin__form_btn" name="submit">Update Header Item</button>
        </div>
    </form>
</div>

<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    $('option[value="{{ $parentId }}"]').attr('selected', true);
</script>

{{-- errors --}}
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <p class="error">{{ $e }}</p>
    @endforeach
@endif