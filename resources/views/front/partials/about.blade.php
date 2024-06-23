<div class="container bg-white py-5">
    <div class="row px-3">
        <div class="col-12">
            <h2 class="title position-relative pb-2 mb-4">About Me</h2>
        </div>
        <div class="col-12">
            @if($user)
                <p>{{ $user->profile->about }}</p>
            @else
                <p>Sea et gubergren justo invidunt at amet clita. Justo sit justo tempor et invidunt voluptua, lorem voluptua ipsum gubergren et est nonumy magna et vero, sit eos dolor sea sed et dolor erat et. Accusam accusam magna aliquyam eirmod amet est kasd dolore sanctus. Lorem ea vero lorem eos eos sanctus labore. Aliquyam vero ipsum dolor duo clita consetetur stet, aliquyam ipsum sea sed et magna amet dolor.</p>
            @endif
            <div class="row">
                <div class="col-sm-6 py-1">
                    <h5 class="d-inline text-primary">Name:</h5> {{ $user ? $user->fullname : "John Doe" }}
                </div>
                <div class="col-sm-6 py-1">
                    <h5 class="d-inline text-primary">Birthday:</h5> {{ $user ? formatDate($user->profile->birthday) : "1 April 1990" }}
                </div>
                <div class="col-sm-6 py-1">
                    <h5 class="d-inline text-primary">Degree:</h5> {{ $user ? $user->profile->degree : "Master" }}
                </div>
                <div class="col-sm-6 py-1">
                    <h5 class="d-inline text-primary">Experience:</h5> {{ $user ? $user->profile->experience : "10 Years" }}
                </div>
                <div class="col-sm-6 py-1">
                    <h5 class="d-inline text-primary">Phone:</h5> {{ $user ? $user->profile->phone : "+012 345 6789" }}
                </div>
                <div class="col-sm-6 py-1">
                    <h5 class="d-inline text-primary">Email:</h5> {{ $user ? $user->email : "info@example.com" }}
                </div>
                <div class="col-sm-6 py-1">
                    <h5 class="d-inline text-primary">Address:</h5> {{ $user ? $user->profile->address : "123 Street, New York, USA" }}
                </div>
                <div class="col-sm-6 py-1">
                    <h5 class="d-inline text-primary">Freelance:</h5> {{ $user ? freelanceStatus($user->profile->freelance) : "Available" }}
                </div>
            </div>
        </div>
    </div>
</div>
