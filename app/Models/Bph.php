<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bph extends Model
{
    use HasFactory;

    protected $table = 'bph';

    protected $fillable =
    [
        'username',
        'dinas'
    ];

    public $timestamps = false;
}
