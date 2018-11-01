<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = ['nip', 'n_pegawai', 'telp', 'alamat', 'unitkerja_id', 'opd_id', 'user_id'];

    public function unitkerja()
    {
        return belongsTo(unitkerja::class);
    }
    public function opd()
    {
        return belongsTo(opd::class);
    }
}
