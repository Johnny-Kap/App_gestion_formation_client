@extends('layout.admins')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Mon profil</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container">
    <hr>
    <div class="row">
        <!-- edit form column -->
        <div class="col-md-6 personal-info">
            <h3>Informations personnelles</h3>
            <div class="form-group">
                <label class="col-lg-3 control-label">Mon nom:</label>
                <div class="col-lg-8">
                    <b><label for="">{{ Auth::user()->name }}</label></b><br><br>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Mon adresse Email:</label>
                <div class="col-lg-8">
                    <b><label for="">{{ Auth::user()->email }}</label></b><br><br>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Vérification de l'Email:</label>
                <div class="col-lg-8">
                    @php
                    if(Auth::user()->email_verified_at == NULL){
                    echo'<a href="javascript:void(0)" class="label label-warning">Non vérifié</a>';
                    }
                    else{
                    echo'<a href="javascript:void(0)" class="label label-success">Vérifié</a>';
                    }

                    @endphp
                </div>
            </div>
        </div>

        <!-- formations form column -->
        <div class="col-md-6 personal-info">
            <h3>Mes formations</h3>
            @foreach($formationsUSer as $item)
            <hr>
            <div class="form-group">
                <label class="col-lg-6 control-label">N°:  <b>{{ $item->id }}</b></label>
            </div><br>
            <div class="form-group">
                <label class="col-lg-6 control-label">Intitulé de la formation:</label>
                <div class="col-lg-8">
                    <b><label for="">{{ $item->formations->title }}</label></b><br><br>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-6 control-label">Conetnu de la formation:</label>
                <div class="col-lg-8">
                    <b><label for="">{{ $item->formations->content }}</label></b><br><br>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-6 control-label">Tarif:</label>
                <div class="col-lg-8">
                    <b><label for="">{{ $item->formations->price }}</label></b>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>
<hr>

@endsection