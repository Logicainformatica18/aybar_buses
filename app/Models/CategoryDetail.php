<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDetail extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'category_id','topic_id'];
    public function category()    
    {

        return $this->hasOne('App\Models\Category', 'id','category_id');
    }
    public function topic()    
    {

        return $this->hasMany('App\Models\Topic', 'id','topic_id');
    }
}
