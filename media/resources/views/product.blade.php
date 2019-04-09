@extends('layouts.nav_bar')
@section('content')
 <div class="product-section container">
        <div>
            <div class="product-section-image">
                <img src={{$product->_tags['img_path'][0]}} alt="product" class="active" id="currentImage">
            </div>
            <div class="product-section-images">
                <div class="product-section-thumbnail selected">
                    <img src="" alt="product">
                </div>

                                                        <div class="product-section-thumbnail">
                        <img src={{$product->_tags['img_path'][0]}} alt="product">
                    </div>
                                        <div class="product-section-thumbnail">
                        <img src={{$product->_tags['img_path'][0]}} alt="product">
                    </div>
                                        <div class="product-section-thumbnail">
                        <img src={{$product->_tags['img_path'][0]}} alt="product">
                    </div>
                                                </div>
        </div>
        <div class="product-section-information">
        <h1 class="product-section-title">{{$product->title}}</h1>
            <div class="product-section-subtitle">{{$product->description}}</div>
            <div><div class="badge badge-success">In Stock</div></div>
            <div class="product-section-price">${{$product->price}}</div>

            <p>{{$product->description}}</p>

            <p>&nbsp;</p>

                            <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="title" value="{{$product->title}}">
                            <input type="hidden" name="price" value="{{$product->price}}">
                    <button type="submit" class="button button-plain">Add to Cart</button>
                </form>
                    </div>
    </div> <!-- end product-section -->

    <img src={{$product->_tags['img_path'][0]}} alt="product">

@endsection
@section('extra-js')
    <script>
        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>


@endsection