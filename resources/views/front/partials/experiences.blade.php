<div class="container bg-white py-5">
    <div class="row px-3">
        <div class="col-12">
            <h2 class="title position-relative pb-2 mb-4">Expericence</h2>
        </div>
        <div class="col-12">
            <div class="border-left border-primary pt-2 pl-4 ml-2">
                @if($user)
                    @foreach($user->experiences as $experience)
                        <div class="position-relative mb-4">
                            <i class="fa fa-arrow-right text-primary position-absolute" style="top: 3px; left: -24px;"></i>
                            <h5 class="mb-1">{{ $experience->position }}</h5>
                            <p class="mb-2">{{ $experience->company }} | <small>{{ getYilFromTarih($experience->start_date) }} - {{ getYilFromTarih($experience->end_date) }}</small></p>
                            <p>{{ $experience->description }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="position-relative mb-4">
                        <i class="fa fa-arrow-right text-primary position-absolute" style="top: 3px; left: -24px;"></i>
                        <h5 class="mb-1">Web Designer</h5>
                        <p class="mb-2">Soft Company | <small>2000 - 2050</small></p>
                        <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                    </div>
                    <div class="position-relative mb-4">
                        <i class="fa fa-arrow-right text-primary position-absolute" style="top: 3px; left: -24px;"></i>
                        <h5 class="mb-1">Web Designer</h5>
                        <p class="mb-2">Soft Company | <small>2000 - 2050</small></p>
                        <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                    </div>
                    <div class="position-relative mb-4">
                        <i class="fa fa-arrow-right text-primary position-absolute" style="top: 3px; left: -24px;"></i>
                        <h5 class="mb-1">Web Designer</h5>
                        <p class="mb-2">Soft Company | <small>2000 - 2050</small></p>
                        <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
