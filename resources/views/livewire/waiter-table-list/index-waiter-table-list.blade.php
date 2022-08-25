<div wire:ignore.self wire:key="index_waiter_table_list">

    <div id="app" class="app app-content-full-height app-without-sidebar app-without-header">
        <div id="content" class="app-content p-1 ps-xl-4 pe-xl-4 pt-xl-3 pb-xl-3">
            <div class="pos pos-vertical card" id="pos">
                <div class="pos-container card-body">
                    <div class="input-group">
                        <input type="text" class="form-control text-white bg-secondary" placeholder="Search Table"
                            wire:model="searchTableNo" />
                    </div>

                    <div class="pos-header">
                        <div class="logo">
                            <a href="pos_counter_checkout.html">
                                <div class="logo-img">
                                    <i class="bi bi-x-diamond" style="font-size: 1.5rem;"></i>
                                </div>
                                <div class="logo-text">Table</div>
                            </a>
                        </div>
                    </div>
                    <div class="pos-content">
                        <div class="pos">
                            <div class="pos-container">
                                <div class="pos-content h-100">
                                    <div class="pos-content-container p-3" data-scrollbar="true" data-height="100%">
                                        <div class="row gx-3">
                                            @foreach ($table_lists as $table_list)
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 pb-3"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    wire:click="openGuestsModal({{ $table_list->id }})">
                                                    <div class="pos-checkout-table in-use card">
                                                        <a class="pos-checkout-table-container"
                                                            data-toggle="select-table">
                                                            <div class="pos-checkout-table-header">
                                                                <div class="status">
                                                                    <i class="bi bi-circle-fill"></i>
                                                                </div>
                                                                <div class="fw-bold">Table</div>
                                                                <div class="fw-bold display-6">
                                                                    {{ $table_list->table_no ?? '' }}
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($guestsModalStatus)
        @include('livewire.waiter-table-list.shared.guests_modal')
    @endif
</div>
