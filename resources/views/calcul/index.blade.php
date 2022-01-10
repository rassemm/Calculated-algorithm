@extends('Dach.dachboard')

@section ('content')
<div class="container-fluid">
          <div class="animated fadeIn">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card" style="border-radius: 10%">
                    
                		
                    <div class="d-flex justify-content-end mb-4">
                  </div>
                    <div class="card-body">

                      <div class="alert alert-success alert-link" role="alert" style="text-align: center">  <i class="far fa-table"></i>{{ __('Données prévisionnelles recoltes campagne 2022') }} </div>
                      <div class="topright mb-3">
                        <div class="row">
                        <div class="col-md-6">
                          <a class="btn btn-success btn-round btn-outline-success" href="{{ route('calcul.create') }}"> <i class="ion-plus"></i>Créer</a>

                        </div>
                        <div class="col-md-6">
                          <a class="btn btn-danger btn-round btn-outline-danger" href="{{ route('indexx') }}"><i class="ion-archive"></i>Exporter</a>

                        </div>
                      </div>
                        {{-- <a class="btn btn-success " href="{{ route('exports') }}"><i class="far fa-file-excel"  ></i></a>
                        <a class="btn btn-danger " href="{{ route('exportPdf') }}"><i class="fas fa-download" id="ignorePDF"></i></a> --}}
                       
                         
                  
                      
                      </div>
                      <!-- <button style="margin-bottom: 10px" class="btn btn-dark delete_all" data-url="">Delete All Selected</button> -->
                      <div class="card">
                        <div class="card-header">
                      <div class="card-header-right">
                      
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                      {{-- <button style="margin-bottom: 10px" class="btn btn-dark delete_all" data-url="{{ route('DeleteAll') }}">Supprimer touts</button> --}}
                      <table id="lang-dt" class="table table-striped table-bordered nowrap">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Région</th>
                                <th>Varieté</th>
                                <th>Cycle végitatif</th>                          
                                <th>Densité</th>  
                                <th>Superficie</th>  
                                <th>Date de plantation</th>                          
                                <th>Date de recolte</th>                          
                                <th>Quantité</th>                          
                                <th>Action</th>
                                
                              
                              </tr>
                            </thead>
                        <tbody>
                          @if($calculs->count())
                          @foreach($calculs as $calcul)
                          
                              <td><strong>{{ $calcul->id}}</strong></td>
                              <td><strong>{{ $calcul->region}}</strong></td>
                              <td><strong>{{ $calcul->varite}}</strong></td>
                              <td><strong>{{ $calcul->cycle}}</strong></td>
                              <td><strong>{{ $calcul->densite}}</strong></td>
                              <td><strong type="button" class="btn btn-success btn-round">{{ round($calcul->superficie,2)}}</strong></td>
                              <td><strong type="button" class="btn btn-info btn-round">{{ $calcul->datep}}</strong></td>
                              <td><strong type="button" class="btn btn-warning btn-round">{{ $calcul->dater}}</strong></td>
                              <td><strong type="button" class="btn btn-danger btn-round">{{ round($calcul->quantite,2)}}</strong></td>
                              <td>
                                <form method="POST" action="{{route('calcul.destroy',  $calcul->id) }}"  >
                                <a class="btn btn-info btn-round btn-outline-info" href="{{ route('calcul.edit',  $calcul->id) }}"><i class="ion-edit"></i>Modifier</a>
                                @method('DELETE')
                                @csrf
                               <button type="submit" class="btn btn-danger btn-round btn-outline-danger"><i class="ion-close-circled"></i>Supprimer</button>
                               
                           </form>
                             
                              </td>
                           
                            </tr>
                          @endforeach
                          @endif
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      {{-- <script type="text/javascript">
          $(document).ready(function () {
      
      
              $('#master').on('click', function(e) {
               if($(this).is(':checked',true))  
               {
                  $(".sub_chk").prop('checked', true);  
               } else {  
                  $(".sub_chk").prop('checked',false);  
               }  
              });
      
      
              $('.delete_all').on('click', function(e) {
      
      
                  var allVals = [];  
                  $(".sub_chk:checked").each(function() {  
                      allVals.push($(this).attr('data-id'));
                  });  
      
      
                  if(allVals.length <=0)  
                  {  
                      alert("Please select row.");  
                  }  else {  
      
      
                      var check = confirm("Are you sure you want to delete this row?");  
                      if(check == true){  
      
      
                          var join_selected_values = allVals.join(","); 
      
      
                          $.ajax({
                              url: $(this).data('url'),
                              type: 'DELETE',
                              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                              data: 'ids='+join_selected_values,
                              success: function (data) {
                                  if (data['success']) {
                                      $(".sub_chk:checked").each(function() {  
                                          $(this).parents("tr").remove();
                                      });
                                      alert(data['success']);
                                  } else if (data['error']) {
                                      alert(data['error']);
                                  } else {
                                      alert('Whoops Something went wrong!!');
                                  }
                              },
                              error: function (data) {
                                  alert(data.responseText);
                              }
                          });
      
      
                        $.each(allVals, function( index, value ) {
                            $('table tr').filter("[data-row-id='" + value + "']").remove();
                        });
                      }  
                  }  
              });
      
      
              $('[data-toggle=confirmation]').confirmation({
                  rootSelector: '[data-toggle=confirmation]',
                  onConfirm: function (event, element) {
                      element.trigger('confirm');
                  }
              });
      
      
              $(document).on('confirm', function (e) {
                  var ele = e.target;
                  e.preventDefault();
      
      
                  $.ajax({
                      url: ele.href,
                      type: 'DELETE',
                      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      success: function (data) {
                          if (data['success']) {
                              $("#" + data['tr']).slideUp("slow");
                              alert(data['success']);
                          } else if (data['error']) {
                              alert(data['error']);
                          } else {
                              alert('Whoops Something went wrong!!');
                          }
                      },
                      error: function (data) {
                          alert(data.responseText);
                      }
                  });
      
      
                  return false;
              });
          });
      </script> --}}
@endsection