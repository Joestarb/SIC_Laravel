<?php

// database/seeders/SubjectSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Poblar la tabla 'subjects' con datos de ejemplo
        DB::table('subjects')->insert([
            'name_subject' => 'Matemáticas',
            'total_hours' => 50,
            'description' => 'Curso de Matemáticas',
        ]);

        DB::table('subjects')->insert([
            'name_subject' => 'Ciencias',
            'total_hours' => 40,
            'description' => 'Curso de Ciencias',
        ]);

        // Puedes agregar más registros según sea necesario
    }
}
