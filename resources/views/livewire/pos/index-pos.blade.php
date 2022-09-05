<section class="content">
    <div class="row fx-element-overlay">
        <div class="col-md-9 col-lg-9 col-sm-12">
            <div class="row">
                @foreach ($sub_categories as $sub_categorie)
                    <div class="col-12 col-lg-2 col-xl-3">
                        <div class="box">
                            <div class="fx-card-item">
                                <div class="fx-card-avatar">
                                    @if ($sub_categorie->photo)
                                        <img src="{{ Storage::url($sub_categorie->photo) }}" class="bbsr-0 bber-0"
                                            style="width: 100%; height: 140px; background-size: center; object-fit: cover;" />
                                    @else
                                        <img src="{{ asset('data/noimage.png') }}" class="bbsr-0 bber-0"
                                            style="width: 100%; height: 140px; background-size: center; object-fit: cover;" />
                                    @endif
                                </div>
                                <div class="fx-card-content text-start"
                                    style="margin-top: 0px; margin-bottom: 0px; padding: 5px; height: 50px;">
                                    <div class="product-text">
                                        <div>
                                            <p class="text-muted mb-0">
                                                {{ $sub_categorie->title ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
