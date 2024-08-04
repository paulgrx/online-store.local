<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
<h1>Complete your payment</h1>
<form id="payment-form">
    <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>

    <button type="submit">Submit Payment</button>
</form>

<!-- Stripe JS -->
<script src="https://js.stripe.com/v3/"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const {error, paymentIntent} = await stripe.confirmCardPayment('{{ $clientSecret }}', {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: 'Customer Name',
                    }
                }
            });

            if (error) {
                // Обработка ошибок
                document.getElementById('card-errors').textContent = error.message;
            } else {
                // Успех
                alert('Payment successful!');
            }
        });
    });
</script>
</body>
</html>
