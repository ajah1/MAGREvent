<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['dni', 'name', 'apellidos', 'email', 'edad', 'direccion', 'tipo', 'username', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function buscar($filtro, $campo, $orden){
        return DB::table('users')->select('*')->where($filtro, 'like', '%' . $campo . '%')->orderby($filtro, $orden)->get();
        
    }

    public function eventos() {

        return $this->belongsToMany('App\Evento')->withPivot('cod_barras','descripcion')->withTimes();
    }
}
