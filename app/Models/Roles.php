<?php

namespace App\Models;

use Database\Factories\RolesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    /** @use HasFactory<RolesFactory> */
    use HasFactory;

    protected $table = 'roles';
    public $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
