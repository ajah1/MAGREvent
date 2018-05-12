<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;

class Reserva extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'reservas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','id_evento', 'id_cliente', 'descripcion', 'cod_barras'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function borrarElemento($id, $id_evento, $id_cliente) {

        $reserva = DB::table('reservas')->select('*')
        ->where('id', $id)
        ->where('id_evento',$id_evento)
        ->where('id_cliente',$id_cliente)->delete();

    }

    public static function buscar($filtro, $campo, $orden){
        return DB::table('reservas')->select('*')->where($filtro, 'like', '%'.$campo.'%')->orderby($filtro, $orden)->get();
        
    }
}
