<?php

namespace App\Http\Controllers;

use App\CsvReader;
use App\Homeowners;
use App\Http\Requests\ProcessCsvRequest;

class ProcessCsvController extends Controller
{
    public function __invoke(ProcessCsvRequest $request)
    {
        $lines = CsvReader::forFilePath($request->file('csv_file')->getRealPath())
            ->getLines();

        $people = [];
        foreach ($lines as $line) {
            $line = new Homeowners($line);

            $people = array_merge($people, $line->convertToPeople());
        }

        return view('csv-results', [
            'people' => $people,
        ]);
    }
}
