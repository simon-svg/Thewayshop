<div class="admin__section">
    <div class="admin__section_content">
        <div class="admin__contact">
            <table class="admin__table">
                <tr>
                    <th class="admin__table_title">id</th>
                    <th class="admin__table_title">name en</th>
                    <th class="admin__table_title">price</th>
                    <th class="admin__table_title">sale</th>
                    <th class="admin__table_title">description en</th>
                    <th class="admin__table_title">size</th>
                    <th class="admin__table_title">count</th>
                    <th class="admin__table_title">number</th>
                    <th class="admin__table_title">img</th>
                    <th class="admin__table_title">show</th>
                    <th class="admin__table_title">best product</th>
                    <th class="admin__table_title">category id</th>
                    <th class="admin__table_title">panel</th>
                </tr>
                @foreach ($data as $item)
                {{-- {{ dd($item->number) }} --}}
                    <tr class="admin__section_item">
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->id }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->name_en }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->price }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->sale }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->description_en }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->size }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->count }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->number }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <div class="admin__img_cont">
                                <img class="admin__img" src="{{ Storage::url("$item->img") }}" alt="home">
                            </div>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->show }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->best_product }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->category_id }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <form action="{{ route('product.destroy', ['product' => $item]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('product.edit', ['product' => $item]) }}">
                                    <i class="admin__icon fas fa-pencil-alt"></i>
                                </a>
                                <button>
                                    <i class="admin__icon fas fa-times"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div>
            <a href="{{ route('product.create') }}">
                <button class="btn custom-btn admin__form_btn" name="submit">Add Product</button>
            </a>
        </div>
    </div>
</div>
