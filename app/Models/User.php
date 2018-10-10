<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;
//use willvincent\Rateable\Rateable;

class User extends Authenticatable
{
//    use Rateable;
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'role_id',
        'city_id',
        'email',
        'birthday',
        'provider_id',
        'address',
        'phone_number',
        'block_id',
        'password',
    ];

    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function local()
    {
        return $this->belongsTo(City::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function responds()
    {
        return $this->hasMany(Respond::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

//    public function scopeSearch($query, $key)
//    {
//        return $query->where('name', 'ilike', '%' . $key . '%')->get()->toArray();
//    }
//
//    public function scopeRemove($query, $id)
//    {
//        return $query->where('id', $id)->update(['remove' => 1]);
//    }
//
//    public function scopeManager($query, $request)
//    {
//        return $query->where('name', 'ilike', '%' . $request . '%')
//            ->where('level_id', '<>', config('page.user.role.member'));
//    }
//
//    public function scopeMember($query, $request)
//    {
//        return $query->where('name', 'like', '%' . $request . '%')
//            ->where('level_id', config('page.user.role.member'));
//    }
}

