@extends('layouts.application')
@section('content')
<style type="text/css">
  #cargando_up{
    background: #ec0f4d7d;
    color: #fff;
    display: block;
    widows: 100%;
    padding: 20px 20px;
    font-size: 18px;
    margin-bottom: 20px;
    text-align: center;
    font-weight: bold;
    display: none;
  }
</style>

<div id="cargando_up"> 
  Calculando comisiones por favor espere .......
</div>

<div class="content-header row">





  <div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title">
      @if ($type_render == "income")
      <i class="la la-money"></i> Historial de Ganancias
      @php
      $url = "/dashboard/transactions/earnings/show";

      @endphp
      @else
      <i class="la la-money"></i>  Historial de Cobros
      @php
      $url = "/dashboard/transactions/withdrawals/show";
      @endphp
      @endif
    </h3>
  </div>
</div>
@if (!empty($type_message))
@if ($type_message == 3)
@php
$view_message = "yes";
$color = "bs-callout-success";
$bgcolor = "bg-success";
@endphp
@elseif ($type_message == 2)
@php
$view_message = "yes";
$color = "bs-callout-danger";
$bgcolor = "bg-danger";
@endphp
@elseif ($type_message == 1)
@php
$view_message = "yes";
$color = "bs-callout-warning";
$bgcolor = "bg-warning";
@endphp
@endif
@else
@php
$view_message = "not";
@endphp
@endif

@if ($view_message == "yes")
<div class="row">
  <div class="col-xl-12 col-lg-12 col-12">
    <div class="{{$color}}  callout-bordered mt-1" style="margin-top: 0 !important;margin-bottom:25px;">
      <div class="media align-items-stretch">
        <div class="media-left media-middle {{$bgcolor}} position-relative callout-arrow-left p-2">
          <i class="la la-bell-o white font-medium-5 mt-1"></i>
        </div>
        <div class="media-body p-1">
          <strong>Atención:</strong>
          <p>{{$message}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endif


<div class="content-body">

  <div class="row">


    <div class="col-xl-3 col-lg-6 col-12">

     <div class="card">
      <div class="card-content">
        <div class="card-body">
          <div class="media d-flex">
            <div>
              <i class="la la-money font-large-2 success lighten-3"></i>
            </div>
            <div class="media-body text-right">
              <h3 class="success">
                <script src="https://www.dolar-colombia.com/widget.js?t=1&c=1"></script>
              </h3>
              <h6>Precio Aproximado a la TRM</h6>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="col-12">
    <div class="card">

      <div class="card-header">
        @if(($my_ranking_id >= 2) and ($direct_count >= 2))
        {{-- <a href="/dashboard/transactions/calculate">
          <button class="btn btn-success">Calcular Indirectas</button>
        </a> --}}
        <a href="/dashboard/transactions/residual">
          <button class="btn btn-success">Calcular Residual</button>
        </a>
        @endif


        <div class="heading-elements">
          <ul class="list-inline mb-0">

            <li>
              <a data-action="expand"><i class="ft-maximize"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="card-content collapse show">
        <div class="card-body card-dashboard">
          <div class="dataTables_wrapper container-fluid dt-bootstrap4">


            <table class="table display nowrap table-striped table-bordered scroll-horizontal" id="table_all_transactions" role="grid" aria-describedby="DataTables_Table_0_info">
              <thead>
                <th>Fecha</th>
                <th>Concepto</th>
                <th>Detalle</th>
                <th>Monto COP</th>
                <th>Estado</th>
                {{-- <th></th> --}}
              </thead>
            </table>
          </div> <!-- ./dataTables_wrapper -->
        </div><!-- ./card-body -->
      </div>
    </div> <!-- ./card -->
  </div>
</div>
</div>

@endsection
@section('custom-js')
<script type="text/javascript">

  var reload_approved = true;
  var reload_rejected = true;

  function InitTable(){
    if ($.fn.DataTable.isDataTable('#table_all_transactions')) {
      $('#table_all_transactions').dataTable().fnClearTable();
      $('#table_all_transactions').dataTable().fnDestroy();
    }
    table = $('#table_all_transactions').DataTable({
      "searching": false,
      "sScrollX": "100%",
      "sScrollXInner": "100%",
      "bScrollCollapse": true,
      "processing": true,
      "serverSide": true,
      "ajax":{
        "url": "{{$url}}",
        "dataType": "json",
        "type": "POST",
        "data":{ _token:$('meta[name="csrf-token"]').attr('content')},
      },

      "columns": [
      { "data": "created_at" },
      { "data": "concept_id" },
      { "data": "detail" },
      { "data": "amount_cop" },
      { "data": "status" },
      // { "data": "transactions"}
      ]
    });
  }


  @if ($type_render == "income" and Request::is( 'dashboard/transactions/earnings'))
  $(document).ready(function(){
    $.ajax({
      type:'POST',   
      dataType:'json',      
      url:'/dashboard/transactions/calculate/indirect',
      data: {'id':'ident'},
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      beforeSend: function(x){
       $('#cargando_up').show();
     },
     success:function(data){
      if(data.status==200){
       $('#cargando_up').hide(); 
       toastr.success(data.message, "Comisiones calculadas con éxito!"); 
       location.reload();       
     }else if(data.status==403){
      $('#cargando_up').hide();
      $.each(data.errors, function( index, value ) {         
        toastr.error(value, 'Alerta!', {  timeOut: 5e3});
      });  
    }else if(data.status==404){ 
     $('#cargando_up').hide();
     toastr.error(data.message, "Alerta!");      
   }else{
     $('#cargando_up').hide();
   }  
 }
});
  });
  @endif




  $(document).ready(function(){
    InitTable();


  });


</script>
@endsection
