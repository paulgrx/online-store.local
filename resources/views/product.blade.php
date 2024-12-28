<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        @vite(['resources/scss/product.scss'])

        <title>Online Store</title>
    </head>

    <body class="mobile">
        <div class="content">
            <div class="header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <p><a href="/">Sklep</a></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 navi-buttons">
                        <button class="log-in" onclick="location.href='{{route('form')}}'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve" style="width: 20px; height: 20px;">
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 85.347 90 c 0 -22.283 -18.064 -40.347 -40.347 -40.347 S 4.653 67.717 4.653 90 H 85.347 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <circle cx="45.003" cy="21.413" r="21.413" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                </g>
                            </svg>
                        </button>
                        <button class="basket-logo" onclick="location.href='{{route('basket')}}'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi-basket" viewBox="0 0 16 16" style="">
                                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </button>
                        <button class="mobile-list d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#categoriesMenu" aria-controls="categoriesMenu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="main-content row">
                @include('sidebar', ['categoriesData' => $categoriesData])
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 product-view">
                    <div class="row">
                        <div class="product-photo col-lg-6 col-md-6 col-sm-6 col-12">
                            <img src="images/{{$product->image}}" alt="Photo">
                        </div>

                        <div class="product-description col-lg-6 col-md-5 col-sm-5 col-12">
                            <div class="description">
                                <h2 class="product-title">{{$product->name}}</h2>
                                <h3 class="product-price">{{ number_format($product->price, 2, ',', ' ') }} zł</h3>
                                <div class="text-content">
                                    <p>{{$product->text}}</p>
                                    <br>
                                    <p>{{$product->text}}</p>
                                </div>
                            </div>
                            <form class="purchase" method="POST" action="{{route('add-product')}}">
                                @csrf
                                <div class="counter">
                                    <input type="number" id="product-quantity" name="quantity" min="1" max="99" step="1" value="1">
                                </div>
                                <input type="hidden" name="productId" value={{$product->id}}>
                                <button class="add-to-card" type="submit" value="{{--{{$product = $submitButton}}--}}submit">
                                    <p>DODAJ DO KOSZYKA</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-basket" viewBox="0 0 16 16" style="vertical-align: unset; margin-left: 0;">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-text-content">
                <div class="text-content">
                    <p>{{$product->text}}</p>
                    <br>
                    <p>{{$product->text}}</p>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            function closePopup() {
                document.getElementById('popup').style.display = 'none';
            }
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('popup').style.display = 'inline-flex';
            });

            document.addEventListener('DOMContentLoaded', function () {
                const offcanvas = document.getElementById('categoriesMenu');
                const breakpoint = 991;

                function closeOffcanvasOnResize() {
                    if (window.innerWidth > breakpoint && offcanvas.classList.contains('show')) {
                        const bootstrapOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
                        if (bootstrapOffcanvas) {
                            bootstrapOffcanvas.hide();
                        }
                    }
                }

                window.addEventListener('resize', closeOffcanvasOnResize);
            });
        </script>

    </body>
</html>

{{--<script>
    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('popup').style.display = 'inline-flex';
    });
</script>--}}


