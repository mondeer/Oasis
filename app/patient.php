<?php

namespace Oasis;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable = [
        'name',
        'username',
        'address',
        'phone',
        'age',
        'gender'
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

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
