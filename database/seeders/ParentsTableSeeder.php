<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parents = [
             [
            'Civilité' => 'M',
            'Nom' => 'Anouar',
            'Prénom' => 'AROUI	',
            'Tél' => '0673391088',
            'Identifiant' => 'a.aroui',
            'created_at' => now(),
            'updated_at' => now()
            ],
             [
            'Civilité' => 'Mme',
            'Nom' => 'sara',
            'Prénom' => 'noukri	',
            'Tél' => '0661774955',
            'Identifiant' => 's.noukri',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'Civilité' => 'M',
            'Nom' => 'rachid',
            'Prénom' => 'aboukir	',
            'Tél' => '0641754889',
            'Identifiant' => 'r.aboukir',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'Civilité' => 'Mme',
            'Nom' => 'rachida',
            'Prénom' => 'taoussi	',
            'Tél' => '0625249571',
            'Identifiant' => 'r.taoussi',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'Civilité' => 'Mme',
            'Nom' => 'laila',
            'Prénom' => 'joumal	',
            'Tél' => '0639639177',
            'Identifiant' => 'l.joumal',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'Civilité' => 'M',
            'Nom' => 'said',
            'Prénom' => 'aouhar	',
            'Tél' => '0663501912',
            'Identifiant' => 's.aouhar',
            'created_at' => now(),
            'updated_at' => now()
            ],
        ];
    
        DB::table('parent_m_s')->insertOrIgnore($parents);

    }
}
