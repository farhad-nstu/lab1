<?php

namespace FarhadNstu\Validator;

use Illuminate\Support\Facades\Http;

class Validator {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }

    public static function make($request, $attributes) {
        $invalidList = [];
        foreach($attributes as $key => $attribute) {
            if(! in_array($key, $request)) {
                $invalidList[$key] = $key." is required";
                // array_push($invalidList, $key." is required");
                // return false;
            }
        }
        if (count($invalidList) > 0) {
            fails(true);
        }
        return $invalidList;
    }

    public function fails($val=false) {

    }
}
