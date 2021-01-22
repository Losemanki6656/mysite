@extends('layouts.botstraplayout')

@section('glavmenu')
    
<div class=" row">
    <p>
        <p>
            <div class=" conatiner"> 
                <div class="alert alert-success text-center">
                 <h2> Xurmatli {{$state->first_name}} {{$state->last_name}} {{$state->middle_name}}  </h2>
                </div>
                <p>
                    <div class="text-center">
                        <h2> Sizning arizangiz qabul qilindi! Tez orada siz bilan bog'lanishadi! </h2>
                       </div>
                </p>
            </div>
        </p>
        
    </p>
</div>


@endsection	 