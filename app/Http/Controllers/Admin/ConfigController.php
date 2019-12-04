<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Config;

class ConfigController extends Controller
{
    public function edit()
    {
        return view('admin.config.edit');
    }

    public function test()
    {

    }
}