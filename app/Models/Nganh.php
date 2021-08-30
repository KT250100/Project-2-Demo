<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nganh
{
    use HasFactory;
    static function getAll(){
        return DB::select("SELECT id,name FROM nganhhocs ORDER BY id DESC");
    }
    static function get($id){
        return DB::select("SELECT id,name FROM nganhhocs WHERE id='$id'");
    }
    static function save($name){
        return DB::insert("INSERT INTO nganhhocs VALUES(NULL,'$name')");
    }
    static function update($id,$name){
        $sql = "UPDATE nganhhocs SET name='$name' WHERE id='$id'";
        return DB::update($sql);
    }
    static function delete($id){
        return DB::delete("DELETE FROM nganhhocs WHERE id='$id'");
    }
}
