<?php

namespace App\Http\Controllers;

use App\Models\AskForm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\AskFormRequest;

class AskFormController extends Controller
{
    public function submit(AskFormRequest $request){
        $question = new AskForm();
        $question->name = $request->input('name');
        $question->city = $request->input('city');
        $question->email = $request->input('email');
        $question->age = $request->input('age');
        $question->message = $request->input('message');
        $question->created_at = $request->input(Carbon::now());

        $question->save();

        return redirect()->route('thanks');
    }
}
