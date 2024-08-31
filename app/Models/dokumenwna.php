<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumenwna extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $table = 'dokumenwna';
    
    protected $fillable = ['id','nomor_permohonan','nomor_paspor','nomor_ktp','nama','tempat_lahir','tanggal_lahir','penyimpanan','retensi_arsip','tanggal_input'];
    // protected $guarded = [];
}