<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">{{ $settings->site_name }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">||</a>
        </div>
    </aside>

    <ul class="sidebar-menu">
        <li class="menu-header">Vendor Dashboard</li>
        <li class="dropdown active">
            <a href="{{ route('vendor.dashboard') }}" class="nav-link">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>

        <li>
            <a class="nav-link {{ setActive(['vendor.orders.*']) }}" href="{{ route('vendor.orders.index')}}">
                <i class="fas fa-box"></i>
                <span>Orders</span>
            </a>
        </li>

        <li>
            <a class="nav-link {{ setActive(['vendor.products.*']) }}" href="{{ route('vendor.products.index')}}">
                <i class="fas fa-cart-plus"></i>
                <span>Products</span>
            </a>
        </li>

        <li>
            <a class="nav-link {{ setActive(['vendor.reviews.index']) }}" href="{{ route('vendor.reviews.index')}}">
                <i class="fas fa-star"></i>
                <span>Review</span>
            </a>
        </li>

        <li>
            <a class="nav-link {{ setActive(['vendor.reviews.index']) }}" href="{{ route('vendor.withdraw.index')}}">
                <i class="fas fa-star"></i>
                <span>My Withdraw</span>
            </a>
        </li>

        <li>
            <a class="nav-link {{ setActive(['vendor.shop-profile.index']) }}"
               href="{{ route('vendor.shop-profile.index')}}">
                <i class="far fa-user"></i>
                <span>Shop Profile</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="{{ route('vendor.messages.index')}} ">
                <i class="fas fa-home"></i>
                <span>Messenger</span>
            </a>
        </li>

    </ul>
</div>
