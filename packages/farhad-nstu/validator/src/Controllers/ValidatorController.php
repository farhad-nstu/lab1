<?php
namespace FarhadNstu\Validator\Controllers;

use Illuminate\Http\Request;
use FarhadNstu\Validator\Validator;

class ValidatorController
{
    public function __invoke(Validator $inspire) {
        $quote = $inspire->justDoIt();

        return $quote;
    }
}
