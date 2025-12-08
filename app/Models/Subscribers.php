<?php

namespace App\Models;

use Database\Factories\SubscribersFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{
    /** @use HasFactory<SubscribersFactory> */
    use HasFactory;

    protected $table = 'subscribers';
    protected $guarded = [];
}
