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

        @vite(['resources/scss/app.scss'])

        <title>Basket</title>
    </head>
    <body>
        <div class="box">
            <h1>Koszyk</h1>
            <div class="basket">
                <div class="row" id="list">
                    <div class="col-lg-5">Produkt</div>
                    <div class="col-lg-2">Cena</div>
                    <div class="col-lg-2">Ilość</div>
                    <div class="col-lg-2">Razem</div>
                    <div class="col-lg-1">Usuń</div>
                </div>
                <hr>
                @if(empty($products))
                    <p>Koszyk jest pusty</p>
                @else
                    @foreach($products as $item)
                        <div class="row" id="purchase-data">
                            <div class="col-md-5 overall-info">
                                <div class="col-sm-6 product-photo">
                                    <img src="images/{{$item->image}}" alt="Photo">
                                </div>
                                <div class="col-sm-6 short-description">
                                        <h2>{{$item->name}}</h2><br>
                                        {{--<p>Rozmiar: 5</p><br>
                                        <p>Przeznaczenie: trawa</p>--}}
                                </div>
                            </div>
                            <div class="col-md-2 price"><p>{{$item->price}} zł</p></div>
                            <div class="col-md-2 count">
                                <p id="product-quantity">{{$item->quantity}}</p>
                                {{--<button class="product-count" type="submit">+</button>--}}
                            </div>
                            <div class="col-md-2 final-price"><p>{{$item->final_price}} zł</p></div>
                            <div class="col-md-1 trash-icon">
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
                        <hr>
                    @endforeach
                @endif
                <div class="summarize">
                    <div class="col-md-3 total-count"><p>{{$totalProducts}} PRODUKT(ÓW)</p></div>
                    <div class="col-md-1 total-in-words"><p>RAZEM</p></div>
                    <div class="col-md-1 total-price"><p>{{$totalPrice}} zł</p></div>
                </div>
            </div>
            <div class="buttons">
                <a href="{{route('home')}}" class="back-button-link">Wróć do zakupów</a>
                <a href="{{route('form')}}" class="order-button-link">Zamawiam</a>
                {{--or
                <button onclick="window.location.href='{{ route('home') }}'" class="back-button">Wróć do zakupów</button>--}}
            </div>
        </div>
    </body>
</html>
