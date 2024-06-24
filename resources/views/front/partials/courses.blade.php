<div class="container bg-white py-5">
    <div class="row px-3">
        <div class="col-12">
            <h2 class="title position-relative pb-2 mb-4">Courses</h2>
        </div>
        <div class="col-12">
            <div class="owl-carousel testimonial-carousel">
                @if($user)
                    @foreach($user->courses as $course)
                        <div class="text-left">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="text-body mb-4">{{ $course->describe }}</h4>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid" src="{{ asset('storage/course/' . $course->user_id . '/' . $course->logo) }}" style="width: 60px; height: 60px;">
                                <div class="pl-3">
                                    <h5 class="text-primary m-0">{{ $course->name }}</h5>
                                    <i>{{ $course->learn }}</i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-left">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="text-body mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid" src="{{ asset('front_files/img/testimonial-1.jpg') }}" style="width: 60px; height: 60px;">
                            <div class="pl-3">
                                <h5 class="text-primary m-0">Client Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="text-body mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid" src="{{ asset('front_files/img/testimonial-2.jpg') }}" style="width: 60px; height: 60px;">
                            <div class="pl-3">
                                <h5 class="text-primary m-0">Client Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="text-body mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid" src="{{ asset('front_files/img/testimonial-3.jpg') }}" style="width: 60px; height: 60px;">
                            <div class="pl-3">
                                <h5 class="text-primary m-0">Client Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
