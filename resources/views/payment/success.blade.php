<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        @vite(['resources/scss/app.scss'])

        <title>Success Payment</title>
    </head>
    <body>
        <div class="container-success">
            <header>
                <h2>Opłata zrealizowana!</h2>
            </header>
            <div class="general">
                <div class="row-titles">
                    <div class="col-lg-5">Dane zamawiającego</div>
                    <div class="col-lg-5 order-data">Dane zamówienia</div>
                    <div class="col-lg-2 shipping-data">Adres wysyłki</div>
                </div>
                <hr>
                <div class="row-data">
                    <div class="col-lg-5 client-data">
                        <ul>
                            <li>{{ $ordername }}</li>
                            <li>{{ $email }}</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 order-data">
                        <ul>
                            <li>Numer zamówienia: #{{ $orderId }}</li>
                            <li>Status płatności: {{ $paymentStatus }}</li>
                            <li>Zamówiłeś:
                                <ul>
                                    @foreach($products as $product)
                                        <li>{{$product->name}}</li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>Cena: {{ $amount }}</li>
                            <li>Typ karty: {{ $cardBrand }}</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 shipping-data">
                        <ul>
                            <li>{{ $city }}, ul. {{ $street }} {{ $nr_of_building }}</li>
                            <li>{{$number}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="button">
                <a href="{{route('home')}}" class="back-button-link">Wróć do zakupów</a>
            </div>
        </div>
    </body>
</html>
