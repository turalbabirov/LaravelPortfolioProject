<div class="container bg-white py-5">
    <div class="row px-3">
        <div class="col-12">
            <h2 class="title position-relative pb-2 mb-4">Courses</h2>
        </div>
        <div class="col-12">
            <div class="owl-carousel testimonial-carousel">
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
            </div>
        </div>
    </div>
</div>
