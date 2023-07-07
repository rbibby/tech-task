<?php

namespace App\Http\Controllers;

class UploadCsvController extends Controller
{
    public function __invoke()
    {
        return view('upload-csv');
    }
}
