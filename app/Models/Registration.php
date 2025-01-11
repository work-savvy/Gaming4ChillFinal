<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{

    protected $fillable = [
        'user_id',
        'tournament_id',
        'form_data',
        'form_unique_id',
        'payment_status'
    ];

    protected $casts = [
        'form_data' => 'array'
    ];


    public function tournament() : BelongsTo
    {
        return $this->belongsTo(Tournament::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
