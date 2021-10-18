<div class="admin__section">
    <div class="admin__section_content">
        <div class="admin__contact">
            <table class="admin__table">
                <tr>
                    <th class="admin__table_title">id</th>
                    <th class="admin__table_title">title</th>
                    <th class="admin__table_title">subtitle</th>
                    <th class="admin__table_title">img</th>
                    <th class="admin__table_title">panel</th>
                </tr>
                @foreach ($data as $item)
                    <tr class="admin__section_item">
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->id }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->title }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <h3 class="admin__section_item_info">{{ $item->subtitle }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <div class="admin__img_cont">
                                <img class="admin__img" src="{{ Storage::url("$item->img") }}" alt="home">
                            </div>
                            <h3 class="admin__section_item_info">{{ $item->img }}</h3>
                        </td>
                        <td class="admin__section_item_td">
                            <a href="{{ route('admin.home.update', ['id' => $item->id]) }}">
                                <i class="admin__icon fas fa-pencil-alt"></i>
                            </a>
                            <a href="{{ route('admin.home.delete', ['id' => $item->id]) }}">
                                <i class="admin__icon fas fa-times"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div>
            <a href="{{ route('admin.home.add') }}">
                <button class="btn custom-btn admin__form_btn" name="submit">Add Home Item</button>
            </a>
        </div>
    </div>
</div>