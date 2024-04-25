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
                <div class="aside">
                    <h2>Kategorie</h2>
                    <ul>
                        <li><a  href="#" class="nav-link active" aria-current="page">Buty</a></li>
                        <li><a  href="#" class="nav-link active" aria-current="page">Piłki</a></li>
                        <li><a  href="#" class="nav-link active" aria-current="page">Lifestyle</a></li>
                        <li class="category"><a  href="#" class="nav-link active" aria-current="page">Odzież piłkarska</a>
                        <button class="deploy-list" onclick="toggleSubcategories()">
                            <span>+</span>
                        </button>
                            <ul class="subcategories">
                                <li>
                                    <a  href="#" class="nav-link active" aria-current="page"></a>
                                    <span class="child-category" id="child-category">Koszulki</span>
                                </li>
                                <li>
                                    <a  href="#" class="nav-link active" aria-current="page"></a>
                                    <span class="child-category">Spodenki</span>
                                </li>
                                <li>
                                    <a  href="#" class="nav-link active" aria-current="page"></a>
                                    <span class="child-category">Bluzy</span>
                                </li>
                                <li>
                                    <a  href="#" class="nav-link active" aria-current="page"></a>
                                    <span class="child-category">Skarpety</span>
                                </li>
                            </ul>
                        </li>
                        <li><a  href="#" class="nav-link active" aria-current="page"></a>Akcesoria</li>
                    </ul>
                </div>
                <div class="products"></div>
            </div>
        </div>
    </body>
</html>

<script>
    function toggleSubcategories() {
        var subcategories = document.querySelector('.category .subcategories');
        var button = document.querySelector('.category .deploy-list span');

        if (subcategories.style.display === 'none') {
            subcategories.style.display = 'block';
            button.textContent = '-';
        } else {
            subcategories.style.display = 'none';
            button.textContent = '+';
        }
    }
</script>


