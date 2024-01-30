@extends('../Layouts.Layout')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="card-title">Détails de CNMH</h1>
            </div>
            <div class="col-sm-6">
              
                <a class="btn btn-default float-right " href="{{ route('projects.index') }}" >Retour</a>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-sm-12">
                    <label for="nom">Nom du projet:</label>
                   <p>CNMH</p>
                </div>

              
                <div class="col-sm-12">
                    <label for="description">Description:</label>
                    <p>Création d'une application web pour laa gestion des patients de centre cnmh.</p>
                </div>
            </div>
        </div>
    </div>
</div>





 @endsection