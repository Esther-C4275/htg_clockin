<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

#[Fillable(['first_name', 'last_name', 'email', 'password', 'phone', 'position', 'gender', 'date_of_birth', 'country', 'state', 'address','department','company', 'is_admin','avatar', 'uuid'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

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

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn() => "$this->first_name $this->last_name"
        );
    }

    public function htg(): HasMany
    {
        return $this->hasMany(HtgModel::class);
    }

//     public function getEmployeeCardIdAttribute(): string
// {
//     $dateSource = $this->created_at ? \Carbon\Carbon::parse($this->created_at) : now();
//     $year = $dateSource->format('Y');
//     $paddedId = str_pad($this->id, 3, '0', STR_PAD_LEFT);

//     return "HTG-{$year}-{$paddedId}";
// }

protected static function booted(): void
{
    static::creating(function ($user) {
        if (empty($user->uuid)) {
            $user->uuid = (string) Str::uuid();
        }
    });
}

public function getRouteKeyName(): string
{
    return 'uuid';
}
}
