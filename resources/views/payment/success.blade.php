<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        @vite(['resources/scss/success.scss'])

        <title>Success Payment</title>
    </head>
    <body>
        <div class="container-success">
            <header>
                <h2>Opłata zrealizowana!</h2>
            </header>
            <div class="general d-none d-md-block">
                <div class="row">
                    <div class="titles">
                        <div class="col-4">Dane zamawiającego</div>
                        <div class="col-5">Dane zamówienia</div>
                        <div class="col-3">Adres wysyłki</div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="data">
                        <div class="col-4 client-data">
                            <ul>
                                <li>{{ $ordername }}</li>
                                <li>{{ $email }}</li>
                            </ul>
                        </div>
                        <div class="col-5 order-data">
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
                        <div class="col-3 shipping-data">
                            <ul>
                                <li>{{ $city }}, ul. {{ $street }} {{ $nr_of_building }}</li>
                                <li>{{$number}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-general d-md-none d-lg-none">
                <div class="mobile-client-data">
                    <h4>Dane zamawiającego</h4>
                    <div class="client-data">
                        <ul>
                            <li>{{ $ordername }}</li>
                            <li>{{ $email }}</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="mobile-order-data">
                    <h4>Dane zamówienia</h4>
                    <div class="order-data">
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
                </div>
                <hr>
                <div class="mobile-shipping-data">
                    <h4>Adres wysyłki</h4>
                    <div class="shipping-data">
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
