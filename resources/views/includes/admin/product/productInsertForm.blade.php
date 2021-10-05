<div class="admin__section_content">
    <form class="admin__form" action="{{ route('admin.header.insert') }}" method="POST">
        @csrf
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="name" placeholder="Name">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="number" name="price" placeholder="Price">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="sale" placeholder="Sale">
        </div>
        <div class="form__flex">
            <textarea class="admin__inp admin__inp_header form-control" type="text" name="description" placeholder='Description'></textarea>
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="size" placeholder="Size">
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
        <div class="form__flex">show 
            <select name="show">
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="bestProduct" placeholder="Best Product">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="number" name="categoryId" placeholder="Category Id">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="file" name="imgs[]" placeholder="Imgs">
        </div>
        <div class="form__flex">
            <input class="admin__inp admin__inp_header form-control" type="text" name="sale" placeholder="Sale">
        </div>

        <div>
            <button class="btn custom-btn admin__form_btn" name="submit">Add Product</button>
        </div>
    </form>
</div>