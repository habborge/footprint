@extends('layouts.application')
@section('content')
<style type="text/css" media="screen">

    .clock { margin: 0 auto; display: block; width: 100%; }

    .flip-clock-wrapper ul { height: 35px; line-height: 35px; margin:2px; width: 24px !important;}
    .flip-clock-wrapper ul li a div.up:after { top: 16px; }
    .flip { width: 24px !important; }
    .flip-clock-divider { height: 35px; width: 10px !important;}
    .flip-clock-dot { height: 4px; width: 4px; left: 2px !important;}
    .flip-clock-dot.top { top: 12px; }
    .flip-clock-dot.bottom { bottom: 6px; }

    .flip-clock-divider .flip-clock-label { font-size: 11px !important; }
    .flip-clock-divider.days .flip-clock-label { right: -42px !important; }
    .flip-clock-divider.hours .flip-clock-label { right: -42px !important; }
    .flip-clock-divider.minutes .flip-clock-label { right: -48px !important; }
    .flip-clock-divider.seconds .flip-clock-label { right: -50px !important; }
    .flip-clock-wrapper ul li { line-height: 35px; }
    .flip-clock-wrapper ul { width: 24px !important; }
    .flip-clock-wrapper ul li a div div.inn { font-size: 21px; }

    .flip-clock-wrapper ul li a div.up:after {

        height: 1px !important;
    }
    .negrita{
        color:
    }

    #linkreferido{
        display: inline-block;
        color: #377dff;
    }
    .card-title {
        text-transform: unset;
    }
    #rango{
     display: inline-block;
     font-weight: bold;
     color: #5a93ff;
 }

 .btn_A{
    margin-left: 15px;
    font-weight: bold;
    margin-bottom: 0px !important;
    margin-top: -3px;
    color: #fff;
}
.btn_A:hover{
    color: #fff;
}
.imgs{
    width: 100px;
    height: 100px;
}
#m_code_ref{
    font-size: 14px;
    color: red;
    display: inline-block;
}
</style>
<div class="content-header row"></div>
<div class="content-body">


</div>
<div class="row">
    <!-- Info ranking -->
    <div class="col-xl-6 col-lg-6 col-12">
        <div class="card profile-with-cover">
            <div class="card-img-top img-fluid bg-cover height-135" style="background: url('http://lorempixel.com/100/100') 50%;"></div>
            <div class="media card_details w-100">
                <div class="media-left pl-2 pt-2">
                    <a href="/dashboard/settings/profile" class="profile-image">
                        {{-- <img src="http://lorempixel.com/100/100" class="rounded-circle card_circle height-100" alt="Card image"> /backoffice/img/ranking/r10.jpg --}}
                        <img src="{{ auth()->user()->getAvatarUrl() }}" class="rounded-circle card_circle height-100 imgs">

                    </a>
                </div>
                <div class="media-body pt-3 px-2">
                    <div class="row">
                        <div class="col">
                          <h3 class="card-title color_text_white">{{ auth()->user()->username }}</h3>
                      </div>

                  </div>
              </div>
          </div>
          <nav class="navbar navbar-light navbar-profile align-self-end right-radius-bottom">
            <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"></button>
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <h4 class="card-title" style="margin-bottom: 0;display: inline-block;">Mi Rango: </h4> <h3  id="rango" class="blue_c">ok</h3>
                        </li>
                    </ul>
                </div>
            </nav>
        </nav>
    </div>
</div>

