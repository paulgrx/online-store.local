<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        @vite(['resources/scss/basket.scss'])

        <title>Basket</title>
    </head>
    <body class="mobile">
        <div class="box">
            <h1 class="basket-title">Koszyk</h1>
            <div class="basket">
                <div class="row" id="list">
                    <div class="title-info col-lg-5 col-md-5 col-sm-5 col-12"><p>Produkt</p></div>
                    <div class="title-info col-lg-2 col-2 d-none d-sm-block"><p>Cena</p></div>
                    <div class="title-info col-lg-2 col-2 d-none d-sm-block"><p>Ilość</p></div>
                    <div class="title-info col-lg-2 col-2 d-none d-sm-block"><p>Razem</p></div>
                    <div class="title-info col-lg-1 col-1 d-none d-sm-block"><p>Usuń</p></div>
                </div>
                <hr>
                @if(empty($products))
                    <p>Koszyk jest pusty</p>
                @else
                    @foreach($products as $item)
                        <div class="row" id="purchase-data">
                            <div class="overall-info col-11 col-sm-5">
                                <div class="product-photo col-4 col-sm-6">
                                    <img src="images/{{$item->image}}" alt="Photo">
                                </div>
                                <div class="short-description col-6 col-sm-6">
                                        <h2>{{$item->name}}</h2>
                                </div>
                            </div>
                            <div class="mobile-trash-icon col-1 d-block d-sm-none">
                                <form action="{{route('remove-product') }}" method="post" class="delete-product-form">
                                    @csrf
                                    <input type="hidden" name="productId" value="{{$item->id}}">
                                    <button type="submit" class="product-delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>

                            <div class="price col-2 d-none d-sm-block"><p>{{ number_format($item->price, 2, ',', ' ') }} zł</p></div>
                            <div class="count col-2 d-none d-sm-block">
                                <p id="product-quantity">{{$item->quantity}}</p>
                            </div>
                            <div class="final-price col-2 d-none d-sm-block"><p>{{ number_format($item->final_price, 2, ',', ' ') }} zł</p></div>
                            <div class="trash-icon col-1 d-none d-sm-block">
                                <form action="{{route('remove-product') }}" method="post" class="delete-product-form">
                                    @csrf
                                    <input type="hidden" name="productId" value="{{$item->id}}">
                                    <button type="submit" class="product-delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="mobile-price-summary d-block d-sm-none">
                            <div class="price">
                                <p>Cena</p>
                                <p>{{ number_format($item->price, 2, ',', ' ') }} zł</p>
                            </div>
                            <hr>
                            <div class="count">
                                <p>Ilość</p>
                                <p id="product-quantity">{{$item->quantity}}</p>
                            </div>
                            <hr>
                            <div class="final-price">
                                <p>Razem</p>
                                <p>{{ number_format($item->final_price, 2, ',', ' ') }} zł</p>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                @endif
                <div class="summarize">
                    <div class="row">
                        <div class="col-5 total-count"><p>{{$totalProducts}} PRODUKT(ÓW)</p></div>
                        <div class="col-2 total-in-words"><p>RAZEM</p></div>
                        <div class="col-5 total-price"><p>{{ number_format($totalPrice, 2, ',', ' ') }} zł</p></div>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <a href="{{route('home')}}" class="back-button-link">Wróć do zakupów</a>
                <a href="{{route('form')}}" class="order-button-link">Do kasy {{ number_format($totalPrice, 2, ',', ' ') }} zł</a>
            </div>
        </div>
    </body>
</html>
