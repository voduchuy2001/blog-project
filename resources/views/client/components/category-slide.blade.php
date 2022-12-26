<div class="nes-slider-area mb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="news-slider-active">
                    @foreach ($categories as $category)
                    <div class="single-news-slider">
                        <div class="news-img">
                            <a href="{{route('category.single',['slugCat' => $category->slugCat])}}"><img class="rounded" width="300" height="300" src="{{$category->fImageCat}}" alt="Dưa Cosmetics"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>