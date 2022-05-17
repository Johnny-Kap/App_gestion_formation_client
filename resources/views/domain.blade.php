@extends('layout.admins')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Toutes les formations</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Formations</h6>
        </div>
        <div class="row g-2 justify-content-center">
            @foreach($formationsItems as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="/admin/img/course-1.jpg" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="{{ route('getDetails', ['id' => $item->id]) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-start" style="border-radius: 30px;">En savoir plus</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">{{$item->price}} FCFA</h3>
                        <h5 class="mb-4">{{$item->title}}</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>
                            @php
                            if($item->isAvailable == 1){
                            echo'<a href="javascript:void(0)" class="label label-success">Disponibles</a>';
                            }
                            else{
                            echo'<a href="javascript:void(0)" class="label label-danger">Indisponibles</a>';
                            }

                            @endphp
                        </small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$item->dateformations->maxStudents}} places disponibles</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Courses End -->

@endsection