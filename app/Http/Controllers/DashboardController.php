<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $totalClients = $this->getTotalClients();
        $clients = Client::all();

        return view('dashboard', compact('totalClients', 'clients'));
    }


    public function getTotalClients()
    {
        $totalClients = Client::count();

        return $totalClients;
    }
}
