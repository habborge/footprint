@extends('layouts.application_web')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Unete como Voluntario
				</h1>
				<p class="text-white link-nav"><a href="index.html">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="volunteer.html"> Voluntarios</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start Volunteer-form Area -->
<section class="Volunteer-form-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-9">
				<div class="title text-center">
					<h1 class="mb-20">Cómo puedes ayudar? Haste Voluntario</h1>
					<p>Ayuda a todas las fundaciones que protejen a perros y gatos abandonados a encontrar una familia que los cuide.<br>Para ser parte debes adoptar una mascota</p>
				</div>
			</div>
		</div>







		<div class="row justify-content-center">




			<form class="col-lg-9">
				@section('custom-js')
				<script type="text/javascript">
					// A $( document ).ready() block.
					$( document ).ready(function() {
						$( "#type" ).change(function() {
							var ident=$(this).val();
							$('#adoptar').hide();
							$('#apadrinar').hide();
							if(ident==1){
								$('#div_oculto').show();
								$('#adoptar').show();
							}else if(ident==2){
								$('#div_oculto').show();
								$('#apadrinar').show();
							}else{

								$('#div_oculto').hide();
							}
						});
					});
				</script>
				@endsection
				<div class="form-group">	
					<label for="City">¿Que quieres hacer?</label>
					<div class="select-option" id="service-select">
						<select id="type">
							<option data-display="Select Opción">Select opción</option>
							<option value="1">Adoptar</option>
							<option value="2">Apadrinar</option>
						</select>
					</div>
				</div>


				<div id="div_oculto" style="display: none;">

					<div id="adoptar">
						<img src="images/adoptar_info.jpg">

					</div>

					<div id="apadrinar">
						
						<img src="images/apadrinar_info.jpg">
					</div>



					<div class="form-group">
						<label for="first-name">First Name</label>
						<input type="text" class="form-control" placeholder="First Name">
					</div>
					<div class="form-group">
						<label for="last-name">Last Name</label>
						<input type="text" class="form-control" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label for="Address">Address</label>
						<input type="text" class="form-control mb-20" placeholder="Your Address">
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="form-row">
						<div class="col-6 mb-30">
							<label for="City">City</label>
							<div class="select-option" id="service-select">
								<select>
									<option data-display="Select City">Select City</option>
									<option value="1">Dhaka</option>
									<option value="2">Dinajpur</option>
									<option value="3">Gazipur</option>
									<option value="4">Bogra</option>
									<option value="5">Feni</option>
								</select>
							</div>
						</div>
						<div class="col-6 mb-30">
							<label for="state">State</label>
							<div class="select-option" id="service-select">
								<select>
									<option data-display="Select State">Select State</option>
									<option value="1">State One</option>
									<option value="2">State Two</option>
									<option value="3">State Three</option>
									<option value="4">State Four</option>
									<option value="5">State Five</option>
								</select>
							</div>
						</div>
						<div class="col-6 mb-30">
							<label for="Country">Country</label>
							<div class="select-option" id="service-select">
								<select>
									<option data-display="Select Country">Select Country</option>
									<option value="1">Bangladesh</option>
									<option value="2">London</option>
									<option value="3">India</option>
									<option value="4">Nepal</option>
									<option value="5">Uganda</option>
								</select>
							</div>
						</div>
						<div class="col-6 mb-30">
							<label for="postal-code">Postal code</label>
							<input type="text" class="form-control" placeholder="Postal Code">
						</div>
						<div class="col-6 mb-30">
							<label for="email">Email Address</label>
							<input type="email" class="form-control" placeholder="Email Address">
						</div>
						<div class="col-6 mb-30">
							<label for="phone">Phone Number</label>
							<input type="phone" class="form-control" placeholder="Phone Number">
						</div>
					</div>

					<fieldset class="form-group">
						<label for="day">Which days you can be volunteer?</label>
						<div class="form-group ">
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio1" value="option1"> Monday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio2" value="option2"> Tuesday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio3" value="option3"> Wednesday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio2" value="option4"> Thursday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio2" value="option5"> Friday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio2" value="option6"> Saturday
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio2" value="option6"> Sunday
								</label>
							</div>
						</div>
					</fieldset>
					<div class="form-group">
						<label for="note">Volunteer Note</label>
						<textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Write message"></textarea>
					</div>
					<button type="submit" class="primary-btn float-right">Send Request</button>

				</div>

			</form>
		</div>
	</div>
</section>
<!-- End Volunteer-form Area -->
@endsection
