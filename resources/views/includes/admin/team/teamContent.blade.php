<div class="admin__section">
    <div class="admin__section_content">
        <div class="admin__contact">
            <table class="admin__table">
                <tr>
                    <th class="admin__table_title">id</th>
                    <th class="admin__table_title">name</th>
                    <th class="admin__table_title">position</th>
                    <th class="admin__table_title">img</th>
                    <th class="admin__table_title">description</th>
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
                            <h3 class="admin__section_item_info">{{ $item->position }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <div class="admin__img_cont">
                                <img class="admin__img" src="{{ Storage::url($item->img) }}" alt="team">
                            </div>
                            <h3 class="admin__section_item_info">{{ $item->img }}</h3>
                        </td>
                        <td class="admin__section_item_td" width='25%'>
                            <h3 class="admin__section_item_info">{{ $item->description }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <a href="{{ route('admin.team.update', ['id' => $item->id]) }}">
                                <i class="admin__icon fas fa-pencil-alt"></i>
                            </a>
                            <a href="{{ route('admin.team.delete', ['id' => $item->id]) }}">
                                <i class="admin__icon fas fa-times"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div>
            <a href="{{ route('admin.team.add') }}">
                <button class="btn custom-btn admin__form_btn" name="submit">Add Team</button>
            </a>
        </div>
    </div>
</div>