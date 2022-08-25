<div class="pos-sidebar" id="pos-sidebar">
    <div class="h-100 d-flex flex-column p-0">
        <div class="pos-sidebar-header">
            <div class="title text-black">
                Menu List
            </div>
        </div>
        <div class="pos-sidebar-body tab-content" data-scrollbar="true" data-height="100%">
            <div class="tab-pane fade h-100 show active" id="newOrderTab">
                @foreach ($categories as $categorie)
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">

                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#MenuId_{{ $categorie->id }}" aria-expanded="false"
                                    aria-controls="MenuId_{{ $categorie->id }}">
                                    {{ $categorie->title ?? '' }}
                                </button>
                            </h3>

                            <div id="MenuId_{{ $categorie->id }}" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="list-group" style="background-color: white">
                                    @foreach ($categorie->main_categories_table as $main_categorie)
                                        <button wire:click="searchMainCategory({{ $main_categorie->id }})"
                                            type="button" class="list-group-item list-group-item-action active">
                                            {{ $main_categorie->title ?? '' }}
                                        </button>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
