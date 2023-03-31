@php
    $blogs = App\Models\Blog::latest()
        ->limit(3)
        ->get();
@endphp

<section class="blog" style="padding-bottom: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title text-center">
                    <span class="sub-title">Movies reviews</span>
                    <h2 class="title">After much reflection, comes the comment</h2>
                </div>
            </div>
        </div><br><br>
        <div class="row gx-0 justify-content-center">
            @foreach ($blogs as $item)
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            <a href="{{ route('blog.details', $item->id) }}"><img src="{{ asset($item->blog_image) }} " alt=""></a>
                            <div class="blog__post__tags">
                                <a href="{{ route('category.blog', $item['category']['id']) }}">{{ $item['category']['blog_category'] }}</a>
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </span>
                            <h3 class="title"><a href="{{ route('blog.details', $item->id) }}"> {{ $item->blog_title }} </a></h3>
                            <a href="{{ route('blog.details', $item->id) }}" class="read__more">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="blog__button text-center">
            <a href="{{ url('/blog') }}" class="btn">aLL reviews</a>
        </div>
    </div>
</section>
