@extends('layouts.application')
@section('content')
<div class="content-header row">

  <div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title"><i class="la la-money"></i>Realizar Nueva Donaciones</h3>
  </div>
</div>
<div class="content-body">



  <div class="row">


    <div class="col-8">

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




            <div class="col-md-12 col-sm-12">
              <div class="card" style="margin-bottom: 0">


                <div class="card-header card-head-inverse bg-info" style="background-color: #1e9ff2 !important;padding: 9px 10px;">
                  <h4 class="card-title text-white">Nueva Donación</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                </div>


                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tbody>

                          <tr>
                            <th class="text-middle">Monto minimo a donar :</th>
                            <td class="current_bance">
                              100,000.00 COP
                            </td>
                          </tr>


                          <tr>
                            <th class="text-middle">Selecione método de pago :</th>
                            <td class="current_bance">
                              <img src="/images/metodos_pago.jpg" style="width: 100%">
                            </td>
                          </tr>

                          <tr>
                            <th class="text-middle">Digite monto a donar :</th>
                            <td class="current_bance">
                              <input type="text" class="form-control" id="" placeholder="Monto a donar">
                            </td>
                          </tr>


                        </tbody>
                      </table>
                    </div>
                    <br>
                    <button type="button" class="btn btn-success btn-min-width box-shadow-2 btn-lg mr-1 mb-1 btn-block">DONAR</button>
                  </div>
                </div>
              </div>
            </div>




          </div><!-- ./card-body -->
        </div>
      </div> <!-- ./card -->

    </div>

  </div>

</div>

@endsection
@section('custom-js')

@endsection
