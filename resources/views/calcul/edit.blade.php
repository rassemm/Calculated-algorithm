@extends('Dach.dachboard')
 @section('content')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script >
    function calcul(){
        let nbr = parseInt($("#nbrp").val());
        let densite = parseInt($("#densite").val());
        let rdm = parseInt($("#rdm").val());
        let superificie = nbr / densite;
        let quantite = superificie * rdm;
        $("#superificie").val(superificie);
        $("#quantite ").val(quantite );
    }
    
        /*$(document).ready(function(){
        $("#superificie").keyup(function(){
            superificie = parseInt($("#nbrp").val()) / parseInt($("#densite").val());
            quantite = parseInt($("#superificie").val()) * parseInt($("#rdm").val());
            $("#superificie").val(superificie );
            $("#quantite ").val(quantite );
        });
    
    });*/
    
    </script>
    
 <style>
    label abbr{
        position: relative;
        left: 1;
        color: red;
    }
</style>
<div class="container">
<div class="row">
<div class="container mt-5">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="alert alert-success alert-link" role="alert" style="text-align: center">  <i class="far fa-table"></i>{{ __('Données prévisionnelles recoltes campagne 2022') }} </div>
            </div>
            <div class="card-body">

    <!-- Success message -->
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <form  action="{{ route('calcul.update',$calcul->id) }}"   method="POST" >
        @method('PUT')
        @csrf
        <div class="row">
         <div class="col-md-4">
           <div class="form-group">
            <label>Région <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
            <input class="form-control form-control-warning" id="inputWarning1" type="text"name="region" class="form-control @error('region') is-invalid @enderror" value="{{ $calcul->region }}"  id="region" >

            <!-- Error -->
            @error('region')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
        <div class="col-md-4">
        <div class="form-group">
            <label>Varitée <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
            <input  class="form-control form-control-warning" id="inputWarning1" type="text"name="varite" class="form-control  @error('varite') is-invalid @enderror" value="{{ $calcul->varite }}"  id="varite">

            <!-- Error -->
            @error('varite')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
        <div class="col-md-4">
        <div class="form-group">
            <label>  Cycle Végitative<abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
            <input class="form-control form-control-warning" id="inputWarning1" type="number" name="cycle" class="form-control  @error('cycle') is-invalid @enderror" value="{{ $calcul->cycle }}"
                id="cycle">

                @error('cycle')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label>densite <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
            <input  class="form-control form-control-warning" id="inputWarning1" type="numbre" class="form-control  @error('densite') is-invalid @enderror" value="{{ $calcul->densite }}" name="densite"
                id="densite">

                @error('densite')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
        <div class="col-md-6">
        <div class="form-group">
            <label>date de plantation <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
            <input  class="form-control form-control-warning" id="inputWarning1" type="date" class="form-control  @error('datep') is-invalid @enderror" value="{{ $calcul->datep }}" name="datep"
                id="datep">

                @error('datep')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label>Nombre de plants <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
          <input class="form-control form-control-warning" id="inputWarning1" type="number" class="form-control @error('nbrp') is-invalid @enderror" value="{{ $calcul->nbrp }}" name="nbrp" id="nbrp">
                @error('nbrp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
 
    
        <div class="col-md-6">
        <div class="form-group">
            <label>Rendement moyen <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
            <input class="form-control form-control-warning" id="inputWarning1" type="number" id="rdm" class="form-control  @error('rdm') is-invalid @enderror" value="{{ $calcul->rdm }}" name="rdm"
                id="rdm">

                @error('rdm')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
      
    </div>
</div>
<div class="row">
    <div class="col-md-4">
       <input type="number" readonly class="form-control form-txt-info" id="superificie" name="superificie"> 
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <input type="number" readonly class="form-control form-txt-info" id="quantite" name="quantite" > 
    </div>
</div>
<br><br><br>
<div class="row">
      
       
            <div class="col-md-4">
                <button onclick="javascript:calcul();" type="button" name="calcul" class="btn btn-dark btn-round btn-outline-dark"><i class="fas fa-plus-circle">Calculate</i></button>
            </div>

            <div class="col-md-4">
                <button type="submit" name="send" class="btn btn-info btn-round btn-outline-info"><i class="ion-edit"></i>Modifier</button>
            </div>
            <div class="col-md-4">
                <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="ion-arrow-left-a"></i>Retour</a>
            </div>
                   </div>
                </div>
            </div>
        </div>
    </form>
</div>

 @endsection