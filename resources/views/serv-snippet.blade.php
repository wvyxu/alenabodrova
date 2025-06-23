@foreach ($categories as $subcategory)
    <div class="price-list-item">
        <div class="price-list-item">
            <p class="serv-name">{{$sub->name}}</p>
            @if ($subcategory->subcategories)
                @include('subcategories', ['categories' => $subcategory->subcategories])
            @endif
            {{-- <div>
                <p class="price">2000 р.</p>
                <p class="price">2000 р.</p>
                <p class="price">2000 р.</p>
            </div> --}}
        </div>
        <input type="submit" value="Записаться" class="make-order-btn">
    </div>
@endforeach