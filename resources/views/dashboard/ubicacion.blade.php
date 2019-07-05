@extends('layouts.application')
@section('content')
<style>
    .google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>
</style>
<div class="row">





    <!-- Resume -->
    <div class="col-xl-8 col-lg-8 col-8" >

        <div class="card pull-up">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">Ubicación de mi mascota: </h4>
                </div>
                <div class="card-body">

                  <div class="google-maps">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.4594676473057!2d-74.80916998466502!3d11.004112457957422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d8bc06f34c9%3A0xdc92a8425b1a743d!2sBarranquilla%2C+Colombia!5e0!3m2!1ses-419!2sco!4v1562343192661!5m2!1ses-419!2sco" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-4 col-4">

    <div class="card pull-up">
        <div class="card-content">
            <div class="card-header">
                <h4 class="card-title">Mi Mascota: </h4>
            </div>
            <div class="card-body">

                <img class="img-fluid" src="{{ Request::root() }}/animalshelter/img/c1.jpg" alt="">
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
