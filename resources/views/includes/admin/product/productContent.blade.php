<div class="admin__section">
    <div class="admin__section_content">
        <div class="admin__contact">
            <table class="admin__table">
                <tr>
                    <th class="admin__table_title">id</th>
                    <th class="admin__table_title">name</th>
                    <th class="admin__table_title">price</th>
                    <th class="admin__table_title">sale</th>
                    <th class="admin__table_title">description</th>
                    <th class="admin__table_title">size</th>
                    <th class="admin__table_title">count</th>
                    <th class="admin__table_title">number</th>
                    <th class="admin__table_title">img</th>
                    <th class="admin__table_title">show</th>
                    <th class="admin__table_title">best product</th>
                    <th class="admin__table_title">category id</th>
                    <th class="admin__table_title">imgs</th>
                    <th class="admin__table_title">panel</th>
                </tr>
            </table>
        </div>
        <div>
            <a href="{{ route('admin.product.add') }}">
                <button class="btn custom-btn admin__form_btn" name="submit">Add Product</button>
            </a>
        </div>
    </div>
</div>