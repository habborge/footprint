<footer class="footer footer-static footer-light navbar-border navbar-shadow" style="background: #fab700;
color: #fff;">
<p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2" >
	<span class="float-md-left d-block d-md-inline-block" style="color: #fff !important;">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href=""
		target="_blank" style="color: #fff !important;font-weight: bold;">Footprint </a>, Todos los derechos reservados. </span>
		
	</p>
</footer>


<!-- BEGIN VENDOR JS-->
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/vendors.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/extensions/sweetalert.min.js")!!}
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/charts/chartist.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/charts/raphael-min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/timeline/horizontal-timeline.js")!!}

{{-- New register --}}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js")!!}

{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/select/select2.full.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/pickers/daterange/daterangepicker.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/validation/jquery.validate.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/extensions/jquery.steps.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/wizard-steps.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/select/form-select2.min.js?timestamp=13")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/switch.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/jquery.number.min.js")!!}


{!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/icheck/icheck.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/checkbox-radio.min.js")!!}

{!!Html::script("assetUserBackoffice/app-assets/vendors/js/extensions/toastr.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/scripts/popover/popover.min.js")!!}
{{-- end --}}

{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/checkbox-radio.min.js")!!}

<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
{!!Html::script("assetUserBackoffice/app-assets/js/core/app-menu.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/js/core/app.min.js")!!}


{!!Html::script("assetUserBackoffice/app-assets/js/scripts/customizer.min.js")!!}

<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
{!!Html::script("assetUserBackoffice/app-assets/js/datatables.js?timestamp=131")!!}

{!!Html::script("assetUserBackoffice/app-assets/vendors/js/extensions/toastr.min.js")!!}
{!!Html::script("assetUserBackoffice/app-assets/vendors/js/tables/datatable/datatables.min.js")!!}


{!!Html::script("assetUserBackoffice/assets/js/global.js")!!}


{!!Html::script("FlipClock/flipclock.js")!!}
<script>
	var cant=1;
	$( ".ft-menu" ).click(function() {
		if (cant % 2 == 0){
			$('.brand-logo-mini').hide();
		}else{
			$('.brand-logo-mini').show();
		}
		cant++;

	});
</script>

{!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/checkbox-radio.min.js")!!}
{{-- {!!Html::script("assetUserBackoffice/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js")!!} --}}
{{-- {!!Html::script("assetUserBackoffice/app-assets/js/scripts/forms/validation/form-validation.js")!!} --}}