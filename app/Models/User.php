<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'access_auth',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    
    public function post_entry(){

        //PostEntryとのリレーション
        return $this->hasMauy('App\Models\PostEntry');
    }
    
    //多対多のリレーションを書く
    public function likes(){
        return $this->belongsToMany('app/Models/PostEntry','likes','user_id','post_id')->withTimestamps();
    }

    //この投稿に対して既にいいねしたか判別
    public function isLike($postId){
        return $this->likes()->where('post_id',$postId)->exists();
    }

    //isLikeを使って、既にlikeしたか確認した後、いいねする(重複防止)
    public function like($postId){
        if($this->isLike($postId)){
            //既にいいねされてたら何もしない
        }else{
            $this->likes()->attach($postId);
        }
    }
    
    //isLikeを使って、既にlikeしたか確認した後、もししていたら削除する
    public function unlike($postId){
        if($this->isLike($postId)){
            //もし既にいいねされてたら削除する
            $this->likes()->detach($postId);
        }else{

        }
    }
}
