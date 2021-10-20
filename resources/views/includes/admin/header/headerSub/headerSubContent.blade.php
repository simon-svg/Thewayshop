<div class="admin__section">
    <div class="admin__section_content">
        <div class="admin__contact">
            <table class="admin__table">
                <tr>
                    <th class="admin__table_title">id</th>
                    <th class="admin__table_title">name</th>
                    <th class="admin__table_title">parent category id</th>
                    <th class="admin__table_title">link</th>
                    <th class="admin__table_title">panel</th>
                </tr>
                @foreach ($data as $item)
                    <tr class="admin__section_item">
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->id }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->name }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->parentCategoryId }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->link }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <form action="{{ route('submenu.destroy', ['submenu' => $item]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('submenu.edit', ['submenu' => $item]) }}">
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
            <a href="{{ route('submenu.create') }}">
                <button class="btn custom-btn admin__form_btn" name="submit">Add Header Submenu</button>
            </a>
        </div>
        {{ $data->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>