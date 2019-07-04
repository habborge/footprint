@extends('layouts.application')
@section('custom-css')
<style type="text/css" media="screen">
	.load,.loadhome {
		z-index: 1000;
		border: none;
		margin: 0px;
		padding: 0px;
		width: 100%;
		height: 100%;
		top: 0px;
		left: 0px;
		background-color: #ffffffd4;
		cursor: wait;
		position: absolute;
	}
	.divLoadsniper{
		font-size: 76px !important;
		position: absolute;
		left: 45%;
		top: 36%;
		color: #000000 !important;
		transform: translate(-50%, -50%);
		-webkit-transform: translate(-50%, -50%);
	}
	.table td, .table th {
		padding: .75rem;
		vertical-align: top;
		border-top: 1px solid #E3EBF3 !important;
	}
	.content_img{
		width: auto;
		border: 3px solid #80c443;
		margin: 0 auto;
		width: 85px;
		height: 85px;
		border-radius: 50%;
		padding: 2px;
	}
	#avatarImage{
		border-radius: 50%;
		width: 75px;
		height: 75px;
	}
	.text_ca{
		text-align: center;
		margin-top: 2px;
	}
	.content_img {
		width: auto;
		border: 3px solid #fab700 !important;
		margin: 0 auto;
		width: 85px;
		height: 85px;
		border-radius: 50%;
		padding: 2px;
	}
</style>
@endsection
@section('content')

<div class="content-header row">

	<div class="content-header-left col-md-12 col-12 mb-2" style="text-align: center;">
		<h3 class="content-header-title" style="margin-top: 40px;">Mi Perfil</h3>
		<div class="row breadcrumbs-top">
		</div>

		<div class="content_img">
			<form action="" method="post" style="display: none" id="avatarForm">
				{{ csrf_field() }}
				<input type="file" id="avatarInput" name="photo">
			</form>
			<img src="/images/man.png" id="avatarImage">

		</div>
	{{-- 	<div class="text_ca">
			click para cambiar imagen
		</div>
		--}}


	</div>
</div>

<div class="content-body">
	<div class="row">
		<div class="col-12" style="max-width: 700px;margin: 0 auto;">
			<div class="card">
				{{-- <div class="card-header">
					<h4 class="card-title">Register Api Key</h4>
				</div> --}}
				<div class="card-content collapse show">
					<div class="card-body">


						<aside class="sidebar-large ">

							<div class="user-access">

								<div class="app-content">


									<table class="table mb-0">

										<tbody>
											<tr>
												<th>Tipo de Persona</th>
												<td>{{ $infoMember->type_people }}</td>
											</tr>
											<tr>
												<th>Nombres</th>
												<td>{{ $infoMember->firstname }}</td>
											</tr>
											<tr>
												<th>Apellidos</th>
												<td>{{ $infoMember->lastname }}</td>
											</tr>

											<tr>
												<th>Corrreo</th>
												<td>{{ $infoMember->email }}</td>
											</tr>
											<tr>
												<th>Teléfono</th>
												<td>{{ $infoMember->phone }}</td>
											</tr>



											<tr>
												<th>Patrocinador</th>
												<td>{{ $infoMember->sponsor }}</td>
											</tr>

											<tr>
												<th>Fecha de registro</th>
												<td>{{ $infoMember->created_at }}</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</aside>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@section('custom-js')
<script  type="text/javascript" charset="utf-8">


</script>
<script  type="text/javascript">
	$('#load').show();
	$( document ).ready(function() {
		$('#load').hide();

	});
</script>
@endsection

@stop
