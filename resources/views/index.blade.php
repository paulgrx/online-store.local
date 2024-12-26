<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        @vite(['resources/scss/main.scss'])

        <title>Online Store</title>
    </head>

    <body class="mobile">
        <div class="content">
            <div class="header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <p><a href="/">Sklep</a></p>
                    </div>
                    <div class="col-lg-3 search-button">
                        <form action="{{ route('search') }}" method="get" class="search-form " role="search">
                            <input type="search" name="search" class="product-search col-sm-10" placeholder="Szukaj" value="{{ isset($searchQuery) ? $searchQuery : '' }}" aria-label="Szukaj">
                            <button type="submit" class="search-button-btn col-sm-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 navi-buttons">
                        <button class="log-in" onclick="location.href='{{route('form')}}'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve" style="width: 20px; height: 20px;">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 85.347 90 c 0 -22.283 -18.064 -40.347 -40.347 -40.347 S 4.653 67.717 4.653 90 H 85.347 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <circle cx="45.003" cy="21.413" r="21.413" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                            </g>
                        </svg>
                        </button>
                        <button class="basket-logo" onclick="location.href='{{route('basket')}}'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16" style="                 ">
                                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </button>
                        <button class="mobile-list d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#categoriesMenu" aria-controls="categoriesMenu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                            </svg>
                        </button>
                    </div>
                    <form action="{{ route('search') }}" method="get" role="search">
                        <div class="mobile-search-button">
                            <div class="input-group">
                                <input type="search" name="search" class="product-search" placeholder="Szukaj" value="{{ isset($searchQuery) ? $searchQuery : '' }}" aria-label="Szukaj">
                                <button type="submit" class="search-button-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="main-content row">
                @include('sidebar', ['categoriesData' => $categoriesData])
                <div class="col-lg-9 products">
                    <div class="<!--col-md-3--> sort-menu">
                            <span>Sortowanie:</span>
                        <select onchange="location = this.value;">
                            <option value="{{ url('/search?' . http_build_query(['category' => $currentCategoryId, 'sort_by' => null])) }}" {{ is_null($currentSortBy) ? 'selected' : '' }}>Domyślne</option>
                            <option value="{{ url('/search?' . http_build_query(['category' => $currentCategoryId, 'sort_by' => 'asc'])) }}" {{ $currentSortBy == 'asc' ? 'selected' : '' }}>Cena rosnąco</option>
                            <option value="{{ url('/search?' . http_build_query(['category' => $currentCategoryId, 'sort_by' => 'desc'])) }}" {{ $currentSortBy == 'desc' ? 'selected' : '' }}>Cena malejąco</option>
                        </select>
                    </div>
                    <div class="row">
                        @if($data->isEmpty())
                            @if($isSearch)
                                <p class="search-alert">Nic nie znaleziono po twoim wyszukiwaniu: <strong>{{$searchQuery}}</strong></p>
                            @else
                                <p class="category-alert">W tej kategorii nie ma produktów.</p>
                            @endif
                        @else
                            @foreach($data as $item)
                                <a href="{{route('product', ['id' => $item->id])}}" class="outcome col-lg-12 col-md-4 col-sm-6">
                                    <div class="row product-info">
                                        <div class="col-lg-2 product-photo-grid">
                                            <img src="images/{{$item->image}}" alt="Photo" class="product-photo">
                                        </div>
                                        <div class="product-text col-lg-10">
                                            <h2>{{$item->name}}</h2>
                                            <p>{{$item->text}}</p>
                                        </div>
                                    </div>
                                    <div class="purchase">
                                        <h3>{{ number_format($item->price, 2, ',', ' ') }} zł</h3>
                                        <button class="add-to-card" type="submit">
                                            DODAJ DO KOSZYKA
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16" style="vertical-align: unset; margin-left: 15px;">
                                                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                            </svg>
                                        </button>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>document.addEventListener('DOMContentLoaded', function () {
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


