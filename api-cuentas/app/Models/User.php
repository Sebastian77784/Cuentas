<?php
 
namespace App\Models;
 
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
 
class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;
 
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'img',
    ];
 
    protected $hidden = ['password', 'remember_token'];
 
    public function accounts() {
        return $this->hasMany(Account::class);
    }
 
    public function categories() {
        return $this->hasMany(Category::class);
    }
 
    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
 
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}