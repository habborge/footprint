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
                        <img src="/images/man.png" class="rounded-circle card_circle height-100 imgs">

                    </a>
                </div>
                <div class="media-body pt-3 px-2">
                    <div class="row">
                        <div class="col">
                            <h3 class="card-title color_text_white">{{ auth()->user()->email }}</h3>
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
                                <h4 class="card-title" style="margin-bottom: 0;display: inline-block;">Nombre: </h4> <h3  id="rango" class="blue_c">{{ auth()->user()->name }}</h3>
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

                    <div  id="linkreferido" target="_blanck">{{ Request::root() }}/register/Xsdfnsdfn</div>
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
                                <h3 class="blue_c">4</h3>
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
                                <h3 class="green_c3">2</h3>
                                <h6>Mis Mascotas</h6>
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
                                        <h3 class="warning">800000 {{ "COP" }}</h3>
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
                                        <h3 class="success">400000 {{ "COP" }}</h3>
                                        <h6>Mi Balance</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>




        </div>
    </div>
    <!-- Resume -->
    <div class="col-xl-12 col-lg-12 col-12">

        <div class="card pull-up">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Mis mascotas: </h4>
                </div>
                <div class="card-body">

                    <img class="img-fluid" src="{{ Request::root() }}/animalshelter/img/c1.jpg" alt="">
                    <img class="img-fluid" src="{{ Request::root() }}/animalshelter/img/c2.jpg" alt="">
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






@endsection
