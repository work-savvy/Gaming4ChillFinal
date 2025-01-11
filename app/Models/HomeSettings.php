<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSettings extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'channel_link',
        'instagram_link',
        'whatsapp_link',
        'embeded_video_link'

    ];
}
