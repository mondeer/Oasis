<?php

namespace Oasis\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaff extends StoreStaff
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
