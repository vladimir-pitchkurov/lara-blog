
@include('blog.header')
@yield('head')
@yield('header')



<div class="blog">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                <h2><span class="ion-minus"></span>Blog Posts<span class="ion-minus"></span></h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis  dis parturient montes, nascetur ridiculus </p><br>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-aos="fade-right">

                <div class="col-lg-6 col-xs-12">
                    <img src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
                </div>

                <div class="col-lg-6 col-xs-12">
                    <div class="blog-column">
                        <span>Post Title</span>
                        <ul class="blog-detail list-inline">
                            <li><i class="fa fa-user"></i>John Doe</li>
                            <li><i class="fa fa-clock-o"></i>March 01, 2017</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-aos="fade-right">

                <div class="col-lg-6 col-xs-12">
                    <img src="https://images.pexels.com/photos/129105/pexels-photo-129105.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
                </div>

                <div class="col-lg-6 col-xs-12">
                    <div class="blog-colum">
                        <span>Post Title</span>
                        <ul class="blog-detail list-inline">
                            <li><i class="fa fa-user"></i>Josh Doe</li>
                            <li><i class="fa fa-clock-o"></i>August 04, 2017</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

            </div>

        </div>

        <div style="margin:40px 0px;"></div>

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-aos="fade-right">

                <div class="col-lg-6 col-xs-12">
                    <img src="https://images.pexels.com/photos/129441/pexels-photo-129441.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
                </div>

                <div class="col-lg-6 col-xs-12">
                    <div class="blog-colum">
                        <span>Post Title</span>
                        <ul class="blog-detail list-inline">
                            <li><i class="fa fa-user"></i>James Doe</li>
                            <li><i class="fa fa-clock-o"></i>July 14, 2017</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-aos="fade-right">

                <div class="col-lg-6 col-xs-12">
                    <img src="https://images.pexels.com/photos/395196/pexels-photo-395196.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
                </div>

                <div class="col-lg-6 col-xs-12">
                    <div class="blog-colum">
                        <span>Post Title</span>
                        <ul class="blog-detail list-inline">
                            <li><i class="fa fa-user"></i>Jack Doe</li>
                            <li><i class="fa fa-clock-o"></i>October 10, 2017</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

@include('blog.footer')