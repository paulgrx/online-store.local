<div class=" col-lg-3 aside">
    <div class="aside-in">
        <h2>Kategorie</h2>
        <ul>
            @foreach($categoriesData as $category)

                <li>
                    <a href="{{ url('/search?' . http_build_query(['category' => $category->id, 'sort_by' => $currentSortBy])) }}"
                       class="nav-link {{ $currentCategoryId == $category->id ? 'active' : '' }}">{{ $category->categories}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>


<div class="col-2 mobile-aside offcanvas offcanvas-start" tabindex="-1" id="categoriesMenu" aria-labelledby="categoriesMenuLabel">
    <div class="aside-in offcanvas-header">
        <div class="col-2"></div>
        <h2 class="offcanvas-title col-8" id="categoriesMenuLabel">Kategorie</h2>
        <button type="button" class="btn-close col-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group">
            @foreach($categoriesData as $category)
                <li>
                    <a href="{{ url('/search?' . http_build_query(['category' => $category->id, 'sort_by' => $currentSortBy])) }}"
                       class="nav-link {{ $currentCategoryId == $category->id ? 'active' : '' }}">{{ $category->categories}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>


