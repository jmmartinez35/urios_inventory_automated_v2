<section>
    <div class="container">
        <div class="row gx-4 gy-5">
            <div class="col-lg-12 col-12">
                <div class="details-items">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row">

                                <div class="col-lg-10">
                                    <div class="details-image-1 ratio_asos">
                                        <div>
                                            <img src="{{ asset($item->image_path ? 'storage/' . $item->image_path : 'images/not_available.jpg') }}"
                                                id="zoom_01"
                                                data-zoom-image="{{ asset($item->image_path ? 'storage/' . $item->image_path : 'images/not_available.jpg') }}"
                                                class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload"
                                                alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="cloth-details-size">


                                <div class="details-image-concept">
                                    <h2>{{ $item->name }}</h2>
                                </div>

                                @php
                                    $statusMap = [
                                        0 => ['label' => 'Available', 'class' => 'bg-success'],
                                        1 => ['label' => 'Borrowed', 'class' => 'bg-warning'],
                                        2 => ['label' => 'Damaged', 'class' => 'bg-danger'],
                                    ];
                                    $status = $statusMap[$item->status] ?? [
                                        'label' => 'Unknown',
                                        'class' => 'bg-secondary',
                                    ];
                                @endphp
                                <div class="label-section">

                                    <span class="badge {{ $status['class'] }} p-2 fs-7">
                                        {{ $status['label'] }}
                                    </span>
                                </div>
                                <hr>
                                <p><strong>({{ $item->quantity }}) Available Quantity</strong></p>

                                <p>Description: <strong>{{ $item->description }}</strong></p>
                                <form wire:submit.prevent="savetoCart">
                                   
                                    <div class="mb-3">
                                        <label>Quantity</label>
                                        <input type="number" class="form-control w-25" wire:model="single_qty"
                                            min="1" value="1" max="{{ $item->quantity }}"
                                            style="border-radius: 0;">
                                        @error('single_qty')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <input type="hidden" wire:model="item_id" value="{{ $item->id }}">
                                    <div class="product-buttons">
                                        <button type="submit" class="btn btn-solid hover-solid btn-animation">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Borrow</span>

                                        </button>
                                        
                                    </div>
                                    @include('shared.loading')

                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
