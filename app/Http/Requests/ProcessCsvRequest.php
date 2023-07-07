<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class ProcessCsvRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'csv_file' => [
                'required',
                File::types('csv'),
            ],
        ];
    }
}
