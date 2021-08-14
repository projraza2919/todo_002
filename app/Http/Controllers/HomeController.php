<?php  
namespace App\Http\Controllers;

use Illuminate\Http\Requests;

class HomeController extends Controller
{
    public function todo()
    {
        return view('todo');
    }
}
