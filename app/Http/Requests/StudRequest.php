<?php

namespace Oasis\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
      return [
        'first_name'  => 'requred|max:100',
        'middle_name' => 'required',
        'last_name'   => 'required',
        'national_id' => 'required',
        'gender'      => 'required',
        'dob'         => 'required',
        'reg_no'      => 'required',
        'course'      => 'required',
        'department'  => 'required',
        'email'       => 'required',
        'mobile'      => 'required',
        'postal_address'=>'required',
        'next_of_kin' => 'required',
        'next_of_kin_contact'=.'required',
        'guardian'    => 'required',
        'image'       => 'image|max:2048'
      ];
    }
    public function data()
    {
        $data = [
            'first_name'    => $this->get('first_name'),
            'middle_name'   => $this->get('middle_name'),
            'last_name'     => $this->get('last_name'),
            'username' => str_slug($this->get('first_name')),
            'national_id'   => $this->get('national_id'),
            'gender'        => $this->get('gender'),
            'dob'           => $this->get('dob'),
            'reg_no'        => $this->get('reg_no'),
            'course'        => $this->get('course'),
            'department'    => $this->get('department'),
            'email'         => $this->get('email'),
            'mobile'        => $this->get('mobile'),
            'postal_address'=> $this->get('postal_address'),
            'next_of_kin'   => $this->get('next_of_kin'),
            'next_of_kin_contact'=> $this->get('next_of_kin_contact'),
            'guardian'      => $this->get('guardian')
        ];

        return $data;
    }
}
