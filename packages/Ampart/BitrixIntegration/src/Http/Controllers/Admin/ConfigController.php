<?php

namespace Ampart\BitrixIntegration\Http\Controllers\Admin;

use Webkul\Admin\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index()
    {
        return view('ampart.bitrix::config.index');
    }
}