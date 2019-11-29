<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo='/admin/index/index';

    protected function guard()
    {
        return Auth::guard('admin');
    }
}