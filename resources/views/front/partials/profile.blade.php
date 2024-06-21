<div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
    <img class="w-100 img-fluid mb-4" src="{{ asset('storage/users/' . $users->picture) }}" alt="Image">
    <h1 class="mt-2">{{ $users->name }}</h1>
    <div class="mb-4" style="height: 22px;">
        <h4 class="typed-text-output d-inline-block text-body"></h4>
        <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer</div>
    </div>
    <div class="d-flex justify-content-center mt-auto mb-3">
        <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
        <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
        <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
        <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
        <a class="mx-2" href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <div class="d-flex align-items-end justify-content-between">
        <a href="" class="btn btn-block border-right">Download CV</a>
        <a href="#contact" class="btn btn-block btn-scroll">Contact Me</a>
    </div>
</div>
<div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
    <i class="fas fa-2x fa-angle-double-right text-primary"></i>
</div>
