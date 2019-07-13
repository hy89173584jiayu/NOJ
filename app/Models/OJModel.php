<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Requests;
use Exception;

class OJModel extends Model
{
    protected $tableName='oj';

    public static function oid($ocode)
    {
        return DB::table('oj')->where(["ocode"=>$ocode])->first()["oid"];
    }

    public static function ocode($oid)
    {
        return self::basic($oid)["ocode"];
    }

    public static function basic($oid)
    {
        return DB::table('oj')->where(["oid"=>$oid])->first();
    }

    public static function insert($row)
    {
        return DB::table('oj')->insertGetId($row);
    }
}
