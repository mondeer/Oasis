<?php

namespace Oasis;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = [
    'first_name',
    'middle_name',
    'last_name',
    'national_id',
    'gender',
    'dob',
    'reg_no',
    'course',
    'department',
    'email',
    'mobile',
    'postal_address',
    'next_of_kin',
    'next_of_kin_contact',
    'guardian'
  ];

  public function image()
  {
      return $this->morphOne(Image::class, 'imageable');
  }

  public function delete(array $options = [])
  {
      if ($this->image)
      {
          $this->image->delete();
      }

      return parent::delete($options);
  }
}
