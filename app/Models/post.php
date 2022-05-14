<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable=[
    'title' ,  'content' , 'date_wirtten',
       'featured_images' , 'votes_up' , 'votes-down' ,
        'user_id' , 'category_id'
        ];
    public function author(){
        return $this->belongsTo( User::class , 'user_id' , 'id' );
    }
    public function comments(){
        return $this->hasMany( Comment::class );
    }
    public function category(){
        return $this->belongsTo( Category::class );
    }
}
