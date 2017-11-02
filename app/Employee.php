<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    protected $fillable = ['branch_id', 'title_id', 'name'];

    public function title()
    {
    	return $this->belongsTo(Title::class); 
    }

    public function branch()
    {
    	return $this->belongsTo(Branch::class); 
    }

}
