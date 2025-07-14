<?php
// app/Models/UserSession.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSession extends Model
{
    protected $fillable = [
        'user_id', 
        'session_token', 
        'ip_address', 
        'user_agent'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
