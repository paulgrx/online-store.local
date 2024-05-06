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

        <title>Online Store</title>
    </head>

    <body>
        <div class="content">
            <div class="header">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Sklep</p>
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
                <div class=" col-lg-3 aside">
                    <div class="aside-in">
                        <h2>Kategorie</h2>
                        <ul>
                            <li><a  href="#" class="nav-link active" aria-current="page">Buty</a></li>
                            <li><a  href="#" class="nav-link active" aria-current="page">Piłki</a></li>
                            <li><a  href="#" class="nav-link active" aria-current="page">Lifestyle</a></li>
                            <li class="category">
                                <a  href="#" class="nav-link active" aria-current="page">Odzież piłkarska</a>
                                <button class="deploy-list" onclick="toggleSubcategories('odziez-pilkarska')">
                                    <span>+</span>
                                </button>
                            </li>
                            <ul class="subcategories" id="odziez-pilkarska">
                                <li><a  href="#" class="nav-link active" aria-current="page">Koszulki</a></li>
                                <li><a  href="#" class="nav-link active" aria-current="page">Spodenki</a></li>
                                <li><a  href="#" class="nav-link active" aria-current="page">Bluzy</a></li>
                                <li><a  href="#" class="nav-link active" aria-current="page">Skarpety</a></li>
                            </ul>
                            <li class="category">
                                <a  href="#" class="nav-link active" aria-current="page">Akcesoria</a>
                                <button class="deploy-list" onclick="toggleSubcategories('akcesoria')">
                                    <span>+</span>
                                </button>
                            </li>
                            <ul class="subcategories" id="akcesoria">
                                <li><a  href="#" class="nav-link active" aria-current="page">Torby i plecaki</a></li>
                                <li><a  href="#" class="nav-link active" aria-current="page">Do treningu</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 products">
                    <div class="row">
                        <a href="#" class="col-lg-12 outcome">
                            <div class="col-sm-2">
                                <img src="images/iq4933-5_1.jpg" alt="Photo" class="product-photo">
                            </div>
                            <div class="col-sm-10">
                                <h2>Piłka adidas Pro rozmiar 5</h2>
                                <p>Oficjalna piłka PKO Ekstraklasy na sezon 2023/24, inspirowana futbolówką, którą rozgrywane będą mecze podczas Mistrzostw Świata kobiet FIFA™.
                                    Model stworzony z myślą o płynnej grze. adidas Oceaunz Pro wyróżnia się grafiką,
                                    która odzwierciedla znaczenie Australii i malowniczego wybrzeża Nowej Zelandii,
                                    a także będących źródłem życia jezior i dróg wodnych. Bezszwowa konstrukcja zapewnia przewidywalną
                                    trajektorię lotu i odbicie. Znak jakości Quality Pro to najwyższa ocena FIFA.</p>
                            </div>
                            <div class="purchase">
                                <h3>369,99 zł</h3>
                                <button class="add-to-card" type="submit">
                                    DODAJ DO KOSZYKA
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16" style="vertical-align: unset; margin-left: 15px;">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </button>
                            </div>
                        </a>
                        <a href="#" class="col-lg-12 outcome">
                            <div class="col-sm-2">
                                <img src="images/ie1802_16.webp" alt="Photo" class="product-photo">
                            </div>
                            <div class="col-sm-10">
                                <h2>Korki adidas Predator Elite FG </h2>
                                <p>Powitaj nowe buty Predator 24 Elite FG, kolejny uwielbiany model
                                    z kolekcji inspirowanej piękną grą. Buty Predator stworzone we współpracy z profesjonalnymi piłkarzami wykorzystują nowe sposoby poprawy Twojej wydajności na naturalnej nawierzchni. Ruszaj na boisko w dobrym stylu i przygotuj się, by przejąć kontrolę nad grą.</p>
                            </div>
                            <div class="purchase">
                                <h3>974,99 zł</h3>
                                <button class="add-to-card" type="submit">
                                    DODAJ DO KOSZYKA
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16" style="vertical-align: unset; margin-left: 15px;">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </button>
                            </div>
                        </a>
                        <a href="#" class="col-lg-12 outcome">
                            <div class="col-sm-2">
                                <img src="images/ia9154_1.webp  " alt="Photo" class="product-photo">
                            </div>
                            <div class="col-sm-10">
                                <h2>Koszulka adidas Tabela 23 Junior </h2>
                                <p>
                                    Zawsze dawaj z siebie wszystko. Ta młodzieżowa koszulka piłkarska adidas prezentuje prosty styl za sprawą charakterystycznych 3 pasków i logo z 3 paskami. Pochłaniający wilgoć AEROREADY i rękawy z siateczki zapewnią Ci suchy komfort przez cały mecz.
                                    Ten produkt został wykonany w 100% z materiałów pochodzących z recyklingu i stanowi tylko jedno z rozwiązań, które pomogą wyeliminować zanieczyszczenie plastikiem.</p>
                            </div>
                            <div class="purchase">
                                <h3>67,99 zł</h3>
                                <button class="add-to-card" type="submit">
                                    DODAJ DO KOSZYKA
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16" style="vertical-align: unset; margin-left: 15px;">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    window.onload = function() {
        var subcategories = document.querySelectorAll('.subcategories');
        subcategories.forEach(function(subcategory) {
            subcategory.style.display = 'none';
        });
    };

    function toggleSubcategories(categoryId) {
        var subcategories = document.getElementById(categoryId);
        var button = subcategories.previousElementSibling.querySelector('span');

        if (subcategories.style.display === 'none' || subcategories.style.display === '') {
            subcategories.style.display = 'block';
            button.textContent = '-';
        } else {
            subcategories.style.display = 'none';
            button.textContent = '+';
        }
    }
</script>


