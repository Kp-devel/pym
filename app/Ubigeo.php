<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Ubigeo extends Model
{
    public static function departamentos()
    {
        return DB::select(DB::raw("select ubi_dep_id as id, ubi_dep_dep as dep from ubigeo_departamento where ubi_dep_est=0"));
    }

    public static function provincias($id)
    {
        return DB::select(DB::raw("select ubi_prov_id as id, ubi_prov_prov as prov from ubigeo_provincia where ubi_prov_est=0 and ubi_dep_id_FK=:id"),array("id"=>$id));
    }

    public static function distritos($id)
    {
        return DB::select(DB::raw("select ubi_dist_id as id, ubi_dist_dist as dist from ubigeo_distrito where ubi_dist_est=0 and ubi_prov_id_FK=:id"),array("id"=>$id));
    }
}
