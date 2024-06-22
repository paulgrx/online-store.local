<div class=" col-lg-3 aside">
    <div class="aside-in">
        <h2>Kategorie</h2>
        <ul>
            @foreach($categoriesData as $category)
                <li><a  href="{{env('APP_URL')}}/search?category={{$category->id}}" class="nav-link active" aria-current="page">{{$category->categories}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
