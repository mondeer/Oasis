<?php

namespace Oasis\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudent extends StoreStudent
{

    public function authorize()
    {
        return true;
    }
}
