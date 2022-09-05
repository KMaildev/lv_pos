<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                {{-- data-widget="tree" --}}
                <ul class="sidebar-menu">

                    <li class="treeview {{ request()->routeIs('dashboard') ? 'active menu-open' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="icon-Home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="treeview {{ request()->routeIs('index_table_list') ? 'active menu-open' : '' }}">
                        <a href="{{ route('index_table_list') }}">
                            <i class="icon-Clipboard-check">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                            </i>
                            <span>Table</span>
                        </a>
                    </li>

                    <li class="header">
                        Menu Configuration
                    </li>


                    <li class="treeview {{ request()->routeIs('index_category') ? 'active menu-open' : '' }}">
                        <a href="{{ route('index_category') }}">
                            <i class="icon-Clipboard-check">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                            </i>
                            <span>Category</span>
                        </a>
                    </li>

                    <li class="treeview {{ request()->routeIs('index_main_category') ? 'active menu-open' : '' }}">
                        <a href="{{ route('index_main_category') }}">
                            <i class="icon-Home"></i>
                            <span>Main Category</span>
                        </a>
                    </li>

                    <li class="treeview {{ request()->routeIs('index_sub_category') ? 'active menu-open' : '' }}">
                        <a href="{{ route('index_sub_category') }}">
                            <i class="icon-Clipboard-check">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                            </i>
                            <span>Menu</span>
                        </a>
                    </li>

                    <li class="treeview {{ request()->routeIs('index_ingredients') ? 'active menu-open' : '' }}">
                        <a href="{{ route('index_ingredients') }}">
                            <i class="icon-Clipboard-check">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                            </i>
                            <span>Ingredients</span>
                        </a>
                    </li>


                    <li class="treeview {{ request()->routeIs('index_traditional') ? 'active menu-open' : '' }}">
                        <a href="{{ route('index_traditional') }}">
                            <i class="icon-Clipboard-check">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                            </i>
                            <span>Traditional Food</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </section>
</aside>