<!-- Link de Referido -->
<div class="col-xl-6 col-lg-6 col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <h4 class="card-title" style="margin-bottom: 0;display: inline-block;">Mi link de referido :  </h4>


                {{-- @if($status_promise)  --}}

                <div  id="linkreferido" target="_blanck">{{ Request::root() }}/register/{{ $info_user->sponsor_code }}</div>
                <button type="button" onclick="copiarAlPortapapeles('linkreferido')" id="btn_copiar" class="btn btn-secondary btn-sm" style="margin-left: 10px;">Copiar link</button>
                       {{--  @else
                        <div id="m_code_ref">
                         Su código de vendedor será activado en el momento que la promesa de compra-venta sea verificada.
                     </div>
                     @endif --}}


                 </div>
             </div>
         </div>

     </div>
     <!-- Direct Numbers -->
     <div class="col-xl-3 col-lg-3 col-12">
        <a href="/dashboard/team/directs" >
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="blue_c">{{ $numberOfDirect }}</h3>
                                <h6>Mis Directos</h6>
                            </div>
                            <div>
                                <i class="la la-group blue_c font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- Indirect Numbers -->
    <div class="col-xl-3 col-lg-3 col-12">
        <a href="/dashboard/team/unilevel" >
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="green_c3">{{ $cant_indirec }}</h3>
                                <h6>Mis Indirectos</h6>
                            </div>
                            <div>
                                <i class="ft-users green_c3 font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- PcPot -->
    <div class="col-xl-6 col-6 col-12">

        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div>
                            <i class="ft-trending-up green_c2 font-large-2 float-right"></i>
                        </div>
                        <div class="media-body text-right">
                            <h3 class="green_c2">{{$pcpot}} COP</h3>
                            <h6>Acumulado (PCpot)</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- directs By Month -->
    <div class="col-xl-6 col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Mis referidos por mes: </h4>
            </div>
            <div class="card-content ">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div id="basic-column" class="height-400 echart-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- total earning -->
    <div class="col-xl-6 col-lg-6 col-12">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-12">
                <a href="/dashboard/transactions/earnings" >
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div>
                                        <i class="la la-money warning font-large-2 float-right"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3 class="warning">{{ $totalEarning }} {{ "COP" }}</h3>
                                        <h6>Ganancias Totales</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Currence Balance -->
            <div class="col-xl-6 col-lg-6 col-12">
                <a href="/dashboard/transactions/history" >
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div>
                                        <i class="ft-sliders font-large-2 success lighten-3"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3 class="success">{{ $currentBalance }} {{ "COP" }}</h3>
                                        <h6>Mi Balance</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


            <!-- payment date -->
            <div class="col-xl-12 col-lg-12 col-12">

                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">

                            <div class="media d-flex">
                                <div class="media-body text-left" style="margin-bottom: 20px;">
                                    <h4 class="danger" id="texto_reloj">Cargando ...</h4>
                                </div>

                            </div>
                            <div class="clock" style="padding-top: 10px;"></div>
                            <br>
                            <div >
                                Puedes pagar tu cuota del lote antes de vencer la fecha límite
                                <br>
                                <br><a href="/dashboard/payments/all"><button type="button" class="btn mr-1 mb-1 btn-success btn-sm">Ver pagos pendientes</button></a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Resume -->
    <div class="col-xl-12 col-lg-12 col-12">

        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">

                    <div class="row mt-1">
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Referidos</h6>
                            <h2 class="block font-weight-normal">{{ $numberOfDirect }}</h2>
                        </div>
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Total generado</h6>
                            <h2 class="block font-weight-normal">{{ $totalEarning }}</h2>

                        </div>
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Total cobrado</h6>
                            <h2 class="block font-weight-normal">{{ $total_cobrado }} COP</h2>

                        </div>
                        <div class="col-3 text-center">
                            <h6 class="text-muted">Retiros realizados</h6>
                            <h2 class="block font-weight-normal">{{ $cantidad_retiros }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
@section('custom-js')
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/charts/echarts/echarts.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/charts/echarts/chart/bar.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/charts/echarts/chart/line.js")!!}
<script type="text/javascript">

    $(window).on("load", function(){

    // Set paths
    // ------------------------------

    require.config({
        paths: {
            echarts: '../../../app-assets/vendors/js/charts/echarts'
        }
    });


    // Configuration
    // ------------------------------

    require(
        [
        'echarts',
        'echarts/chart/bar',
        'echarts/chart/line'
        ],


        // Charts setup
        function (ec) {

            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('basic-column'));

            // Chart Options
            // ------------------------------
            chartOptions = {

                // Setup grid
                grid: {
                    x: 40,
                    x2: 40,
                    y: 35,
                    y2: 25
                },

                // Add tooltip
                tooltip: {
                    trigger: 'axis'
                },

                // Add legend
                legend: {
                    data: ['Referidos']
                },

                // Add custom colors
                color: ['#666EE8'],

                // Enable drag recalculate
                calculable: false,

                // Horizontal axis
                xAxis: [{
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                }],

                // Vertical axis
                yAxis: [{
                    type: 'value'
                }],

                // Add series
                series: [
                {
                    name: 'Referidos',
                    type: 'bar',

                    @if($u_m_cantidad>0)
                    data: [{{ $u_m[0]['cant'] }},{{ $u_m[1]['cant'] }},{{ $u_m[2]['cant'] }},{{ $u_m[3]['cant'] }},{{ $u_m[4]['cant'] }},{{ $u_m[5]['cant'] }},{{ $u_m[6]['cant'] }},{{ $u_m[7]['cant'] }},{{ $u_m[8]['cant'] }},{{ $u_m[9]['cant'] }},{{ $u_m[10]['cant'] }},{{ $u_m[11]['cant'] }}],
                    @else
                    data: [0,0,0,0,0,0,0,0,0,0,0,0],
                    @endif

                    itemStyle: {
                        normal: {
                            label: {
                                show: true,
                                textStyle: {
                                    fontWeight: 500
                                }
                            }
                        }
                    },
                    // markLine: {
                    //     data: [{type: 'average', name: 'Average'}]
                    // }
                },

                ]
            };

            // Apply options
            // ------------------------------

            myChart.setOption(chartOptions);


            // Resize chart
            // ------------------------------

            $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".menu-toggle").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                    }, 200);
                }
            });
        }
        );
});

