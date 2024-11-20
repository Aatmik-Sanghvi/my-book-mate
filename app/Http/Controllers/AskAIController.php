<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AskAIController extends Controller
{
    public function getAskAI(){
        return view('askAI');
    }

    public function postAskAi(Request $request){
        $response = Http::withToken(config('services.openai.openai_secret'))->post('https://models.inference.ai.azure.com/chat/completions',
        [
            "model"=> "gpt-4o",
            "temperature"=> 1,
            "max_tokens"=> 4096,
            "messages"=> [
                [
                   "role"=> "system",
                    "content"=> "You are a books assistant. Recommending book to the user for their taste. Suggest book name and summary in brief in 1 line."
                ],
                [
                   "role"=> "user",
                    "content"=> $request->userAskMessage
                ]
            ]
        ])->json();
        return response()->json($response['choices'][0]['message']['content']);
    }
}
