<div class="admin__section">
    <div class="admin__section_content">
        <div class="admin__contact">
            <table class="admin__table">
                <tr>
                    <th class="admin__table_title">id</th>
                    <th class="admin__table_title">name en</th>
                    <th class="admin__table_title">name ru</th>
                    <th class="admin__table_title">position en</th>
                    <th class="admin__table_title">position ru</th>
                    <th class="admin__table_title">img</th>
                    <th class="admin__table_title">description en</th>
                    <th class="admin__table_title">description ru</th>
                    <th class="admin__table_title">panel</th>
                </tr>
                @foreach ($data as $item)
                    <tr class="admin__section_item">
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->id }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->name_en }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->name_ru }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->position_en }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->position_ru }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <div class="admin__img_cont">
                                <img class="admin__img" src="{{ Storage::url($item->img) }}" alt="team">
                            </div>
                        </td>
                        <td class="admin__section_item_td" width='25%'>
                            <h3 class="admin__section_item_info">{{ $item->description_en }}</h3>
                        </td>
                        <td class="admin__section_item_td" width='25%'>
                            <h3 class="admin__section_item_info">{{ $item->description_ru }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <form action="{{ route('team.destroy', ['team' => $item]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('team.edit', ['team' => $item]) }}">
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
            <a href="{{ route('team.create') }}">
                <button class="btn custom-btn admin__form_btn" name="submit">Add Team</button>
            </a>
        </div>
        {{ $data->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
