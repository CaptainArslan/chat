<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ======================================================================
    // Relationships
    // ======================================================================
    public function chats(): BelongsToMany
    {
        return $this->belongsToMany(Chat::class, 'chat_participants')
            ->withTimestamps();
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }


    // ======================================================================
    // Accessors
    // ======================================================================

    public function getAvatarAttribute($value): string
    {
        return $value ?? 'https://www.gravatar.com/avatar/' . md5(strtolower($this->email)) . '?d=mp';
    }

    public function getActiveAttribute($value): bool
    {
        return (bool) $value;
    }


    // ======================================================================
    // Scopes
    // ======================================================================
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', false);
    }

    public function scopeSearch(Builder $query, $search): Builder
    {
        return $query->where('name', 'like', "%{$search}%")
            ->orWhere('email', 'like', "%{$search}%");
    }
}
