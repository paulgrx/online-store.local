<div class=" col-lg-3 aside">
    <div class="aside-in">
        <h2>Kategorie</h2>
        <ul>
            @foreach($categoriesData as $category)
                <li><a  href="{{env('APP_URL')}}/search?category={{$category->categories}}" class="nav-link active" aria-current="page">{{$category->categories}}</a></li>
               {{-- <li>
                    <a href="#" class="nav-link active" aria-current="page">{{ $category }}</a>
                    @if(isset($subcategories[$category]))
                        <button class="deploy-list" onclick="toggleSubcategories('{{ $category }}')">
                            <span>+</span>
                        </button>
                        <ul class="subcategories" id="{{ $category }}">
                            @foreach($subcategories[$category] as $subcategory)
                                <li><a href="#" class="nav-link active" aria-current="page">{{ $subcategory }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </li>--}}
            @endforeach
        </ul>
    </div>
</div>


{{--<li><a  href="#" class="nav-link active" aria-current="page">{{$item-}}</a></li>
           <li><a  href="#" class="nav-link active" aria-current="page">{{$item->lifestyle}}</a></li>
           <li class="category">
               <a  href="#" class="nav-link active" aria-current="page">{{$item->odzieżPiłkarska}}</a>
               <button class="deploy-list" onclick="toggleSubcategories('odziez-pilkarska')">
                   <span>+</span>
               </button>
           </li>
           <ul class="subcategories" id="odziez-pilkarska">
               <li><a  href="#" class="nav-link active" aria-current="page">{{$item->koszulki}}</a></li>
               <li><a  href="#" class="nav-link active" aria-current="page">{{$item->spodenki}}</a></li>
               <li><a  href="#" class="nav-link active" aria-current="page">{{$item->bluzy}}</a></li>
               <li><a  href="#" class="nav-link active" aria-current="page">{{$item->skarpety}}</a></li>
           </ul>
           <li class="category">
               <a  href="#" class="nav-link active" aria-current="page">{{$item->akcesoria}}</a>
               <button class="deploy-list" onclick="toggleSubcategories('akcesoria')">
                   <span>+</span>
               </button>
           </li>
           <ul class="subcategories" id="akcesoria">
               <li><a  href="#" class="nav-link active" aria-current="page">{{$item->torbyIplecaki}}</a></li>
               <li><a  href="#" class="nav-link active" aria-current="page">Do {{$item->doTreningu}}</a></li>
           </ul>--}}
