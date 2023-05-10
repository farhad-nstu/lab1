<?php
namespace FarhadNstu\Validator\Controllers;

use Illuminate\Http\Request;
use FarhadNstu\Validator\Validator;

class ValidatorController
{
    public function __invoke(Validator $validator) {
        $results = $validator->make(['name','age'], [
            'name' => 'required',
            'email' => 'required',
            'dob' => 'required'
        ]);
        if(count($results) > 0) {
            return $results; 
        }
        // $quote = $validator->justDoIt();
        // return view('inspire::index', compact('results'));
    }
}
