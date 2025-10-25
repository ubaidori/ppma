<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = 
    [
        'slug',
        'bride',
        'groom',
        'message'
    ];
    public function getTitleAttribute(){ return $this->bride . ' & ' . $this->groom; }
}
