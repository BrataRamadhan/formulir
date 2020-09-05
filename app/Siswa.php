<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswa';
    //
    protected $fillable = [
        'name', 'email', 'number', 'jurusan', 'gender', 'hoby', 'alamat', 'tanggal',
        ];

        public function user(){
            return $this->belongsTo(User::class, 'id_data', 'id');
        }
}
