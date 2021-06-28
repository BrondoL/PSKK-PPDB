<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Administrator - SMA Kebangsaan',
            'head'  => 'Dashboard'
        ];
        return view('admin/v_dashboard/index', $data);
    }
}
