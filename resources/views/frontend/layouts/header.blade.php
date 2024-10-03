@php
    $navCategories = \App\Models\Category::where(['status' => 1, 'show_at_nav' => 1])->get();
@endphp


<header class="bg-light">
    <!-- Navbar  -->
    <!-- Navbar menu  -->
    <div class="navigation-wrap navigation-shadow bg-white">
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
            <div class="container">
                <div class="offcanvas-header">
                    <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                        <span class="navbar-toggler-icon"></span>
                    </div>
                </div>
                <figure class="mb-0 mx-auto">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('frontend/asset/images/logo1.png') }}" alt="" class="img-fluid logo">
                    </a>
                </figure>

                <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                    <ul class="navbar-nav ml-auto ">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" href="#">Thể thao</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#">Giải trí</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#">Kinh doanh</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#">Bất động sản</a>
                        </li> -->

                        @foreach ($navCategories as $nav)
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('news', ['category' => $nav->slug])}}">{{$nav->name}}</a>
                            </li>
                        @endforeach

                        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-sm-none d-lg-inline-block">Hi, User
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form method="POST" action="http://127.0.0.1:8000/logout">
                                    <input type="hidden" name="_token" value="OIJdYZ8iBUETgFZ6NoGLuWGvVWVepaowMZyw4F28"
                                        autocomplete="off"> <a href="#" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="dropdown-item has-icon text-danger">
                                        <i class="fas fa-sign-out-alt"></i> Đăng xuất
                                    </a>
                                </form>
                            </div>
                        </li>

                    </ul>


                    <!-- Search bar.// -->
                    <ul class="navbar-nav ">
                        <li class="nav-item search hidden-xs hidden-sm "> <a class="nav-link" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Search content bar.// -->
                    <div class="top-search navigation-shadow">
                        <div class="container">
                            <div class="input-group ">
                                <form action="#" method="GET">

                                    <div class="row no-gutters mt-3">
                                        <div class="col">
                                            <input class="form-control border-secondary border-right-0 rounded-0"
                                                type="search" value="" placeholder="{{ __('frontend.search') }}"
                                                id="example-search-input4" name="search">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit"
                                                class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"><i
                                                    class="fa fa-search"></i></button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Search content bar.// -->
                </div> <!-- navbar-collapse.// -->
            </div>
        </nav>
    </div>
    <!-- End Navbar menu  -->


    <!-- Navbar sidebar menu  -->
    <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-aside" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="widget__form-search-bar  ">
                        <form action="#" method="GET">
                            <div class="row no-gutters">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0" value=""
                                        placeholder="Tìm kiếm từ khóa" type="search" name="search">
                                </div>
                                <div class="col-auto">
                                    <button type="submit"
                                        class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</header>