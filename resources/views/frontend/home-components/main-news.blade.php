<section class="pt-0 mt-5">
    <div class="popular__section-news">
        <div class="container">
            <div class="row">
                <!-- Bài viết gần đây -->
                <div class="col-md-12 col-lg-8">
                    <div class="wrapper__list__article">
                        <h4 class="border_section">Bài viết gần đây</h4>
                    </div>
                    <!-- Hai bài viết hình lớn -->
                    <div class="row ">
                        @foreach ($recentNews as $news)
                            @if ($loop->index <= 1)
                                <div class="col-sm-12 col-md-6 mb-4">
                                    <!-- Post Article -->
                                    <div class="card__post ">
                                        <div class="card__post__body card__post__transition">
                                            <a href="#">
                                                <img src="{{$news->image}}" class="img-fluid" alt="">
                                            </a>
                                            <div class="card__post__content bg__post-cover">
                                                <div class="card__post__category">
                                                    {{$news->category->name}}
                                                </div>
                                                <div class="card__post__title">
                                                    <h5>
                                                        <a href="#">
                                                            {{$news->title}}</a>
                                                    </h5>
                                                </div>
                                                <div class="card__post__author-info">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="javascript;">
                                                                bởi Admin
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span>
                                                                Aug, 25, 2024 17:35
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        @endforeach

                    </div>
                    <!-- End Hai bài viết hình lớn -->

                    <!-- Bốn bài viết hình nhỏ -->
                    <div class="row ">
                        <div class="col-sm-12 col-md-6">
                            <div class="wrapp__list__article-responsive">
                                @foreach ($recentNews as $news)
                                    @if ($loop->index > 2 && $loop->index < 5)
                                        <div class="mb-3">
                                            <!-- Post Article -->

                                            <div class="card__post card__post-list">
                                                <div class="image-sm">
                                                    <a href="#">
                                                        <img src="{{$news->image}}" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                                <div class="card__post__body ">
                                                    <div class="card__post__content">
                                                        <div class="card__post__author-info mb-2">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <span class="text-primary">
                                                                        bởi
                                                                        Admin
                                                                    </span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span class="text-dark text-capitalize">
                                                                        Aug, 25, 2024 17:35
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="card__post__title">
                                                            <h6>
                                                                <a href="#">
                                                                    {{$news->title}}
                                                                </a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="wrapp__list__article-responsive">
                                @foreach ($recentNews as $news)
                                    @if ($loop->index > 5 && $loop->index < 8)
                                        <div class="mb-3">
                                            <!-- Post Article -->
                                            <div class="card__post card__post-list">
                                                <div class="image-sm">
                                                    <a href="#">
                                                        <img src=" {{$news->image}}" class="img-fluid" alt="">
                                                    </a>
                                                </div>


                                                <div class="card__post__body ">
                                                    <div class="card__post__content">

                                                        <div class="card__post__author-info mb-2">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <span class="text-primary">
                                                                        Bởi
                                                                        Admin
                                                                    </span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span class="text-dark text-capitalize">
                                                                        Aug, 25, 2024 17:35
                                                                    </span>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="card__post__title">
                                                            <h6>
                                                                <a href="#">
                                                                    {{$news->title}}
                                                                </a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- End Bốn bài viết hình nhỏ -->
                </div>
                <!-- End Bài viết gần đây -->

                <!-- Bài viết Xem nhiều nhất -->
                <div class="col-md-12 col-lg-4">
                    <aside class="wrapper__list__article">
                        <h4 class="border_section">Xem nhiều nhất</h4>
                        <div class="wrapper__list-number">
                            <!-- List Article -->
                            @foreach ($mostViewedPosts as $mostViewedPost)
                                <div class="card__post__list">
                                    <div class="list-number">
                                        <span>
                                            {{++$loop->index}}
                                        </span>
                                    </div>
                                    <a href="#" class="category">
                                        {{$mostViewedPost->category->name}}
                                    </a>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h5>
                                                <a href="#">
                                                    {{$mostViewedPost->title}}
                                                </a>
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </aside>
                </div>
                <!-- End Bài viết Xem nhiều nhất -->
            </div>
        </div>
    </div>

    <!-- Bài viết theo danh mục -->
    <div class="mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <aside class="wrapper__list__article">
                        <h4 class="border_section">Thể thao</h4>
                        <div class="wrapp__list__article-responsive">
                            <!-- Post Article List -->
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="#">
                                                <img src="https://i1-thethao.vnecdn.net/2024/08/26/GUZ9-U6XEAA3ZYP-7886-1724689414.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=D2sEH6Xylwz_Hz7Y-KF0mw"
                                                    class="img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                    Thể thao
                                                </div>
                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                bởi
                                                                Admin
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                Aug, 25, 2024 17:35
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h5>
                                                        <a href="#">
                                                            Barca từ chối Neymar
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                        Neymar từng khoác áo Barca giai đoạn 2013-2017. Anh ghi 105 bàn
                                                        qua 186 trận, đoạt hai La Liga
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Post Article List -->
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="#">
                                                <img src="https://i1-thethao.vnecdn.net/2024/07/31/bao-phu-o-ng-vinh-2-3648-1722386597.jpg?w=680&h=0&q=100&dpr=2&fit=crop&s=oXnC9cCet6L2QfYHrXi09Q"
                                                    class="img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                    Thể thao
                                                </div>
                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                bởi
                                                                Admin
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                Aug, 25, 2024 17:35
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h5>
                                                        <a href="#">
                                                            Xung đột giữa các liên đoàn billiards thế giới khó hàn gắn
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                        Ngày 30/7, Liên đoàn Billiards & Snooker Việt Nam (VBSF) cho
                                                        biết các thành viên bị cấm tham
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-4">
                    <aside class="wrapper__list__article">
                        <h4 class="border_section">{{ __('frontend.newsletter') }}</h4>
                        <!-- Form Subscribe -->
                        <div class="widget__form-subscribe bg__card-shadow">
                            <h6>
                                {{ __('frontend.The most important world news and events of the day') }}.
                            </h6>
                            <p><small>{{ __('frontend.Get magzrenvi daily newsletter on your inbox') }}.</small></p>
                            <form action="" class="newsletter-form">
                                <div class="input-group ">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Your email address">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary newsletter-button"
                                            type="submit">{{ __('frontend.sign up') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bài viết theo danh mục -->
</section>