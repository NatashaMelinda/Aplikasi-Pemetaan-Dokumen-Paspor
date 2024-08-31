<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $table = 'dokumen';
    
    protected $fillable = ['id','nomor_permohonan','nomor_paspor','nomor_ktp','nama','tempat_lahir','tanggal_lahir','penyimpanan','retensi_arsip','tanggal_input'];
    // protected $guarded = [];

    public static function createwna($data)
    {
        // Implementasi logika pembuatan dokumenwna di sini
        // Contoh:
        return self::create($data);
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}