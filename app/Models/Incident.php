<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = ['title','description', 'incident_reported_at', 'incident_closed_at', 'severity', 'war_room_opened_at', 'user_id', 'status'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = ['incident_reported_at' => 'datetime', 'war_room_opened_at'=>'datetime', 'incident_closed_at'=>'datetime'];

}
