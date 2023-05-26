<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElevesTableSeeder extends Seeder
{
    /**
     * Run the database seeds
     * @return void
     */ 
     public function run()
    {
        $eleves = [
            [
            'Matricule' => '4224',
            'Nom' => 'ZEROUAL',
            'Prénom' => 'Hiba	',
            'الاسم الشخصي' =>'هبة',
            'الاسم العائلي'=>'زروال',
            'Sexe' => 'Fille',
            'Email' => 'h.zeroual@institution-madania.com',
            'date_naissance' => '2013-12-03',
            'created_at' => now(),
            'updated_at' => now()
            ],
             [
            'Matricule' => '4249',
            'Nom' => 'BETOUCHE',
            'Prénom' => 'Inasse',
            'الاسم الشخصي' =>'ايناس',
            'الاسم العائلي'=>'بتوش',
            'Sexe' => 'Fille',
            'Email' => 'I.betouche@institution-madania.com',
            'date_naissance' => '2013-11-16',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4315',
            'Nom' => ' Safouane',
            'Prénom' => 'BOUFELOUSSEN',
            'الاسم الشخصي' =>'صفوان',
            'الاسم العائلي'=>'بوفلوسن',
            'Sexe' => 'Garçon',
            'Email' => 's.boufeloussen@institution-madania.com',
            'date_naissance' => '2014-09-08',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4240',
            'Nom' => 'EL HOURI',
            'Prénom' => 'Mohamed Reda',
            'الاسم الشخصي' =>'محمد رضى',
            'الاسم العائلي'=>'الحوري',
            'Sexe' => 'Garçon',
            'Email' => 'r.elhouri@institution-madania.com',
            'date_naissance' => '2013-12-07',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4262',
            'Nom' => 'FIKRI	',
            'Prénom' => 'Yasmine',
            'الاسم الشخصي' =>'ياسمين',
            'الاسم العائلي'=>'فكري',
            'Sexe' => 'Fille',
            'Email' => 'y.fikri@institution-madania.com',
            'date_naissance' => '2013-06-21',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4201',
            'Nom' => 'HALAL',
            'Prénom' => 'Arwa',
            'الاسم الشخصي' =>'أروى',
            'الاسم العائلي'=>'حلال',
            'Sexe' => 'Fille',
            'Email' => 'a.halal@institution-madania.com',
            'date_naissance' => '2013-06-27',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4193',
            'Nom' => 'KABBAJ	',
            'Prénom' => 'Rania',
            'الاسم الشخصي' =>'رانيا',
            'الاسم العائلي'=>'قباج',
            'Sexe' => 'Fille',
            'Email'=>'r.kabbaj@institution-madania.com',
            'date_naissance' => '2013-08-03',
            'created_at' => now(),
            'updated_at' => now()
              ],
            [
            'Matricule' => '4167',
            'Nom' => 'CHAGDANE	',
            'Prénom' => 'Samah',
            'الاسم الشخصي' =>'سماح',
            'الاسم العائلي'=>'شكدان',
            'Sexe' => 'Fille',
            'Email' => 's.chagdane@institution-madania.com',
            'date_naissance' => '2012-08-11',
            'created_at' => now(),
            'updated_at' => now()
            ],
             [
            'Matricule' => '4284',
            'Nom' => 'KARMANE	',
            'Prénom' => 'Saad',
            'الاسم الشخصي' =>'سعد',
            'الاسم العائلي'=>'كرمان',
            'Sexe' => 'Garçon',
            'Email' => 's.karmane@institution-madania.com',
            'date_naissance' => '2014-03-16',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4214',
            'Nom' => 'Mohamed Amine		',
            'Prénom' => 'DAOUIA',
            'الاسم الشخصي' =>'محمد أمين',
            'الاسم العائلي'=>'الضاوية',
            'Sexe' => 'Garçon',
            'Email' => 'm.daouia@institution-madania.com',
            'date_naissance' => '2013-01-15',
            'created_at' => now(),
            'updated_at' => now()
              ],
            [
            'Matricule' => '4322',
            'Nom' => 'KHATIM	',
            'Prénom' => 'Youssef',
            'الاسم الشخصي' =>'يوسف',
            'الاسم العائلي'=>'ختيم',
            'Sexe' => 'Garçon',
            'Email' => 'y.khatim@institution-madania.com',
            'date_naissance' => '2012-10-12',
            'created_at' => now(),
            'updated_at' => now()
             ],
            [
            'Matricule' => '4202',
            'Nom' => 'Rim	',
            'Prénom' => 'TARIK',
            'الاسم الشخصي' =>'ريم',
            'الاسم العائلي'=>'طارق',
            'Sexe' => 'Fille',
            'Email' => 'r.tarik@institution-madania.com',
            'date_naissance' => '2013-08-25',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4185',
            'Nom' => 'Mohamed Taha',
            'Prénom' => 'MARDI',
            'الاسم الشخصي' =>'محمد طه',
            'الاسم العائلي'=>'مرضي',
            'Sexe' => 'Garçon',
            'Email' => 'm.mardi@institution-madania.com',
            'date_naissance' => '2012-07-03',
            'created_at' => now(),
            'updated_at' => now()
             ],
            [
            'Matricule' => '4069',
            'Nom' => 'Louay	',
            'Prénom' => 'EL ASRI',
            'الاسم الشخصي' =>'لؤي',
            'الاسم العائلي'=>'العصري',
            'Sexe' => 'Garçon',
            'Email' => 'r.tarik@institution-madania.com',
            'date_naissance' => '2013-08-25',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4207',
            'Nom' => 'Mohamed Adam',
            'Prénom' => 'EL HARIRI',
            'الاسم الشخصي' =>'محمد أدم',
            'الاسم العائلي'=>'الحريري',
            'Sexe' => 'Garçon',
            'Email' => 'M.elhariri@institution-madania.com',
            'date_naissance' => '2012-11-29',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4257',
            'Nom' => 'Yousra	',
            'Prénom' => 'BELHAJ',
            'الاسم الشخصي' =>'يسرى',
            'الاسم العائلي'=>'بالحاج',
            'Sexe' => 'Fille',
            'Email' => 'y.belhaj@institution-madania.com',
            'date_naissance' => '2013-11-15',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4250',
            'Nom' => 'Wassim	',
            'Prénom' => 'OULAKHLIF',
            'الاسم الشخصي' =>'وسيم',
            'الاسم العائلي'=>'ولخليف',
            'Sexe' => 'Garçon',
            'Email' => 'w.oulakhlif@institution-madania.com',
            'date_naissance' => '2013-06-19',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4238',
            'Nom' => 'Ahmed Islam		',
            'Prénom' => 'OUBRY',
            'الاسم الشخصي' =>'أحمد اسلام	',
            'الاسم العائلي'=>'أوبري',
            'Sexe' => 'Garçon',
            'Email' => 'a.oubry@institution-madania.com',
            'date_naissance' => '2014-03-20',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4158',
            'Nom' => 'Amira	',
            'Prénom' => 'BOUHAOULA',
            'الاسم الشخصي' =>'أميرة',
            'الاسم العائلي'=>'بوحولة',
            'Sexe' => 'Fille',
            'Email' => 'a.bouhaoula@institution-madania.com',
            'date_naissance' => '2013-10-26',
            'created_at' => now(),
            'updated_at' => now()
             ], 
             [
            'Matricule' => '4158',
            'Nom' => 'Amira	',
            'Prénom' => 'BOUHAOULA',
            'الاسم الشخصي' =>'أميرة',
            'الاسم العائلي'=>'بوحولة',
            'Sexe' => 'Fille',
            'Email' => 'a.bouhaoula@institution-madania.com',
            'date_naissance' => '2013-10-26',
            'created_at' => now(),
            'updated_at' => now()
             ], 
             [
            'Matricule' => '4152',
            'Nom' => 'Salma	',
            'Prénom' => 'BENKENDIL',
            'الاسم الشخصي' =>'سلمى',
            'الاسم العائلي'=>'بنقنديل',
            'Sexe' => 'Fille',
            'Email' => 's.benkendil@institution-madania.com',
            'date_naissance' => '2013-04-27',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4166',
            'Nom' => 'Youssef	',
            'Prénom' => 'EL ADNANI	',
            'الاسم الشخصي' =>'يوسف',
            'الاسم العائلي'=>'العدناني',
            'Sexe' => 'Garçon',
            'Email' => 'y.eladnani@institution-madania.com',
            'date_naissance' => '2013-10-07',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4127',
            'Nom' => 'Imrane	',
            'Prénom' => 'EL MEJAHID	',
            'الاسم الشخصي' =>'عمران',
            'الاسم العائلي'=>'المجاهد',
            'Sexe' => 'Garçon',
            'Email' => 'i.elmejahid@institution-madania.com',
            'date_naissance' => '2012-09-07',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4149',
            'Nom' => 'Adam	',
            'Prénom' => 'TIBOURTE',
            'الاسم الشخصي' =>'أدم',
            'الاسم العائلي'=>'تيبورت',
            'Sexe' => 'Garçon',
            'Email' => 'a.tibourte@institution-madania.com',
            'date_naissance' => '2013-07-20',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4163',
            'Nom' => 'Yasmine	',
            'Prénom' => 'AROUI',
            'الاسم الشخصي' =>'ياسمين',
            'الاسم العائلي'=>'عروي',
            'Sexe' => 'Fille',
            'Email' => 'y.aroui@institution-madania.com',
            'date_naissance' => '2013-09-10',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4168',
            'Nom' => 'Lina	',
            'Prénom' => 'EZ-ZAYYATY	',
            'الاسم الشخصي' =>'لينة	',
            'الاسم العائلي'=>'الزياتي',
            'Sexe' => 'Fille',
            'Email' => 'l.ezzayyaty@institution-madania.com',
            'date_naissance' => '2013-02-22',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4151',
            'Nom' => 'Assia	',
            'Prénom' => 'CHAMEKH',
            'الاسم الشخصي' =>'أسية',
            'الاسم العائلي'=>'الشامخ',
            'Sexe' => 'Fille',
            'Email' => 'a.chamekh@institution-madania.com',
            'date_naissance' => '2013-04-08',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4233',
            'Nom' => 'Ismail	',
            'Prénom' => 'MOUM',
            'الاسم الشخصي' =>'اسماعيل',
            'الاسم العائلي'=>'موم',
            'Sexe' => 'Garçon',
            'Email' => 'i.moum@institution-madania.com',
            'date_naissance' => '2013-10-25',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4272',
            'Nom' => 'Mohamed Rayane		',
            'Prénom' => 'MERZAK',
            'الاسم الشخصي' =>'محمد ريان	',
            'الاسم العائلي'=>'مرزاق',
            'Sexe' => 'Garçon',
            'Email' => 'm.merzak@institution-madania.com',
            'date_naissance' => '2014-03-18',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4277',
            'Nom' => 'Lina',
            'Prénom' => 'BENZATTAT',
            'الاسم الشخصي' =>'لينة',
            'الاسم العائلي'=>'بنزطاط',
            'Sexe' => 'Fille',
            'Email' => 'l.benzattat@institution-madania.com',
            'date_naissance' => '2013-06-21',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [
            'Matricule' => '4293',
            'Nom' => 'Ghita',
            'Prénom' => 'EL MORTADI	',
            'الاسم الشخصي' =>'غيثة	',
            'الاسم العائلي'=>'المرتضي',
            'Sexe' => 'Fille',
            'Email' => 'g.elmortadi@institution-madania.com',
            'date_naissance' => '2013-02-06',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [
            'Matricule' => '4298',
            'Nom' => 'Arwa',
            'Prénom' => 'EL ABID',
            'الاسم الشخصي' =>'أروى	',
            'الاسم العائلي'=>'العابد',
            'Sexe' => 'Fille',
            'Email' => 'a.elabid@institution-madania.com',
            'date_naissance' => '2014-01-02',
            'created_at' => now(),
            'updated_at' => now()
             ],
            [            
            'Matricule' => '4160',
            'Nom' => 'Sahar',
            'Prénom' => 'JANDORE',
            'الاسم الشخصي' =>'سحر',
            'الاسم العائلي'=>'جندور',
            'Sexe' => 'Fille',
            'Email' => 's.jandore@institution-madania.com',
            'date_naissance' => '2014-02-08',
            'created_at' => now(),
            'updated_at' => now()
             ],
              [            
            'Matricule' => '4164',
            'Nom' => 'Amira',
            'Prénom' => 'MENGUIT',
            'الاسم الشخصي' =>'أميرة',
            'الاسم العائلي'=>'منكيط',
            'Sexe' => 'Fille',
            'Email' => 'a.menguit@institution-madania.com',
            'date_naissance' => '2013-09-05',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [            
            'Matricule' => '4106',
            'Nom' => 'Mohamed',
            'Prénom' => 'BAKIR',
            'الاسم الشخصي' =>'محمد',
            'الاسم العائلي'=>'باكر',
            'Sexe' => 'Garçon',
            'Email' => 'm.bakir@institution-madania.com',
            'date_naissance' => '2013-07-08',
            'created_at' => now(),
            'updated_at' => now()
             ],
             [            
            'Matricule' => '4248',
            'Nom' => 'Adam	',
            'Prénom' => 'WAKRIM	',
            'الاسم الشخصي' =>'ادم',
            'الاسم العائلي'=>'واكريم',
            'Sexe' => 'Garçon',
            'Email' => 'a.wakrim@institution-madania.com',
            'date_naissance' => '2013-12-18',
            'created_at' => now(),
            'updated_at' => now()
             ],



        ];

        DB::table('eleves')->insertOrIgnore($eleves);
    }
}

