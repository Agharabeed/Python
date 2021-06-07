<?php

namespace App\Http\Controllers;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function nlp($tokenize){
        $tr = new GoogleTranslate('sd'); // Translates into English
        $result = $tr->translate($tokenize);
    
        $response = [
            'english' => $tokenize,
            'sindhi'  => $result,
            'sindhi_words' => explode(" ",$result),
            // 'sindhi_characters' => strlen($sindhi)
        ];
    
        return json_encode($response);
    }
}
