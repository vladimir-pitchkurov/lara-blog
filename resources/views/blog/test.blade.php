
@include('blog.header')
@yield('head')
@yield('header')

<div class="blog">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                <h2><span class="ion-minus"></span>Blog Posts<span class="ion-minus"></span></h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis  dis parturient montes, nascetur ridiculus </p><br>
            </div>
        </div>
        <div class="row">

            @foreach($posts as $post)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 bla-post" data-aos="fade-right">

                <div class="col-lg-6 col-xs-12">
                    <img src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
                </div>

                <div class="col-lg-6 col-xs-12">
                    <div class="blog-column">
                        <span>{{ $post->title  }}</span>
                        <ul class="blog-detail list-inline">
                            <li><i class="fa fa-user"></i>{{ $post->user->name  }}</li>
                            <li><i class="fa fa-clock-o"></i>{{ $post->created_at  }}</li>
                        </ul>
                        <p>{{ $post->description  }}</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</div>

@include('blog.footer')