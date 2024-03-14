<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormularioUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('FormularioUsuarios')->insert([
            ['nif' => '12345678A', 'fecha_registro' => '2024-03-10 08:30:00'],
            ['nif' => '98765432B', 'fecha_registro' => '2024-03-10 09:15:00'],
            ['nif' => '45678901C', 'fecha_registro' => '2024-03-10 10:00:00'],
            ['nif' => '23456789D', 'fecha_registro' => '2024-03-10 11:45:00'],
            ['nif' => '78901234E', 'fecha_registro' => '2024-03-10 12:30:00'],
            ['nif' => '56789012F', 'fecha_registro' => '2024-03-10 13:15:00'],
            ['nif' => '34567890G', 'fecha_registro' => '2024-03-10 14:00:00'],
            ['nif' => '01234567H', 'fecha_registro' => '2024-03-10 14:45:00'],
            ['nif' => '89012345I', 'fecha_registro' => '2024-03-10 15:30:00'],
            ['nif' => '67890123J', 'fecha_registro' => '2024-03-10 16:15:00'],
            ['nif' => '45678901K', 'fecha_registro' => '2024-03-10 17:00:00'],
            ['nif' => '23456789L', 'fecha_registro' => '2024-03-10 17:45:00'],
            ['nif' => '78901234M', 'fecha_registro' => '2024-03-10 18:30:00'],
            ['nif' => '56789012N', 'fecha_registro' => '2024-03-10 19:15:00'],
            ['nif' => '34567890O', 'fecha_registro' => '2024-03-10 20:00:00'],
            ['nif' => '01234567P', 'fecha_registro' => '2024-03-10 20:45:00'],
            ['nif' => '89012345Q', 'fecha_registro' => '2024-03-10 21:30:00'],
            ['nif' => '67890123R', 'fecha_registro' => '2024-03-10 22:15:00'],
            ['nif' => '45678901S', 'fecha_registro' => '2024-03-10 23:00:00'],
            ['nif' => '23456789T', 'fecha_registro' => '2024-03-11 08:30:00'],
            ['nif' => '78901234U', 'fecha_registro' => '2024-03-11 09:15:00'],
            ['nif' => '56789012V', 'fecha_registro' => '2024-03-11 10:00:00'],
            ['nif' => '34567890W', 'fecha_registro' => '2024-03-11 11:45:00'],
            ['nif' => '01234567X', 'fecha_registro' => '2024-03-11 12:30:00'],
            ['nif' => '89012345Y', 'fecha_registro' => '2024-03-11 13:15:00'],
            ['nif' => '67890123Z', 'fecha_registro' => '2024-03-11 14:00:00'],
            ['nif' => '45678901A', 'fecha_registro' => '2024-03-11 14:45:00'],
            ['nif' => '23456789B', 'fecha_registro' => '2024-03-11 15:30:00'],
            ['nif' => '78901234C', 'fecha_registro' => '2024-03-11 16:15:00'],
            ['nif' => '56789012D', 'fecha_registro' => '2024-03-11 17:00:00'],
            ['nif' => '34567890E', 'fecha_registro' => '2024-03-11 17:45:00'],
            ['nif' => '01234567F', 'fecha_registro' => '2024-03-11 18:30:00'],
            ['nif' => '89012345G', 'fecha_registro' => '2024-03-11 19:15:00'],
            ['nif' => '67890123H', 'fecha_registro' => '2024-03-11 20:00:00'],
            ['nif' => '45678901I', 'fecha_registro' => '2024-03-11 20:45:00'],
            ['nif' => '23456789J', 'fecha_registro' => '2024-03-11 21:30:00'],
            ['nif' => '78901234K', 'fecha_registro' => '2024-03-11 22:15:00'],
            ['nif' => '56789012L', 'fecha_registro' => '2024-03-11 23:00:00'],
            ['nif' => '34567890M', 'fecha_registro' => '2024-03-12 08:30:00'],
            ['nif' => '01234567N', 'fecha_registro' => '2024-03-12 09:15:00'],
            ['nif' => '89012345O', 'fecha_registro' => '2024-03-12 10:00:00'],
            ['nif' => '67890123P', 'fecha_registro' => '2024-03-12 11:45:00'],
            ['nif' => '45678901Q', 'fecha_registro' => '2024-03-12 12:30:00'],
            ['nif' => '23456789R', 'fecha_registro' => '2024-03-12 13:15:00'],
            ['nif' => '35353535K', 'fecha_registro' => '2024-03-12 14:00:00'],
            ['nif' => '56789012T', 'fecha_registro' => '2024-03-12 14:45:00'],
            ['nif' => '34567890U', 'fecha_registro' => '2024-03-12 15:30:00'],
            ['nif' => '01234567V', 'fecha_registro' => '2024-03-12 16:15:00']
        ]);
    }
}
