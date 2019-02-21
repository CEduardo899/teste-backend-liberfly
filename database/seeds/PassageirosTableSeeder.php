<?php

use Illuminate\Database\Seeder;

class PassageirosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passageiros')->insert([
            'nome' => 'Ana Tereza de A. Vasques',
            'telefone' => '(27) 99141-4123',
            'email' => 'ana_vasques@gmail.com',
            'origem' => 'BSB',
            'destino' => 'CGH',
            'num_voo' => rand(1000,9999),
        ]);

        DB::table('passageiros')->insert([
            'nome' => 'Kênia Stephanie Nunes Arruda',
            'telefone' => '(68) 99994-6983',
            'email' => 'kenia_nunes_arruda@gmail.com',
            'origem' => 'SDU',
            'destino' => 'MCZ',
            'num_voo' => rand(1000,9999),
        ]);

        DB::table('passageiros')->insert([
            'nome' => 'Ramon Douglas Neves de Andrade',
            'telefone' => '(11) 98741-3311',
            'email' => 'ramon@gmail.com',
            'origem' => 'LDB',
            'destino' => 'THE',
            'num_voo' => rand(1000,9999),
        ]);

        DB::table('passageiros')->insert([
            'nome' => 'Guilherme Azevedo Reis',
            'telefone' => '(82) 99221-3698',
            'email' => 'guilherme_azevedo_reis@gmail.com',
            'origem' => 'XAP',
            'destino' => 'JTC',
            'num_voo' => rand(1000,9999),
        ]);

        DB::table('passageiros')->insert([
            'nome' => 'Brisa Silva Bracchi',
            'telefone' => '(12) 99881-1249',
            'email' => 'brisa_bracchi@gmail.com',
            'origem' => 'STM',
            'destino' => 'IMP',
            'num_voo' => rand(1000,9999),
        ]);

        DB::table('passageiros')->insert([
            'nome' => 'Jhony Kleyton do Nascimento',
            'telefone' => '(97) 98881-4562',
            'email' => 'jhony_kleyton@gmail.com',
            'origem' => 'CGR',
            'destino' => 'MOC',
            'num_voo' => rand(1000,9999),
        ]);

        DB::table('passageiros')->insert([
            'nome' => 'Simone Karla Costa da Silva',
            'telefone' => '(96) 99912-3214',
            'email' => 'simone_karla@gmail.com',
            'origem' => 'PNZ',
            'destino' => 'STM',
            'num_voo' => rand(1000,9999),
        ]);

        DB::table('passageiros')->insert([
            'nome' => 'Moema Iris Soares da Silva',
            'telefone' => '(75) 98829-5541',
            'email' => 'moema_iris_soares@gmail.com',
            'origem' => 'PMW',
            'destino' => 'FEN',
            'num_voo' => rand(1000,9999),
        ]);

        DB::table('passageiros')->insert([
            'nome' => 'Ivausck Maria L. da Costa',
            'telefone' => '(77) 98756-9631',
            'email' => 'ivausck_costa@gmail.com',
            'origem' => 'VIX',
            'destino' => 'NVT',
            'num_voo' => rand(1000,9999),
        ]);

        DB::table('passageiros')->insert([
            'nome' => 'Rafael Victor',
            'telefone' => '(41) 98741-2547',
            'email' => 'rafael_victor@gmail.com',
            'origem' => 'UDI',
            'destino' => 'JPA',
            'num_voo' => rand(1000,9999),
        ]);

        DB::table('passageiros')->insert([
            'nome' => 'Elivelton Costa da Silva',
            'telefone' => '(45) 97125-4789',
            'email' => 'elivelton_silva@gmail.com',
            'origem' => 'CPV',
            'destino' => 'POA',
            'num_voo' => rand(1000,9999),
        ]);
    }
}
