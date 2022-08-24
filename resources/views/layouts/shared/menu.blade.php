<div id="sidebar" class="app-sidebar" style="background-color:#075df1;">
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

        <div class="menu">
            <div class="menu-header">Navigation</div>
            <div class="menu-item active">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-cpu" style="color:#ffb100;"></i>
                    </span>
                    <span class="menu-text" style="color:#03184a;font-weight:bold;">
                        Dashboard
                    </span>
                </a>
            </div>

            <div class="menu-divider"></div>
            <div class="menu-header" style="color:black;">Users</div>
            <div class="menu-item">
                <a href="{{ route('indexuser') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-people"></i>
                    </span>
                    <span class="menu-text" style="color:black;">
                        Users
                    </span>
                </a>
            </div>

            <div class="menu-item">
                <a href="calendar.html" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-calendar4"></i></span>
                    <span class="menu-text" style="color:black;">Calendar</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="settings.html" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-gear"></i></span>
                    <span class="menu-text" style="color:black;">Settings</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="helper.html" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-gem"></i></span>
                    <span class="menu-text" style="color:black;">Helper</span>
                </a>
            </div>
        </div>
    </div>

    <div class="p-3 px-4 mt-auto">
        <a href="documentation/index.html" target="_blank" class="btn d-block btn-outline-theme">
            <i class="fa fa-code-branch me-2 ms-n2 opacity-5"></i> Documentation
        </a>
    </div>
</div>
</div>
