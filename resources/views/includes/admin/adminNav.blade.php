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
                    <a class="admin__item admin__item_submenu" href="{{ route('header.index') }}">Header</a>
                </li>
                <li class="admin__nav_header_item">
                    <a class="admin__item admin__item_submenu" href="{{ route('headerCategory.index') }}">Categories</a>
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
                    <a class="admin__item admin__item_submenu" href="{{ route('product.index') }}">Product</a>
                </li>
                <li class="admin__nav_header_item">
                    <a class="admin__item admin__item_submenu" href="{{ route('productCategory.index') }}">Product Category</a>
                </li>
                <li class="admin__nav_header_item">
                    <a class="admin__item admin__item_submenu" href="{{ route('productSize.index') }}">Product Size</a>
                </li>
                <li class="admin__nav_header_item">
                    <a class="admin__item admin__item_submenu" href="{{ route('productImg.index') }}">Product Img</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-admin__item">
            <a class="admin__item" href="{{ route('home.index') }}">Home</a>
        </li>
        <li class="sidebar-admin__item">
            <a class="admin__item" href="{{ route('team.index') }}">Team</a>
        </li>
        <li class="sidebar-admin__item">
            <a class="admin__item" href="{{ route('admin.contact.view') }}">Contact</a>
        </li>
        <li class="sidebar-admin__item">
            <a class="admin__item" href="{{ route('users.index') }}">Users</a>
        </li>
    </ul>
</nav>
