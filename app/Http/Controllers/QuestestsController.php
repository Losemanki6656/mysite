<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questests;
use App\State;

class QuestestsController extends Controller
{
    public function index($id)
    {
        $questests = Questests::where('idvacancies', $id)->get();
        
        return view('quiztest',[
            'questests'=> $questests,
            'idvacancies' => $id
        ]); 
    }
    public function check(Request $request)
    {
        $id = $request->idvacancies;
        $questests = Questests::where('idvacancies', $id)->get();
        $db_answer = $questests->pluck('answerques', 'id');
        $client_answer = $request->answers;
        

        $answer_count = 0;
        foreach ($db_answer as $index => $value) {
            if (isset($client_answer[$index]) && $client_answer[$index] == $value) $answer_count ++;
        }

        $state = State::find($request->state_id);
        if (is_null($state->ans_cout)) {
            $state->ans_cout = $answer_count;
            $state->save();
    
            return view('quiztest',[
                'answer_count' => $answer_count,
                'questests'=> $questests,
                'idvacancies' => $id
            ]);
        }

        return view('quiztest',[
            'answer_count' => 'ooo chumo qmashenniklik qmoqchi boldingmi blyat', 
            'questests'=> $questests,
            'idvacancies' => $id
        ]);
        
    }
}
