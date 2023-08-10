<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Auth;

class Event extends Model
{
    use HasFactory;

    public function scopeAvailable($query)
    {
        return $query
            ->whereRaw('start_at > ?', Carbon::now()->format('Y-m-d H:i:s'));
    }

    public function scopeBoughtOne($query)
    {
        $boughtOne = Auth::user()->subscribedEvents()->pluck('events.id')->toArray();
        return $query
            ->whereNotIn('id', $boughtOne);
    }

    public function tickets() :MorphMany
    {
        return $this->morphMany(Ticket::class, 'ticketable');
    }

    public function getUserTicket()
    {
        return $this->tickets()->where('user_id', Auth::user()->id)->first();
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }

    protected $fillable = [
        'title',
        'description',
        'poster',
        'start_at',
        'end_at',
        'creator_id',
        'price',
        'highlight',
        'location'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
        'price' => 'double'
    ];
    
}
