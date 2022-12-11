<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
  protected $guarded = [];
protected $table = "result";

public function peserta()
{
    return $this->hasOne(siswa::class, 'id_siswa', 'nis');
}
}
