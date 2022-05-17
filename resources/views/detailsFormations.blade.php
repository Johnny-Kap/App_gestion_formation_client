@extends('layout.admins')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Détails sur la formation</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<div class="col-md-12">
    <a href="{{ url()->previous() }}" data-toggle="tooltip" title="Retour " class="btn btn-info" data-original-title="Go Back">
        <i class="fa fa-arrow-left"></i>
        Retour
    </a>
</div><br>


<div class="justify-content-center">
    <div class="col-lg-12">
        <!-- Billing Address Block -->
        <div class=" text-center">
            <!-- Billing Address Title -->
            <div class="block-title">
                <h2><i class="fa fa-server"></i> <strong> Informations sur la formation </strong></h2>
            </div>
            <!-- END Billing Address Title -->

            <!-- Billing Address Content -->
            <p>Nom de la formation: <strong>{{ $getDetails->title }}</strong> </p>
            <p>Contenu : <strong>{{ $getDetails->content }}</strong> </p>
            <p>Tarif : <strong>{{ $getDetails->price }}</strong> </p>
            <p>Status: <strong>
                    @php
                    if($getDetails->isAvailable == 1){
                    echo'<a href="javascript:void(0)" class="label label-success">Disponibles</a>';
                    }
                    else{
                    echo'<a href="javascript:void(0)" class="label label-warning">Indisponibles</a>';
                    }

                    @endphp
                </strong> </p> <br>

            <!-- END Billing Address Content -->
        </div>
        <!-- END Billing Address Block -->
        <!-- Button trigger modal -->

    </div>
</div>

<div class="text-center">
    <a href="javascript:void(0)" title="Ajouter" class="btn btn-primary" data-target="#changemark" data-toggle="modal">
        <i class="fa fa-pencil-square-o"></i>
        <strong> Souscrivez maintenant </strong>
    </a>
</div>

<div id="changemark" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title">
                    Confirmez la souscription
                    <i class="fa fa-pencil"></i>
                </h3>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{ route('subscribe', ['id' => $getDetails->id]) }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-md-12 control-label">Voulez-vous confirmer la souscription à cette formation ?</label><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-center">
                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">
                                Annuler
                            </button>
                            <button type="submit" class="btn btn-sm btn-primary">
                                Confirmer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

@endsection