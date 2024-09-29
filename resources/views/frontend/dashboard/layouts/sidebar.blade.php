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
        <li class="menu-header">Manage User</li>
        <li class="dropdown active">
            <a href="{{ route('user.dashboard') }}" class="nav-link">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>

        <li>
            <a class="nav-link {{ setActive(['user.orders.*'])}} " href="{{ route('user.order.list') }}">
                <i class="fas fa-box"></i>
                <span>Orders</span>
            </a>
        </li>

        <li>
            <a class="nav-link {{ setActive(['user.review.*']) }}" href="{{ route('user.review.list')}}">
                <i class="far fa-star"></i>
                <span>Reviews</span>
            </a>
        </li>

        <li>
            <a class="nav-link {{ setActive(['user.address.*']) }}" href="{{ route('user.address.list') }}">
                <i class="fal fa-address-book"></i>
                <span>Addresses</span>
            </a>
        </li>

        @if (auth()->user()->role !== 'vendor')
            <li>
                <a class="nav-link {{ setActive(['user.vendor-request.*']) }}"
                   href="{{route('user.vendor-request.index')}}">
                    <i class="far fa-user"></i>
                    <span>Register</span>
                </a>
            </li>
        @endif

        <li>
            <a class="nav-link {{ setActive(['user.messages.index']) }}" href="{{route('user.messages.list')}}">
                <i class="fas fa-notes-medical"></i>
                <span>Messages</span>
            </a>
        </li>

    </ul>
</div>
