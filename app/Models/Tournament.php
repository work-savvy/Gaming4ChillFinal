<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tournament extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'type',
        'is_active',
        'form_view',
        'entry_fee',
        'start_date',
        'end_date',
        'prize_pool',
        'prize_pool2',
        'prize_pool3',
        'secret_code',
        'first_place_registration_id',
        'second_place_registration_id',
        'third_place_registration_id',
    ];


    public function firstPlaceRegistration()
    {
        return $this->belongsTo(Registration::class, 'first_place_registration_id');
    }

    public function secondPlaceRegistration()
    {
        return $this->belongsTo(Registration::class, 'second_place_registration_id');
    }

    public function thirdPlaceRegistration()
    {
        return $this->belongsTo(Registration::class, 'third_place_registration_id');
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }


    public function startDate(): Attribute
    {
        return Attribute::make(
            set: fn($value) => \Carbon\Carbon::parse($value)->format('F j, Y h:i') // Converts to "January 8, 2025"
        );
    }

    public function endDate(): Attribute
    {
        return Attribute::make(
            set: fn($value) => \Carbon\Carbon::parse($value)->format('F j, Y h:i') // Converts to "January 8, 2025"
        );
    }
}
