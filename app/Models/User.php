<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public $timestamps = false;
    protected $fillable = ['role_id', 'name', 'email', 'password', 'address', 'phone'];
}
