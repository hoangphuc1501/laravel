<section>
    <!-- Popular news header-->
    <div class="popular__news-header">
        <div class="container">
            <div class="row no-gutters">
                <!-- Popular sliders -->
                <div class="col-md-8 ">
                    <div class="card__post-carousel">
                        @foreach ($heroSlider as $slide)
                            @if ($loop->index <= 4)
                                <div class="item">
                                    <!-- Post Article -->
                                    <div class="card__post">
                                        <div class="card__post__body">
                                            <a href="#">
                                                <img src="{{$slide->image}}" class="img-fluid" alt="">
                                            </a>
                                            <div class="card__post__content bg__post-cover">
                                                <div class="card__post__category">
                                                    {{$slide->category->name}}
                                                </div>
                                                <div class="card__post__title">
                                                    <h2>
                                                        <a href="#">
                                                            {{$slide->title}}
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div class="card__post__author-info">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="javascript;">
                                                                Bởi Admin
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
                </div>
                <!-- End Popular sliders -->
                <!-- News right -->
                <div class="col-md-4">
                    <div class="popular__news-right">
                        @foreach ($heroSlider as $slide)
                            @if ($loop->index > 4 && $loop->index <= 6)
                                <!-- Post Article -->
                                <div class="card__post ">
                                    <div class="card__post__body card__post__transition">
                                        <a href="#">
                                            <img src="{{$slide->image}}" class="img-fluid" alt="">
                                        </a>
                                        <div class="card__post__content bg__post-cover">
                                            <div class="card__post__category">
                                                {{$slide->category->name}}
                                            </div>
                                            <div class="card__post__title">
                                                <h5>
                                                    <a href="#">
                                                        {{$slide->title}}
                                                    </a>
                                                </h5>
                                            </div>
                                            <div class="card__post__author-info">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:;">
                                                            by Admin
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
                            @endif
                        @endforeach
                    </div>
                </div>
                <!-- End News right -->
            </div>
        </div>
        <!-- End Popular news header-->
</section>