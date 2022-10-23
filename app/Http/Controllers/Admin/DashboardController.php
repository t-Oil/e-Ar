<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->module = new \stdClass();
        $this->module->contentHeader = 'dashboard';

        $this->data['data'] = $this->module;
    }

    public function index() {
        return view('admin.dashboard.index', $this->data);
    }
}
