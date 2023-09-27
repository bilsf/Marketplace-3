<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\View\View;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('user.index');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        return view('adminHome');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome(): View
    {
        return view('managerHome');
    }

    public function cart(): View
    {
        return view('user.cart');
    }

    public function product():View
    {
        return view('user.product-list');
    }

    public function product_detail():View
    {
        return view('user.product-detail');
    }

    public function checkout():View
    {
        return view('user.checkout');
    }

    public function my():View
    {
        return view('user.my-account');
    }

    public function wishlist():View
    {
        return view('user.wishlist');
    }
}