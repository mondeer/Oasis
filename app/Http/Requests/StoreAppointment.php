<?php

namespace Oasis\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointment extends FormRequest {

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'      => 'required|max:200',
            'address'   => 'required',
            'phone'     => 'required',
            'date'      => 'date|required',
            'time'      => 'required',
            'doctor_id' => 'required'
        ];
    }

    public function data()
    {
        $data = [
            'name'      => $this->get('name'),
            'address'   => $this->get('address'),
            'phone'     => $this->get('phone'),
            'date'      => $this->get('date'),
            'time'      => $this->get('time'),
            'doctor_id' => $this->get('doctor_id')
        ];

        return $data;
    }
}
