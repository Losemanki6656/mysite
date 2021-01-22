@extends('layouts.botstraplayout')

@section('glavmenu')
    
<div class=" row">
    <p>
        <p>
            <div class=" conatiner"> 
                @if (isset($answer_count))
                <div class="alert alert-success">
                  {{ $answer_count }} 
                </div>
                @endif
            </div>
        </p>
        
    </p>
</div>


@endsection	 