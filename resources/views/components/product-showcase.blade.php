@foreach ($products as $product)
    <label for="product-details-modal"
        class="card card-side h-28 bg-base-100 shadow-lg cursor-pointer transition-all duration-200 hover:shadow-md">
        <figure class="h-28 w-28"><img src="{{ asset('images/products/' . $product->image) }}"
                alt="{{ $product->name }}" />
        </figure>
        <div class="card-body">
            <h2 class="card-title text-base">
                {{ $product->name }}
                @if ($product->tag == 'SALE')
                    <div class="badge badge-accent badge-sm absolute right-3 top-3"> {{ $product->tag }} </div>
                @elseif ($product->tag == 'LIMITED')
                    <div class="badge badge-secondary badge-sm absolute right-3 top-3"> {{ $product->tag }} </div>
                @endif
            </h2>
            <div class="flex justify-between items-center">
                <p class="text-sm">

                    @if ($product->discount != null)
                        <span class="line-through">${{ $product->price }} </span>
                        ${{ $product->discount }}
                    @else
                        ${{ $product->price }}
                    @endif

                </p>
                <button class="btn btn-xs btn-primary">Add to Cart</button>
            </div>
        </div>
    </label>
@endforeach
