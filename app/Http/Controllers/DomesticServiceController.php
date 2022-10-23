<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DomesticServiceController extends Controller
{
    public function __construct() {
        $this->middleware('auth');

        $this->module = new \stdClass();
        $this->module->contentHeader = 'บริการภายในประเทศ';

        $this->data['data'] = $this->module;
    }

    public function index() {
        return view('domestic.index', $this->data);
    }
}
