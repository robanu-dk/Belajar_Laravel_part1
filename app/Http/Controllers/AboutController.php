<?php

namespace App\Http\Controllers;
use App\Models\Stakeholder;

class AboutController
{

    public function index()
    {
        return view('about', [
            'title' => 'About Us',
        ],Stakeholder::sekilas_info());
    }

    public function aboutOrganization()
    {
        return view('about.tentangorganisasi',[
            'title' => 'Tentang Organisasi'
        ],Stakeholder::stakeholder());
    }

    public function aboutJimmonshop()
    {
        return view('about.tentangjimmonshop',[
            'title' => 'Tentang jimmonshop'
        ],Stakeholder::jimmonshop());
    }

    public function customer_services()
    {
        return view('about.cs',[
            'title' => 'Customer Services'
        ],Stakeholder::cs());
    }

}
