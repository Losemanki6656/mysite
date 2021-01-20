@extends('layouts.botstraplayout')

	<script>
		$(document).ready(	function () 
			{
				/* When click New customer button */
				$('#new-customer').click(function () {
				$('#btn-save').val("create-customer");
				$('#customer').trigger("reset");
				$('#customerCrudModal').html("Add New Customer");
				$('#crud-modal').modal('show');
				});
			});
	</script>

@section('glavmenu')
			
		<section id="about" class="about">
			<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Majburiyatlar</h2>
			</div>

			<div class="row content">
				
				<div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
				<ul>
					@foreach ($responsarts as $res1)
					<li><i class="ri-check-double-line"></i>  {{$res1->respon}} </li>
					@endforeach	
				</ul>
				</div>
				
			</div>

			</div>
		</section>

		<section id="about" class="about">
			<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Shartlar</h2>
			</div>

			<div class="row content">
				
				<div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
				<ul>
					@foreach ($responworks as $res2)
					<li><i class="ri-check-double-line"></i>  {{$res2->respon}} </li>
					@endforeach	
				</ul>
				</div>

				<form class="text-center" data-aos="fade-up" >
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Orqaga qaytish</button>				
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ma'lumotlarni to'ldirish </button>
				</form>
			
			</div>

			</div>
		</section>

		

		<div class="row">	
		<p>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-center fw-bold" id="exampleModalLabel">Shaxsiy ma'lumotlarni to'ldirish</h5>
					</div>
					<div class="modal-body">
						
						<form class="was-validated container" name="custForm" action="{{ route('respon.store') }}" method="POST">
								@csrf
								<input type="hidden" value="{{ $idvacan }}" name="idvacan">  
								<div class="mb-3">
									<input type="text" class="form-control" id="first-name" placeholder="Familiyangizni kiriting" name='first_name' required>
								</div>

								<div class="mb-3">
									<input type="text" class="form-control" id="middle-name" placeholder="Ismingizni kiriting" name='last_name' required>
								</div>

								<div class="mb-3">
									<input type="text" class="form-control" id="middle-name" placeholder="Otangizning ismi" name='middle_name' required>
								</div>

								<div class="mb-3">
									<input class="form-control" type="date" id="example-date-input" name='dataroj' required>
								</div>

								<div class="mb-3">
									<select class="form-select" id="country" name='malumot' required>
										<option value="">Ma'lumoti...</option>
										<option>O'rta maxsus</option>
										<option>Tugallanmagan oliy</option>
										<option>Oliy</option>
									</select>
								</div>

								<div class="mb-3">
									<input type="text" class="form-control" placeholder="Institut yoki kolledj nomini kiriting" name='institut' required>
								</div>
								
								<div class="mb-3">
									<select class="form-select" id="country" name='xarbiy' required>
										<option value="">Xarbiy xizmat o'talganligi...</option>
										<option>Xa</option>
										<option>Yo'q</option>
									</select>
								</div>
asdasdasdasdasdasdasd
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="Tugilgan joyi" name='mestoroj' required>
								</div>

								<div class="mb-3">
									<input class="form-control" type="tel"  placeholder="Tel:nomer" id="example-tel-input" name='telnomer' required>
								</div>

								<div class="mb-3">
									<input type="text" class="form-control" placeholder="pasport seriyasi" name='pass_seriya' required>
								</div>

								<div class="mb-3">
									<input class="form-control" type="tel"  placeholder="pasport raqami " id="example-tel-input" name='pass_number' required>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Orqaga qaytish</button>
									 <button type="submit" class="btn btn-primary">Testni boshlash</button> <!-- href="{{ route('questest', ['id' => $res1->idvacan]) }}" -->
								</div>
						</form>
						
					</div>
					
					
					</div>
				</div>
				</div>
			</p>									
	</div>
	
@endsection	 