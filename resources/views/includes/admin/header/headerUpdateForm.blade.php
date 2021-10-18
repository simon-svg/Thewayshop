<div class="admin__section_content">
    <form class="admin__form" action="{{ route('header.update', ['header' => $item]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" value='{{ $name }}' name="name" placeholder="Name">
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

{{-- errors --}}
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <p class="error">{{ $e }}</p>
    @endforeach
@endif