<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'uuid';
    protected $keyType = 'uuid';

    protected $table = 'lucky_users';

    public function page(): HasOne
    {
        return $this->hasOne(UserPage::class, 'user_uuid', 'uuid');
    }

    public function userGames(): HasMany
    {
        return $this->hasMany(UserGame::class, 'user_uuid', 'uuid');
    }
}
