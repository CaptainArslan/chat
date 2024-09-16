<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['message', 'attachment_name', 'attachment', 'type', 'chat_id', 'user_id'];

    protected $appends = ['created_at_human'];

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function readBy()
    {
        return $this->belongsToMany(User::class, 'message_read_status')
            ->withTimestamps()->withPivot('read_at');
    }


    // ================== Accessors ==================
    public function getCreatedAtHumanAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getIsReadAttribute()
    {
        return $this->readBy()->where('user_id', auth()->id())->exists();
    }


}
