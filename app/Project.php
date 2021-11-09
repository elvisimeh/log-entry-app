<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'project_name'
    ];
    
    public function logs()
    {
        return $this->hasMany('App\Log');
    }

        
    //
}
