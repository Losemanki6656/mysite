@extends('layouts.testlayout')

@section('headertest')

<script>
  function noBack() {
    window.history.forward();
}
</script>

      <script>
        function incTimer() {
            var currentMinutes = Math.floor(totalSecs / 60);
            var currentSeconds = totalSecs % 60;
            if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
            if(currentMinutes <= 9) currentMinutes = "0" + currentMinutes;
            totalSecs++;
            $("#timer").text(currentMinutes + ":" + currentSeconds);
            setTimeout('incTimer()', 1000);
            if(currentMinutes == 15) document.getElementById('finish').click();
          }

            totalSecs = 0;

            $(document).ready(function() {
                $("#start").click(function() {
                    incTimer();
                });
            });
      </script>

  <div class="row text-center"> 
    <div class="col fw-bold text-primary">Vaqt:</div>   
            <div class="col-9 fw-bold">              
               Belgilangan testlar:
              </div>
    <div class="col fw-bold text-primary">Variant</div>
  </div>


      <div class="row text-center"> 
        <div id="timer" class="col fw-bold text-danger">15-minut</div>   
                <div class="col-9" id="buttons_top">                      
                                    <button type="button" id="bt1" class="btn btn-outline-primary">1</button>             
                                    <button type="button" class="btn btn-outline-primary disabled">2</button>             
                                    <button type="button" class="btn btn-outline-primary disabled">3</button>               
                                    <button type="button" class="btn btn-outline-primary disabled">4</button>   
                                    <button type="button" class="btn btn-outline-primary disabled">5</button>     
                                    <button type="button" class="btn btn-outline-primary disabled">6</button>
                                    <button type="button" class="btn btn-outline-primary disabled">7</button>       
                                    <button type="button" class="btn btn-outline-primary disabled">8</button>      
                                    <button type="button" class="btn btn-outline-primary disabled">9</button>           
                                    <button type="button" class="btn btn-outline-primary disabled">10</button>         
                                    <button type="button" class="btn btn-outline-primary disabled">11</button>            
                                    <button type="button" class="btn btn-outline-primary disabled">12</button>
                                    <button type="button" class="btn btn-outline-primary disabled">13</button>            
                                    <button type="button" class="btn btn-outline-primary disabled">14</button>          
                                    <button type="button" class="btn btn-outline-primary disabled">15</button>            
                                    <button type="button" class="btn btn-outline-primary disabled">16</button>            
                                    <button type="button" class="btn btn-outline-primary disabled">17</button>               
                                    <button type="button" class="btn btn-outline-primary disabled">18</button>
                                    <button type="button" class="btn btn-outline-primary disabled">19</button>              
                                    <button type="button" class="btn btn-outline-primary disabled">20</button>
                  </div>
        <div class="col fw-bold">0/15</div>
      </div>

</div>

@endsection

@section('glavmenu')

        <script>
          $(window).load(function(){        
          $('#myModal').modal('show');
            }); 
        </script>

        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
				  	<div class="modal-content">
					    <div class="modal-header">
				    		<h5 class="modal-title text-center fw-bold" id="exampleModalLabel">Testni yechish shartlari:</h5>
				         	</div>
				          	<div class="modal-body">									
							      	 <section id="about" class="about">
                        <div class="container">
                        <div class="row content">                         
                          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                          <ul>                   
                            <li><i class="ri-check-double-line"></i> Test savollari soni - 15 ta </li>         
                            <li><i class="ri-check-double-line"></i> Vaqt - 15 minut </li>               
                          </ul>
                          </div>  
                          <div class="section-title fw-bold" data-aos="fade-up">
                            Quyidagi xolatlarda arizangiz qabul qilinmaydi:
                          </div> 
                          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                            <ul>                   
                              <li><i class="ri-check-double-line"></i>Testni yakunlamasdan testdan chiqb ketishga, testni takror yechishga, test sahifasini yangilashga harakat qilinsa!</li>             
                            </ul>
                            </div>                        
                        </div>
                        </div>
                      </section>
								      <div class="modal-footer">
                      <button type="button" id="start" class="btn btn-secondary" data-bs-dismiss="modal">Testni boshlash</button>
								     </div>
				          	</div>
				  	</div>
			  	</div>
        </div>


    @if (isset($answer_count))
        <div class="alert alert-success">
          {{ $answer_count }}
        </div>
    @endif

 
      
    <section id="about" class="about">
    <form action="{{ route('questest.check') }}" method="post">
      @csrf
        <input type="hidden" name="idvacancies" value="{{ $idvacancies }}">
        <input type="hidden" name="state_id" value="{{ session('state_id') }}">
      <p>
          @foreach ($questests as $ques1)
            
              <div class="container">
                  <div class="card border-secondary mb-3" data-aos="fade-up">
                    <ul class="fw-bold">
                      <div class="container font-weight-bold">                     
                        {{$loop->index + 1}}  {{ $ques1->question }}   
                      </div>    
                    </ul>                   

                    <p>
                      <div class="container">
                        <div class="container">
                          <div class="container">
                            <div class="card border-light mb-3">      
                              <div class="container">
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[{{ $ques1->id }}]" value="a" id="1">
                                    <label class="form-check-label1" for="flexRadioDefault1{{$ques1->id}}">
                                      a) {{ $ques1->a_ans }}
                                    </label>
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[{{ $ques1->id }}]" value="b" id="flexRadioDefault2{{$ques1->id}}">
                                    <label class="form-check-label2" for="flexRadioDefault2{{$ques1->id}}">
                                    b) {{ $ques1->b_ans }}
                                    </label>
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[{{ $ques1->id }}]" value="c" id="flexRadioDefault3{{$ques1->id}}">
                                    <label class="form-check-label3" for="flexRadioDefault3{{$ques1->id}}">
                                    c) {{ $ques1->c_ans }}
                                    </label>
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[{{ $ques1->id }}]" value="d" id="flexRadioDefault4{{$ques1->id}}">
                                    <label class="form-check-label4" for="flexRadioDefault4{{$ques1->id}}">
                                    d) {{ $ques1->d_ans }}
                                    </label>
                                </div>

                              </div> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </p>
                </div>
                  
              </div>

          @endforeach
      </p>

    

    
          <div class="text-center">
            <button type="submit" id="finish" class="btn btn-success" data-aos="fade-up">Testni yakunlash</button>
          </div>
          
  </form>
    </section>
@endsection

