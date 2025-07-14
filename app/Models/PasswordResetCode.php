<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordResetCode extends Model
{
    public $timestamps = false; // Solo tienes created_at manual
    protected $fillable = ['email', 'code', 'created_at'];
}
