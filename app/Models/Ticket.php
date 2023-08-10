<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\User;

class Ticket extends Model
{
    use HasFactory;

    public function ticketable()
    {
        // return $this->belongsTo(Event::class)->where('model_type', '=', static::class);
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'ticketable_id',
        'ticketable_type',
        'joined_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'joined_at' => 'datetime'
    ];
    
}
