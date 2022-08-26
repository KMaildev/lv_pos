<div>
    <div class="row">
        <div id="app" class="app app-content-full-height app-without-sidebar app-without-header">
            <div id="content" class="app-content p-1 pe-xl-4 pt-xl-3 pb-xl-3">

                @include('livewire.waiter-menu.shared.traditional_list')

                <div class="pos card" id="pos">
                    <div class="pos-container card-body">
                        @include('livewire.waiter-menu.shared.menu_lists')
                        @include('livewire.waiter-menu.shared.dish_menu_list')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
