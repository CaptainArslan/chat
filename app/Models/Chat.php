<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_group', 'user_id', 'type', 'logo', 'status'];


    // ================== Chat Types ==================
    public const TYPE_PRIVATE = 'private';
    public const TYPE_GROUP = 'group';



    // ================== Relations ==================
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'chat_participants')
            ->withTimestamps();
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function getLastTenMessages()
    {
        return $this->messages()->latest()->limit(10)->get();
    }

    public function getUnReadMessagesCount()
    {
        return $this->messages()->where('is_read', false)->count();
    }


    // ================== Scopes ==================


    public function scopePrivate($query)
    {
        return $query->where('type', self::TYPE_PRIVATE);
    }

    // ================== Methods ==================
    public function getlastMessage()
    {
        $message = $this->messages()->latest()->first();
        $messages = $message->message;
        if($message->type != 'text'){
            $messages = $message->type;
        }
        return $messages;
    }


    public function getlastMessageTime(){
        return $this->messages()->latest()->first()->created_at->diffForHumans();
    }
}
