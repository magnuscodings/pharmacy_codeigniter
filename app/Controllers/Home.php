<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function admin_navigation()
    {
        return view('admin_navigation');
    }

    public function admin_product()
    {
        return view('product');
    }

    public function admin_sales()
    {
        return view('sales');
    }

    public function admin_sales_report()
    {
        return view('sales_report');
    }

    public function admin_user_management()
    {
        return view('user_management');
    }
}
