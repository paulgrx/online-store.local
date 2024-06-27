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
