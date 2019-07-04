@extends('layouts.application')
@section('content')
<div class="content-header row">

  <div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title"><i class="la la-group"></i> Mis Referidos</h3>
  </div>
</div>
<div class="content-body">

  <div class="row">

    <div class="col-12">

      <div class="card">
        <div class="card-header">

          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="card-content collapse show">
          <div class="card-body card-dashboard">

            <table class="table table-striped table-bordered zero-configuration dataTable" id="directos" role="grid" aria-describedby="DataTables_Table_0_info">

              <thead>

                <th>Fecha de registro</th>
                <th>Username</th>
                <th>Tipo de persona</th>
                <th>Nombre</th>
                <th>Apellido</th>

              </thead>

              <tbody>
                <tr>
                  <td>Cargando....</td>
                  <td>Cargando....</td>
                  <td>Cargando....</td>
                  <td>Cargando....</td>
                  <td>Cargando....</td>
                </tr>
              </tbody>



            </table>
          </div>


        </div>
      </div>

    </div>

  </div>

</div>

@endsection
@section('custom-js')
<script type="text/javascript">

  var reload_approved = true;
  var reload_rejected = true;

  function InitTable(){
    if ($.fn.DataTable.isDataTable('#directos')) {
      $('#directos').dataTable().fnClearTable();
      $('#directos').dataTable().fnDestroy();
    }
    table = $('#directos').DataTable({
      "sScrollX": "100%",
      "sScrollXInner": "100%",
      "bScrollCollapse": true,
      "processing": true,
      "serverSide": true,
      "ajax":{
        "url": "/dashboard/team/get-directs",
        "dataType": "json",
        "type": "POST",
        "data":{ _token:$('meta[name="csrf-token"]').attr('content')},
      },

      "columns": [
      { "data": "created_at" },
      { "data": "username" },
      { "data": "type_people" },
      { "data": "firstname" },
      { "data": "lastname" },

      ]
    });
  }







  $(document).ready(function(){
    InitTable();

  });


</script>
@endsection