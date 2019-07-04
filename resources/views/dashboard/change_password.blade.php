@extends('layouts.application')
@section('content')
<style type="text/css" media="screen">
  .contenid_ocult{
    display: none;
  }
</style>
<div class="content-header row">

  <div class="content-header-left col-md-12 col-12 mb-2">
    <h3 class="content-header-title" style="text-align: center;margin-top: 20px;">Cambiar la contraseña</h3>
    <div class="row breadcrumbs-top">
    </div>
  </div>
</div>
<div class="content-body">

  <div class="row">

    <section id="basic-form-layouts" style="margin: 0 auto;min-width: 45%;">

      <div class="row match-height">
        <div class="col-md-12">
          <div class="card">

            <div class="card-content collapse show">
              <div class="card-body" style="padding: 0px 30px 30px 30px;">
                <div class="card-text">

                </div>

                <form class="form" id="formulario" method="POST" action="/">


                  <div class="form-body">
                    @csrf
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="projectinput1">Contraseña actual</label>
                          <input type="password" id="projectinput1" class="form-control" placeholder="Contraseña actual" name="current_password">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput3">Nueva contraseña</label>
                          <input type="password" id="projectinput3" class="form-control" placeholder="Nueva contraseña" name="password">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput4">Repita la nueva contraseña</label>
                          <input type="password" id="projectinput4" class="form-control" placeholder="Repita la nueva contraseña" name="password_confirmation">
                        </div>
                      </div>
                    </div>








                    <button class="btn btn-info btn-block" id='btn_cambiar_pass' type="button">
                      Cambiar la contraseña
                    </button>







                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>



    </section>


  </div>

</div>

@stop


@section('custom-js')

<script  type="text/javascript">
  $( "#obtener_codigo" ).click(function() {
    $.ajax({
      type:'POST',
      dataType:'json',
      url:'/dashboard/new-code/generate',
      data: $("#formulario").serialize(),
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      beforeSend: function(x){
        $("#obtener_codigo").attr('disabled','disabled');
        $("#obtener_codigo").text('Enviando codigo ....');
      },
      success:function(data){
        if(data.status==200){

          toastr.success(data.message, "succes");
          $("#obtener_codigo").text('Digite Codigo de verificación  ->');
          $("#obtener_codigo").attr('disabled','disabled');
          $("#email").attr('disabled','disabled');
          $("#email_confirm").attr('disabled','disabled');
          $("#code_verificacion").removeAttr('disabled');
          countdownTimer = setInterval(secondPassed, 1000);


        }else if(data.status==403){
          $.each(data.errors, function( index, value ) {
            toastr.error(value, 'Error!', {  timeOut: 5e3});
          });
          $("#code_verificacion").attr('disabled','disabled');
          $("#obtener_codigo").removeAttr('disabled');
          $("#obtener_codigo").text('Solicitar código de verificación');
          return  false;
        }else{
          toastr.error(data.message, "Error!");
          $("#obtener_codigo").text('Solicitar código de verificación');
          $("#obtener_codigo").removeAttr('disabled');
          $("#code_verificacion").attr('disabled','disabled');
          return  false;
        }
      }
    });
  });

  $( "#btn_cambiar_pass" ).click(function() {
    $("#code_verificacion").removeAttr('disabled');
  });

  


  $("#code_verificacion").on('keyup', function(){
    var cantidad = $(this).val().length;
    if(cantidad>7){
      $("#email").removeAttr('disabled');
      $("#email_confirm").removeAttr('disabled');
      $("#loading_min").show();
      $.ajax({
        type:'POST',
        dataType:'json',
        url:'/dashboard/new-code/ValidateCodeAll',
        data: $("#formulario").serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        beforeSend: function(x){},
        success:function(data){

          if(data.status==200){
            toastr.success(data.message, "succes");
            clearInterval(countdownTimer);
            $("#mensaje_btn_code").hide();
            $("#code_verificacion").attr('disabled','disabled');
            $("#code_verificacion").removeClass('error_input');
            $("#code_verificacion").addClass('succes_input');
            $("#email").attr('disabled','disabled');
            $("#email_confirm").attr('disabled','disabled');
            $("#obtener_codigo").text('Verificado');
            $("#obtener_codigo").attr('disabled','disabled');
            $(".contenid_ocult").show();

          }else if(data.status==403){
            $.each(data.errors, function( index, value ) {
              toastr.error(value, 'Error!', {  timeOut: 5e3});
            });
            $("#code_verificacion").removeClass('succes_input');
            $("#code_verificacion").addClass('error_input');
            return  false;
          }else{
            $("#code_verificacion").removeClass('succes_input');
            $("#code_verificacion").addClass('error_input');
            toastr.error(data.message, "Error!");
            return  false;
          }
          $("#loading_min").hide();
        }
      });
    }
  }).keyup();
</script>


@endsection







{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
