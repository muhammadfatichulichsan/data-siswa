<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable=[
    	'nama',
    	'gambar',
    	'kelas',
    	'jurusan',
    	'user_id'
    ];
}
