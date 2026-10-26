<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'items'=>'array'
    ];
    protected $fillable = [
    'title',
    'date',
    'city',
    'private',
    'description',
    'items',
    ];
    protected $dates=['date'];//usado para proteger o det. dado
    public function user(){
        return $this->belongsTo('App\models\User');
    }
}
