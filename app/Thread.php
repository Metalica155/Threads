<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = [
        "title", "body"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
