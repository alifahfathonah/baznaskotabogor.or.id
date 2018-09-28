<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Bank extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'bank';
    protected $fillable = ['nama_bank','nomor_rekening','kategori', 'created_at', 'updated_at'];
    
}
