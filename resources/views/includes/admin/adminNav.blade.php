<nav class="sidebar-admin">
    <ul class="list-unstyled components">
        <li class="sidebar-admin__item">
            <div class="admin__nav_item">
                <span class="admin__item_title">Header</span>
                <span>
                    <i class="admin__nav_icon fas fa-chevron-down"></i>
                </span>
            </div>
            <ul class="admin__nav_header_list">
                <li class="admin__nav_header_item">
                    <a class="admin__item admin__item_submenu" href="{{ route('admin.header.view') }}">Header</a>
                </li>
                <li class="admin__nav_header_item">
                    <a class="admin__item admin__item_submenu" href="{{ route('admin.header.cat.view') }}">Categories</a>
                </li>
                <li class="admin__nav_header_item">
                    <a class="admin__item admin__item_submenu" href="{{ route('submenu.index') }}">Submenus</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-admin__item">
            <div class="admin__nav_item">
                <span class="admin__item_title">Product</span>
                <span>
                    <i class="admin__nav_icon fas fa-chevron-down"></i>
                </span>
            </div>
            <ul class="admin__nav_header_list">
                <li class="admin__nav_header_item">
                    <a class="admin__item admin__item_submenu" href="{{ route('admin.product.view') }}">Product</a>
                </li>
                {{-- <li class="admin__nav_header_item">
                    <a class="admin__item admin__item_submenu" href="{{ route('admin.product.size.view') }}">Product</a>
                </li> --}}
            </ul>
        </li>
        <li class="sidebar-admin__item">
            <a class="admin__item" href="{{ route('admin.home.view') }}">Home</a>
        </li>
        <li class="sidebar-admin__item">
            <a class="admin__item" href="{{ route('admin.team.view') }}">Team</a>
        </li>
        <li class="sidebar-admin__item">
            <a class="admin__item" href="{{ route('admin.contact.view') }}">Contact</a>
        </li>
        <li class="sidebar-admin__item">
            <a class="admin__item" href="{{ route('admin.users.view') }}">Users</a>
        </li>
    </ul>
</nav>
