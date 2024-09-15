<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['message'];

    public function chat()
    {
        return $this->belongsTo(Chat::class);
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
}
