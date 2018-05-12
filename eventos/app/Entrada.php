<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Entrada extends Model
{

    use Authenticatable, CanResetPassword;

    protected $table = 'entradas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','cod_evento','tipoEntrada','validacion','informacion'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function eventos() {

        return $this->belongsTo('App\Evento');
    }

    public static function buscar($filtro, $campo, $orden){
        return DB::table('entradas')->select('*')->where($filtro, 'like', '%'.$campo.'%')->orderby($filtro, $orden)->get();
        
    }

    public function tipos() {

        return $this->belongsTo('App\Tipo');
    }
}
