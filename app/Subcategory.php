<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name', 'category_id'
    ];

     public function brand($value='')
    {
    	return $this->belongsTo('App\Brand');
    }

    public function subcategory($value='')
    {
    	return $this->belongsTo('App\Subcategory');
    }

    public function category($value='')
    {
        return $this->belongsTo('App\Category');
    }
}
