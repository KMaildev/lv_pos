<div id="sidebar" class="app-sidebar" style="background-color:#075df1;">
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

        <div class="menu">
            <div class="menu-header text-white">
                Main
            </div>
            <div class="menu-item active">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-cpu" style="color:#ffb100;"></i>
                    </span>
                    <span class="menu-text text-white">
                        Dashboard
                    </span>
                </a>
            </div>

            <div class="menu-divider"></div>
            <div class="menu-header text-white">
                POS System
            </div>
            <div class="menu-item">
                <a href="{{ route('index_waiter_table_list') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-bowl-food"></i>
                    </span>
                    <span class="menu-text text-white">
                        Menu
                    </span>
                </a>
            </div>


            <div class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="menu-text text-white">
                        Order List
                    </span>
                </a>
            </div>

            <div class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-check-double"></i>
                    </span>
                    <span class="menu-text text-white">
                        Complete Order
                    </span>
                </a>
            </div>

            <div class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-history"></i>
                    </span>
                    <span class="menu-text text-white">
                        Order History
                    </span>
                </a>
            </div>

            <div class="menu-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')" class="menu-link"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <span class="menu-icon">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="menu-text text-white">
                            {{ __('Log Out') }}
                        </span>
                    </a>
                </form>
            </div>

        </div>
    </div>
</div>
