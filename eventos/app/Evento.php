<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;

class Evento extends Model
{

    use Authenticatable, CanResetPassword;

    protected $table = 'eventos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fecha_inicio','fecha_fin','descripcion','imagen'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function usuarios() {

        return $this->belongsToMany('App\Usuario')->withPivot('cod_barras','descripcion')->withTimestamps();
    }

    public static function buscar($filtro, $campo, $orden){
        return DB::table('eventos')->select('*')->where($filtro, 'like', '%'.$campo.'%')->orderby($filtro, $orden)->get();
        
    }

    public function entradas() {

        return $this->hasMany('App\Entrada');
    }
}
