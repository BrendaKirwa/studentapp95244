<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function fee()
    {
        return $this->hasOne('App\fee');
    }
}
