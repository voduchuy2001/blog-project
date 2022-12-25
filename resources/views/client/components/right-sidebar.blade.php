<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="/ket-qua" method="GET">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" name="query" class="form-control" placeholder='Nhập từ khóa...'>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Tìm
                    kiếm</button>
            </form>
        </aside>
        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title" style="color: #2d2d2d;">Bài viết liên quan</h3>
            @foreach ($relatedPosts as $relatedPosts)
            <div class="media post_item">
                <img height="80" width="80" src="{{$relatedPosts->fImagePost}}" alt="post">
                <div class="media-body">
                    <a href="{{route('post.single',['slugPost' => $relatedPosts->slugPost])}}">
                        <h3 style="color: #2d2d2d;">{{$relatedPosts->postTitle}}</h3>
                    </a>
                    <p>{{$relatedPosts->created_at->diffForHumans()}}</p>
                </div>
            </div>
            @endforeach
        </aside>
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title" style="color: #2d2d2d;">Danh mục</h4>
            <ul class="list cat-list">
                @foreach ($categories as $category)
                <li>
                    <a href="{{route('category.single',['slugCat' => $category->slugCat])}}" class="d-flex">
                        <p>{{$category->nameCat}}</p>
                        <p>({{$category->posts->count()}})</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </aside>
        <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title" style="color: #2d2d2d;">Danh sách thẻ</h4>
            <ul class="list">
                @foreach ($tags as $tag)
                <li>
                    <a href="{{route('tag.single', ['slugTag' => $tag->slugTag])}}">{{$tag->nameTag}}</a>
                </li>
                @endforeach
            </ul>
        </aside>
    </div>
</div>