</script>








<script type="text/javascript">
    var clock;

    function copiarAlPortapapeles(id_elemento) {
      var aux = document.createElement("input");
      aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
      document.body.appendChild(aux);
      aux.select();
      document.execCommand("copy");
      document.body.removeChild(aux);
      toastr.success("Link copiado!", "Link de referido copiado");

  }

  $(document).ready(function() {

    @if($info_pago['count']!=0)
                // Grab the current date
                var currentDate = new Date();
                //
                var fecha_convertir='{{ $info_pago['detalle'][0]->final_cut_date }}'+" 24:00:00";
                var fechayhora = fecha_convertir.split(" ");

                var fechac=fechayhora[0];
                var fechadisuelta=fechac.split("-");
                var year=fechadisuelta[0];
                var month=fechadisuelta[1];
                if(month!=0){
                    month=month-1;
                }
                var day=fechadisuelta[2];
                var horac=fechayhora[1];
                var horadisuelta=horac.split(":");
                var hour=horadisuelta[0];
                var minute=horadisuelta[1];
                var second=horadisuelta[2];

                var futureDate = new Date(year, month, day, hour, minute, second); //fixed as per comments

                // Calculate the difference in seconds between the future and current date
                var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

                if(diff>0){
                    $('#texto_reloj').html('Recuerda que tu próxima cuota debe ser pagada antes de :');
                    clock = $('.clock').FlipClock(diff, {
                        clockFace: 'DailyCounter',
                        countdown: true
                    });
                }else{
                    $('.clock').hide();
                    $('#texto_reloj').html('Usted se encuentra en mora con nosotros<br><br><a href="/dashboard/payments/all"><button type="button" class="btn mr-1 mb-1 btn-success btn-sm">Ver Cuotas Pendientes</button></a>');
                }
                @else
                $('#texto_reloj').html('No tiene cuota pendiente');
                @endif
            });
        </script>
        @endsection
