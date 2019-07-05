@extends('layouts.application')
@section('content')
<div class="content-header row">

  <div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title"><i class="la la-money"></i> Donaciones</h3>
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



            <div class="dataTables_wrapper container-fluid dt-bootstrap4">
              <table class="table display nowrap table-striped table-bordered scroll-horizontal" id="table_all_transactions" role="grid" aria-describedby="DataTables_Table_0_info">
                <thead>
                  <th>Fecha</th>
                  <th>Concepto</th>
                  <th>Detalle</th>
                  <th>Monto COP</th>
                  <th>Estado</th>
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
        "url": "/dashboard/donaciones/all/show",
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
  $(document).ready(function(){
    InitTable();

  });


</script>
@endsection
