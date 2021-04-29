<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = "notifikasi";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'notif'];
}
