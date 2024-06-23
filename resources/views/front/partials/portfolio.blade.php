<div class="container bg-white pt-5 pb-3">
    <div class="row px-3">
        <div class="col-12">
            <h2 class="title position-relative pb-2 mb-4">Portfolio</h2>
        </div>
        <div class="col-12">
            @if($user)
                <div class="row">
                    <div class="col-12 text-center mb-2">
                        <ul class="list-inline mb-4" id="portfolio-flters">
                            <li class="btn btn-outline-primary active"  data-filter="*"><i class="fa fa-star mr-2"></i>All</li>

                            @foreach($user->projectCategories as $key => $item)
                                <li class="btn btn-outline-primary"  data-filter=".{{ $item->id }}"><i class="fa fa-star mr-2"></i>{{ $item->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    @foreach($user->projects as $project)
                    <div class="col-md-6 mb-4 portfolio-item {{ $project->category_id }}">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100" src="{{ asset('/storage/project/' . $project->user_id . '/' . $project->img ) }}" alt="">
                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                <a href="{{ asset('/storage/project/' . $project->user_id . '/' . $project->img ) }}" data-lightbox="portfolio">
                                    <i class="fa fa-4x fa-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    <div class="col-12 text-center mb-2">
                        <ul class="list-inline mb-4" id="portfolio-flters">
                            <li class="btn btn-outline-primary active" data-filter="*"><i class="fa fa-star mr-2"></i>All</li>
                            <li class="btn btn-outline-primary" data-filter=".1"><i class="fa fa-laptop-code mr-2"></i>Design</li>
                            <li class="btn btn-outline-primary" data-filter=".2"><i class="fa fa-mobile-alt mr-2"></i>Development</li>
                            <li class="btn btn-outline-primary" data-filter=".3"><i class="fa fa-mobile-alt mr-2"></i>Xexo</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <div class="col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100" src="{{asset('front_files/img/portfolio-1.jpg')}}" alt="">
                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                <a href="{{asset('front_files/img/portfolio-1.jpg')}}" data-lightbox="portfolio">
                                    <i class="fa fa-4x fa-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 portfolio-item second">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100" src="{{asset('front_files/img/portfolio-2.jpg')}}" alt="">
                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                <a href="{{asset('front_files/img/portfolio-2.jpg')}}" data-lightbox="portfolio">
                                    <i class="fa fa-4x fa-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100" src="{{asset('front_files/img/portfolio-3.jpg')}}" alt="">
                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                <a href="{{asset('front_files/img/portfolio-3.jpg')}}" data-lightbox="portfolio">
                                    <i class="fa fa-4x fa-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100" src="{{asset('front_files/img/portfolio-4.jpg')}}" alt="">
                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                <a href="{{asset('front_files/img/portfolio-4.jpg')}}" data-lightbox="portfolio">
                                    <i class="fa fa-4x fa-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 portfolio-item third">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100" src="{{asset('front_files/img/portfolio-4.jpg')}}" alt="">
                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                <a href="{{asset('front_files/img/portfolio-4.jpg')}}" data-lightbox="portfolio">
                                    <i class="fa fa-4x fa-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
