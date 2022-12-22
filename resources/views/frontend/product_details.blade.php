@include('layouts._partials.header')
<!-- Breadcrumbs -->
<div class="breadcrumbs mx-wdth">
    <p><a href="">Home</a> / <a href="">Category</a> / <a href="">Product title</a></p>
</div>
<!-- Single Product Description -->
<section class="product-details mx-wdth">
    <div class="single-product-title">
        <h2>Product title</h2>
        <div class="func-btns">
            <a href="">Share</a>
            <a href="">Save</a>
        </div>
    </div>
    <div class="single-product-data">
        <div class="single-product-images">
            <img src="{{ asset('/storage/images/product.png') }}" alt="" class="main-product-image">
            <div class="other-images-row">
                <img src="{{ asset('/storage/images/product.png') }}" alt="">
                <img src="{{ asset('/storage/images/product.png') }}" alt="">
                <img src="{{ asset('/storage/images/product.png') }}" alt="">
                <img src="{{ asset('/storage/images/product.png') }}" alt="">
            </div>
        </div>
        <div class="single-product-opsions">
            <h4>Product description</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem lorem aliquam sed lacinia quis. Nibh dictumst vulputate odio pellentesque sit quis ac, sit ipsum. Sit rhoncus velit in sed massa arcu sit eu. Vitae et vitae eget lorem non dui. Sollicitudin ut mi adipiscing duis. </p>
            <div class="color-size-product">
                <div class="product-colors">
                    <p>Color</p>
                    <div class="product-colors-circles">
                        <input type='radio' name="color" />
                        <input type='radio' name="color" />
                    </div>
                </div>
                <div class="product-sizes">
                    <label for="s">Huey</label>
                    <input type='radio' id="s" name="size" />
                    <label for="m">Huey1</label>
                    <input type='radio' id="m" name="size" />
                    <label for="l">Huey</label>
                    <input type='radio' id="l" name="size" />
                </div>
            </div>
            <div class="product-promotion">
                <input type='radio' name="promo" />
                <input type='radio' name="promo" />
            </div>
            <div class="product-quanity">
                <form>
                    <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                    <input type="number" id="number" value="0" />
                    <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                </form>
            </div>
            <h1>$59.99</h1>
            <div class="end-product-btns">
                <a href="">Add to cart</a>
                <a href="">Check out</a>
            </div>
        </div>
    </div>
</section>
<!-- Products Section -->
<section class="products-homepage mx-wdth">
    <div class="products-title">
        <h3>Related products</h3>
        <a href="">See more ></a>
    </div>
    <div class="archive-home-products">
        <div class="single-home-product">
            <img src="{{ asset('/storage/images/product.png') }}" alt="">
            <div class="product-info">
                <div class="product-home-title">
                    <h5>Product title</h5>
                    <img src="{{ asset('/storage/images/like.png') }}" alt="">
                </div>
                <p>$230</p>
                <div class="rate">
                    <div class="stars">
                        <img src="{{ asset('/storage/images/stars.png') }}" alt="">
                    </div>
                    <p>360 items sold</p>
                </div>
            </div>
        </div>
        <div class="single-home-product">
            <img src="{{ asset('/storage/images/product.png') }}" alt="">
            <div class="product-info">
                <div class="product-home-title">
                    <h5>Product title</h5>
                    <img src="{{ asset('/storage/images/like.png') }}" alt="">
                </div>
                <p>$230</p>
                <div class="rate">
                    <div class="stars">
                        <img src="{{ asset('/storage/images/stars.png') }}" alt="">
                    </div>
                    <p>360 items sold</p>
                </div>
            </div>
        </div>
        <div class="single-home-product">
            <img src="{{ asset('/storage/images/product.png') }}" alt="">
            <div class="product-info">
                <div class="product-home-title">
                    <h5>Product title</h5>
                    <img src="{{ asset('/storage/images/like.png') }}" alt="">
                </div>
                <p>$230</p>
                <div class="rate">
                    <div class="stars">
                        <img src="{{ asset('/storage/images/stars.png') }}" alt="">
                    </div>
                    <p>360 items sold</p>
                </div>
            </div>
        </div>
        <div class="single-home-product">
            <img src="{{ asset('/storage/images/product.png') }}" alt="">
            <div class="product-info">
                <div class="product-home-title">
                    <h5>Product title</h5>
                    <img src="{{ asset('/storage/images/like.png') }}" alt="">
                </div>
                <p>$230</p>
                <div class="rate">
                    <div class="stars">
                        <img src="{{ asset('/storage/images/stars.png') }}" alt="">
                    </div>
                    <p>360 items sold</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts._partials.footer')
<script>
    function increaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number').value = value;
    }

    function decreaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        value--;
        document.getElementById('number').value = value;
    }
</script>