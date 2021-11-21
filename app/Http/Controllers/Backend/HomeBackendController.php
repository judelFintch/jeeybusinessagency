<?php
declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeBackendController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('admins.home');
    }
}
