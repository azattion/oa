<div class="col-md-3 item">
    {{--<div class="sale_tag">--}}
        {{--<div class="ribbon">--}}
            {{--<strong class="ribbon-content">--}}
                {{--<span>Sale</span>--}}
            {{--</strong>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="image full-gallery">

        <a href="/categories/obuv/products/item-1" class="thumb">
            <img src="/static/products/396808-0001_1-325x390.jpeg"
                 class="" alt="396808-0001_1"> </a>

        <div class="white-block description">
            <h4 class="title">
                {{--<a href="{{{route('categories.products.show', [$category->slug, $one["slug"]])}}}">{{{$one["name"]}}}</a>--}}
                <a href="/categories/obuv/products/item-1">{{{$one["name"]}}}</a>
            </h4>
						<span class="type">
				<a href="http://demo.oxygentheme.com/product-category/women/blouses/" rel="tag">Blouses</a>			</span>

            <div class="divider"></div>
            <span class="price">
                <span class="amount">{{{$one["amount"]}}} сом.</span>
                <span class="amount"><a href="/cart/add/{{{$one["id"]}}}">В корзину</a></span>
            </span>
        </div>
    </div>
</div>