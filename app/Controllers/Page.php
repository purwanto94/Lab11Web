<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman about',
            'content' => 'ini adalah halaman about yang baru di tuliskan untuk menjelaskan isi atau konten pada halaman ini'
        ]);
    }

    public function contact()
    {
        echo "ini halaman contact";
    }

    public function faqs()
    {
        echo "ini halaman FAQ";
    }

    public function tos()
    {
        echo "ini halaman term of services";
    }
}