<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
    //

    public function severity()
    {
        return $this->belongsTo('App\Severity');
    }
}
