<?php

namespace Database\Seeders;

use App\Models\Negara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class NegaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        negara::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'WNI', 'WNA'
        ];

        foreach ($data as $value) {
            negara::insert([
                'status' => $value
            ]);
        }
    }
}