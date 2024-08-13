<?php

namespace App\Controllers;

class Waerebo extends BaseController
{
    public function index(): string
    {
        return view('waerebo');
    }
}
