<div class="container bg-white py-5">
    <div class="row px-3">
        <div class="col-12">
            <h2 class="title position-relative pb-2 mb-4">Skills</h2>
        </div>
        <div class="col-sm-12 d-flex flex-wrap">
            @foreach($user->skills as $skill)
                <div class="col-6 skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">{{ $skill->title }}</p>
                    </div>
                    {!! sequentialProgressBar() !!}
                </div>
            @endforeach
        </div>
    </div>
</div>
