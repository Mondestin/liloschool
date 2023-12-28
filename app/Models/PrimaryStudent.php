<?php

namespace App\Models;

use \Database\Factories\PrimaryStudentsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryStudent extends Model
{
    use HasFactory;
    protected $casts = [
        'stDob'  => 'date:d-m-Y',
        'stDateJoin' => 'date:d-m-Y'
    ];
    
    // create new factory data
    protected static function newFactory()
    {
        return PrimaryStudentsFactory::new();
    }
}
