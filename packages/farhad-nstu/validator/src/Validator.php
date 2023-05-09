<?php

namespace FarhadNstu\Validator;

use Illuminate\Support\Facades\Http;

class Validator {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}
