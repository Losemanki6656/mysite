@extends('layouts.botstraplayout')

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
				

				<p>
					<div class="container">
						<div class="container">
							<div class="container">
								<div class="form-check mb-2 fw-bold" data-aos="fade-up" id="cheks1" data-aos-delay="150" >
									<input  class="form-check-input" type="checkbox"  onchange="document.getElementById('testbutton').disabled = !this.checked;" />
									<label class="form-check-label" for="flexCheckDefault">
									  Barcha majburiyat va shartlarga rozilik bildirish !
									</label>
								  </div>
							</div>							
						</div>						
					</div>
				</p>
				
				

				<form class="text-center" data-aos="fade-up" >
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Orqaga qaytish</button>				
						<button type="button" id="testbutton" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" disabled="disabled">Ma'lumotlarni to'ldirish </button>
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

								<div class="mb-3">
									<input type="text" class="form-control" placeholder="Tugilgan joyi" name='mestoroj' required>
								</div>

								<div class="mb-3">
									<input class="form-control" type="tel"  placeholder="Tel:nomer" id="example-tel-input" name='telnomer' required>
								</div>

								<div class="mb-3">
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" placeholder="Pasport seriyasi" name='pass_seriya' required>
										</div>
		
										<div class="col">
											<input class="form-control" type="tel"  placeholder="Pasport raqami " id="example-tel-input" name='pass_number' required>
										</div>
									</div>

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