<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Title -->
  <title>Footprint</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <!-- CSS Front Template -->
  <link rel="stylesheet" href="/assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="/assets/vendor/font-awesome/css/fontawesome-all.min.css">
  {{-- {!!Html::style("assetUserBackoffice/app-assets/particles/css/style.css")!!} --}}
  {!!Html::style("assetUserBackoffice/app-assets/vendors/css/forms/selects/select2.min.css")!!}
  <link rel="stylesheet" href="/assets/css/theme.css">
  {!!Html::style("assetUserBackoffice/app-assets/css/plugins/animate/animate.min.css")!!} 
  {!!Html::style("assetUserBackoffice/app-assets/vendors/css/extensions/sweetalert.css")!!}
  {!!Html::style("assetUserBackoffice/app-assets/vendors/css/extensions/toastr.css")!!}
  {!!Html::style("assetUserBackoffice/app-assets/vendors/css/weather-icons/climacons.min.css")!!}
  {!!Html::style("assetUserBackoffice/app-assets/css/plugins/forms/wizard.min.css")!!}
  {!!Html::style("assetUserBackoffice/app-assets/css/core/colors/palette-switch.min.css")!!}
  {!!Html::style("assetUserBackoffice/app-assets/css/plugins/forms/checkboxes-radios.min.css")!!}
  {!!Html::style("assetUserBackoffice/app-assets/vendors/css/cryptocoins/cryptocoins.css")!!}
  {!!Html::style("assetUserBackoffice/app-assets/css/plugins/loaders/loaders.min.css")!!}
  {!!Html::style("assetUserBackoffice/app-assets/vendors/css/forms/icheck/icheck.css")!!}
  {!!Html::style("assetUserBackoffice/app-assets/css/plugins/forms/checkboxes-radios.min.css")!!}

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" media="screen">
  <link rel="stylesheet" href="/lib/leaflet.css" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139842760-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-139842760-1');
  </script>
  <style>
    [data-accordion='1'] .card-header {
      position: relative;
      cursor: pointer;
    }

    .blog-style{
      height: 500px!important;
    }
    #content_loader{
      text-align: center;
      color: rgba(108,187,35,0.85);
    }

    .md-accordion .card .card-header a:not(.collapsed) .rotate-icon {
      -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      transform: rotate(180deg);
    }

    .accordion.md-accordion.accordion-3 .fab.fa-angle-down, .accordion.md-accordion.accordion-3 .far.fa-angle-down, .accordion.md-accordion.accordion-3 .fas.fa-angle-down {
      margin-top: -10px;
    }
    .md-accordion .card .fa-angle-down {
      float: right;
    }
    .fa-2x {
      font-size: 2em;
    }

    
    .btn-primary {
      color: #fff;
      background-color: #fab700;
      border-color: #fab700;
    }
    .btn-primary[href]:hover, .btn-primary[href]:focus, .btn-primary[href]:active, .btn-primary[type]:hover, .btn-primary[type]:focus, .btn-primary[type]:active {
      box-shadow: 0 4px 11px rgb(127, 167, 91);
    }
    .btn-primary:hover {
      color: #fff;
      background-color: #fab700;
      border-color: #fab700;
    }
    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
      color: #fff;
      background-color: #fab700;
      border-color: #fab700;
    }

    .btn-primary {
      color: #fff;
      background-color: #fab700;
      border-color: #fab700;
    }
    .btn-primary:hover {
      color: #fff;
      background-color: #fab700;
      border-color: #fab700;
    }
    .btn-primary[href]:hover, .btn-primary[href]:focus, .btn-primary[href]:active, .btn-primary[type]:hover, .btn-primary[type]:focus, .btn-primary[type]:active {
      box-shadow: 0 4px 11px rgb(127, 167, 91);
    }
    .text-primary {
      color: #fab700 !important;
    }
    .btn-success {
      color: #fff;
      background-color: #fab700;
      border-color: #fab700;
    }
    .btn-success:hover {
      color: #fff;
      background-color: #fab700;
      border-color: #fab700;
    }
    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
      color: #fff;
      background-color: #fab700;
      border-color: #fab700;
    }
    .title_int{
      font-size: 13px;
    }
    .btn-success.disabled, .btn-success:disabled {
      color: #fff;
      background-color: #fab700;
      border-color: #fab700;
    }
    #mensaje_btn_code{
      display: none;
    }
    .succes_input{ 
      border-color: green !important;
      background: #b9d8b9 !important;
    }
    .error_input{
      border-color: red !important;
      background: #f3e8e8 !important;
    }
    #cargando_loader{
      display: none;
      text-align: center;
      margin-bottom: 15px;
    }
    #loading_min{
      display: none;
    }

    #payment_consignacion{
      display: none;
    }
    .gradient-half-primary-v1 {
      background-image: linear-gradient(150deg, #fab700 0%, #fab700 100%);
      background-repeat: repeat-x;
    }
    .text-primary {
      color: #fab700 !important;
    }

  </style>
  @yield('custom-css')
  {{-- {!! NoCaptcha::renderJs() !!} --}}
</head>
<body>

 @yield('content')

 <!-- ========== END FOOTER ========== -->

 <!-- Go to Top -->
 <a class="js-go-to u-go-to" href="#"
 data-position='{"bottom": 15, "right": 15 }'
 data-type="fixed"
 data-offset-top="400"
 data-compensation="#header"
 data-show-effect="slideInUp"
 data-hide-effect="slideOutDown">
 <span class="fas fa-arrow-up u-go-to__inner"></span>
</a>

<!-- JS Global Compulsory -->
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/vendors.min.js")!!}

{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/icheck/icheck.min.js")!!}

{!!Html::script("assetUserBackoffice/app-assets/vendors/js/extensions/sweetalert.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/select/select2.full.min.js")!!}

{!!Html::script("assetUserBackoffice/app-assets/vendors/js/extensions/jquery.steps.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/pickers/daterange/daterangepicker.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/validation/jquery.validate.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/toggle/switchery.min.js")!!}
{!!Html::script("js/register.js")!!}

{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/wizard-steps.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/select/form-select2.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/switch.min.js")!!}

{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/icheck/icheck.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/checkbox-radio.min.js")!!}

{{-- {!!Html::script("assetUserBackoffice/app-assets/js/scripts/ui/scrollable.min.js")!!} --}}
{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/checkbox-radio.min.js")!!}

{!!Html::script("assetUserBackoffice/app-assets/vendors/js/extensions/toastr.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/scripts/popover/popover.min.js")!!}

{!!Html::script("assetUserBackoffice/app-assets/particles/particles.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/particles/js/app.js")!!}
{{-- {!!Html::script("assetUserBackoffice/app-assets/particles/js/lib/stats.js")!!} --}}

{{-- <script>
  var count_particles,update;
  var stats;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script> --}}
@yield('custom-js')

</body>