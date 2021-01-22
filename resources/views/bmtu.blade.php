@extends('layouts.botstraplayout')

@section('glavmenu')

			
	<div class="row">	

		<section id="about" class="about">
			<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Bo'sh ish o'rinlari</h2>
			</div>

			<div class="row content">
				<p>
				<div class="col-5" data-aos="fade-up" data-aos-delay="150">				
					<h5><li class="fw-bold">Bo'sh ish o'rni lavozimi </li>	</h5>											
				</div>
				<div class="col" data-aos="fade-up" data-aos-delay="300">					
					<h5><li class="fw-bold"> Ish haqi (so'mdan)  </li>	</h5>
				  </div>

				  <div class="col" data-aos="fade-up" data-aos-delay="300">					
					<h5><li class="fw-bold">Ariza holati
								
				  </li>	</h5>
				  </div>
				 
				  <div class="col" data-aos="fade-up" data-aos-delay="150">
					<div class="col">
						
						</div>					
				</div>					  
				</p>
			</div>

			
			@foreach ($vacans as $vac)
			<div class="row content">
				<p>
				<div class="col-5" data-aos="fade-up" data-aos-delay="150">
				<ul>
					<li class=""><i class="ri-check-double-line"></i> {{$vac->staff}} </li>					
				</ul>				
				</div>
				<div class="col" data-aos="fade-up" data-aos-delay="300">					
					<div class="text-center">  {{$vac->salarystaff}}  </div>
				  </div>

				  <div class="col" data-aos="fade-up" data-aos-delay="300">					
					 @if ( $vac->status == true ) <div class="text-dark">Ariza topshirilgan </div>  @else
						<div class=""> Mavjud emas  @endif </div>
				  </div>
				 
				  <div class="col" data-aos="fade-up" data-aos-delay="150">
					@if ( $vac->status == false )<div class="col"> <a href="{{ route('respon', ['id' => $vac]) }}" class="link">
						Ariza topshirish</a> 
						</div>
						@endif							
				</div>					  
				</p>
			</div>
		
			@endforeach	
			

			</div>
		</section>

			
	</div>
	
@endsection	 
		

	