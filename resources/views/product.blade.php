<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        @vite(['resources/scss/product.scss'])

        <title>Online Store</title>
    </head>

    <body>
        <div class="content">
            <div class="header">
                <div class="row">
                    <div class="col-lg-6">
                        <p><a href="/">Sklep</a></p>
                    </div>
                    <div class="col-lg-6">
                        <button class="log-in">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve" style="width: 67%; height: 32px;">
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                            <path d="M 85.347 90 c 0 -22.283 -18.064 -40.347 -40.347 -40.347 S 4.653 67.717 4.653 90 H 85.347 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <circle cx="45.003" cy="21.413" r="21.413" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                        </g>
                                    </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="main-content">
                @include('sidebar', ['categoriesData' => $categoriesData])
                <div class="col-lg-9 product-view">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="product-photo">
                                <img src="images/{{$product->image}}" alt="Photo">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="description">
                                <h2>{{$product->name}}</h2>
                                <h3>{{ number_format($product->price, 2, ',', ' ') }} zł</h3>
                                <p>{{$product->text}}</p>
                                <br>
                                <p>{{$product->text}}</p>
                            </div>
                            <form class="purchase" method="POST" action="{{route('add-product')}}">
                                @csrf
                                <div class="counter">
                                    <input type="number" id="product-quantity" name="quantity" min="1" max="99" step="1" value="1">
                                </div>
                                <input type="hidden" name="productId" value={{$product->id}}>
                                <button class="add-to-card" type="submit" value="{{--{{$product = $submitButton}}--}}submit">
                                    DODAJ DO KOSZYKA
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16" style="vertical-align: unset; margin-left: 15px;">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('showPopup'))
                <div id="popup">
                    <div class="popup" >
                        <button class="back-button" type="submit" onclick="closePopup()">Kontynuuj zakupy</button>
                        <button class="order-button" type="submit"><a href="/basket">Idź do koszyka</a></button>
                    </div>
                </div>
            @endif
        </div>
    </body>
</html>

<script>
    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('popup').style.display = 'inline-flex';
    });
</script>


