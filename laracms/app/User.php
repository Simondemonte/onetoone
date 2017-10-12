<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

public function getNameAttribute($value){
	//Format nama function -->get + NAMAKOLOM + Attribute
	//Kita akan mengakes kolom "nama" dari tabel users
	//Sehingga NAMAKOLOM = Nama (Diawali dengan huruf besar)
	
	return strtoupper($value);
}
public function setNameAttribute($value){
	//Format Nama function -->set + NAMAKOLOM + Attribute
	// Kita akan mengakes kolom "nama" dari tabel users	
	// Sehingga NAMAKOLOM = Nama (Diawali dengan huruf besar)
	
	$this->attributes['name'] = strtoupper($value);
	}
}