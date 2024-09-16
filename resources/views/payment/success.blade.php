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
                <div class="row">
                    <div class="col-lg-5 client-data">
                        <h3>Dane zamawiającego</h3>
                        <ol>
                            <li>{{ $ordername }}</li>
                            <li>{{ $email }}</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-5 order-data">
                    <p>Numer twojego zamówienia: #{{ $orderId }}</p>
                    <p>Status płatności: {{ $paymentStatus }}</p>
                    @foreach($products as $product)
                        <li>Zamówiłeś: {{$product->name}}</li>
                        <li>Cena: {{ $amount }}</li>
                        <li>Typ karty: {{ $cardBrand }}</li>
                    @endforeach
                </div>
                <div class="col-lg-2 shipping-data">
                    <h3>Adres wysyłki</h3>
                    <ol>
                        <li>{{ $city }}, ul. {{ $street }} {{ $nr_of_building }}</li>
                        <li>{{$number}}</li>
                    </ol>
                </div>
            </div>
            <footer>
                <button type="submit" class="return">Strona główna</button>
            </footer>
        </div>
    </body>
</html>
