<div class="admin__section">
    <div class="admin__section_content">
        <div class="admin__contact">
            <table class="admin__table">
                <tr>
                    <th class="admin__table_title">id</th>
                    <th class="admin__table_title">name</th>
                    <th class="admin__table_title">email</th>
                    <th class="admin__table_title">subject</th>
                    <th class="admin__table_title">message</th>
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
                            <h3 class="admin__section_item_info">{{ $item->email }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->subject }}</h3>
                        </td>
                        <td class="admin__section_item_td" width='25%'>
                            <h3 class="admin__section_item_info">{{ $item->message }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <a href="{{ route('admin.contact.delete', ['id' => $item->id]) }}">
                                <i class="admin__icon fas fa-times"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $data->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>