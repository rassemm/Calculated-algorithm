@extends('Dach.dachboard')
 @section('content')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <form  action="{{ route('calcul.store') }}"   method="POST" >

        @csrf
        <div class="row">
         <div class="col-md-4">
           <div class="form-group">
            <label>Région <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
            <input  class="form-control form-control-success" id="inputSuccess1" type="text"name="region" class="form-control @error('region') is-invalid @enderror" value="{{ old('region') }}"  id="region" >

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
            <input   class="form-control form-control-success" id="inputSuccess1" type="text"name="varite" class="form-control  @error('varite') is-invalid @enderror" value="{{ old('varite') }}"  id="varite">

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
            <input  class="form-control form-control-success" id="inputSuccess1" type="number" name="cycle" class="form-control  @error('cycle') is-invalid @enderror" value="{{ old('cycle') }}"
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
            <input  class="form-control form-control-success"  type="numbre" class="form-control  @error('densite') is-invalid @enderror" value="{{ old('densite') }}" name="densite"
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
            <input  class="form-control form-control-success" type="date" class="form-control  @error('datep') is-invalid @enderror" value="{{ old('datep') }}" name="datep"
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
          <input  class="form-control form-control-success"  type="number" class="form-control" name="nbrp" id="nbrp">
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
            <input  class="form-control form-control-success" id="inputSuccess1" type="number" id="rdm" class="form-control  @error('rdm') is-invalid @enderror" value="{{ old('rdm') }}" name="rdm"
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
    <div class="col-md-6">
       <input type="number" readonly class="form-control form-txt-info" onblur="calculate()"  id="superificie" name="superificie"> 
    </div>
   
    <div class="col-md-6">
        <input type="number" readonly class="form-control form-txt-info" onblur="calculate2()" id="quantite" name="quantite" > 
    </div>
</div>
<br><br><br>
<div class="row">
        
            <div class="col-md-6">
                <button type="button" name="calcul" class="btn btn-dark btn-round btn-outline-dark" onblur="calculate2()"><i class="fas fa-plus-circle">Calcul</i></button>
            </div>

            <div class="col-md-6">
                <button type="submit" name="send" class="btn btn-success btn-round btn-outline-success"><i class="ion-checkmark-circled"></i>Enregistrer</button>
            </div>
                   </div>
                </div>
            </div>
        </div>
    </form>
    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fas fa-backward">Retour</i></a>
</div>
<script type="text/javascript">
    calculate = function()
{
    var nbrp = document.getElementById('nbrp').value;
    var densite = document.getElementById('densite').value; 
    document.getElementById('superificie').value = parseInt(nbrp)/parseInt(densite);
   }
   calculate2 = function()
{
    var superificie = document.getElementById('superificie').value; 
    var rdm = document.getElementById('rdm').value; 
    document.getElementById('quantite').value = parseInt(superificie)*parseInt(rdm);
   }
    </script>
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 @endsection