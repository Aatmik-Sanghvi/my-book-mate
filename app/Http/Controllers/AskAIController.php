<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;


class AskAIController extends Controller
{
    public function getAskAI()
    {
        return view('askAI');
    }

    public function postAskAi(Request $request)
    {
        $response = Http::withToken(config('services.openai.openai_secret'))->post(
            'https://models.inference.ai.azure.com/chat/completions',
            [
                "model" => "gpt-4o",
                "temperature" => 1,
                "max_tokens" => 4096,
                "messages" => [
                    [
                        "role" => "system",
                        "content" => "You are a books assistant. Recommend books to the user based on their taste. A structured table format in JSON with 5 best books, with 'book_name' and 'summary' as keys for each book. Just provide the response in JSON format. Don't provide any text other than that response, don't provide ```json ```"
                    ],
                    [
                        "role" => "user",
                        "content" => $request->userAskMessage
                    ]
                ]
            ]
        )->json();
        $rawContent = $response['choices'][0]['message']['content'];
        $decodedContent = json_decode($rawContent, true);

        $booksArray = [];
        if (is_array($decodedContent)) {
            foreach ($decodedContent as $book) {
                // Log::info($book['book_name']);
                // Log::info($book['summary']);
                // array_push($books,$book['book_name']);
                // array_push($summary,$book['summary']);
                $booksArray[] = [
                    'book_name' => $book['book_name'],
                    'summary' => $book['summary'],
                ];
            }
            // Log::info($books);
            // Log::info($summary);
        } else {
            Log::error('Failed to decode JSON content: ' . $rawContent);
        }
        return response($booksArray);
        // return response($response['choices'][0]['message']['content']);
        // return response()->json($lines);
    }
}
