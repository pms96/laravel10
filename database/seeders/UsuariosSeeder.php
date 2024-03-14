<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Usuarios')->insert([            
            ['id' => 1, 'nif' => '12345678Z', 'nombre' => 'Ana', 'apellido' => 'García', 'fecha_nacimiento' => '1990-05-15'],
            ['id' => 2, 'nif' => '98765432M', 'nombre' => 'Juan', 'apellido' => 'Pérez', 'fecha_nacimiento' => '1985-08-22'],
            ['id' => 3, 'nif' => '45678901K', 'nombre' => 'María', 'apellido' => 'Gómez', 'fecha_nacimiento' => '1980-03-10'],
            ['id' => 4, 'nif' => '11112111Y', 'nombre' => 'Carlos', 'apellido' => 'Rodríguez', 'fecha_nacimiento' => '1995-11-22'],
            ['id' => 5, 'nif' => '33333333P', 'nombre' => 'Laura', 'apellido' => 'López', 'fecha_nacimiento' => '1988-07-05'],
            ['id' => 6, 'nif' => '12340678B', 'nombre' => 'Ana', 'apellido' => 'García', 'fecha_nacimiento' => '1990-05-15'],
            ['id' => 7, 'nif' => '87654321X', 'nombre' => 'Juan', 'apellido' => 'Pérez', 'fecha_nacimiento' => '1985-08-22'],
            ['id' => 8, 'nif' => '00000345T', 'nombre' => 'María', 'apellido' => 'Gómez', 'fecha_nacimiento' => '1980-03-10'],
            ['id' => 9, 'nif' => '00003456Y', 'nombre' => 'Carlos', 'apellido' => 'Rodríguez', 'fecha_nacimiento' => '1995-11-22'],
            ['id' => 10, 'nif' => '00000237F', 'nombre' => 'Laura', 'apellido' => 'López', 'fecha_nacimiento' => '1988-07-05'],
            ['id' => 11, 'nif' => null, 'nombre' => 'Luis', 'apellido' => 'González', 'fecha_nacimiento' => '1990-06-05'],
            ['id' => 12, 'nif' => null, 'nombre' => 'Lucía', 'apellido' => 'Hernández', 'fecha_nacimiento' => '1988-02-14'],
            ['id' => 13, 'nif' => '10101010M', 'nombre' => 'Marcelo', 'apellido' => 'Santos', 'fecha_nacimiento' => '1995-09-30'],
            ['id' => 14, 'nif' => null, 'nombre' => 'Silvia', 'apellido' => 'Díaz', 'fecha_nacimiento' => '1982-11-20'],
            ['id' => 15, 'nif' => '12121212N', 'nombre' => 'Natalia', 'apellido' => 'Vega', 'fecha_nacimiento' => '1998-04-10'],
            ['id' => 16, 'nif' => '13131313O', 'nombre' => 'Oscar', 'apellido' => 'Martínez', 'fecha_nacimiento' => '1993-07-15'],
            ['id' => 17, 'nif' => '14141414P', 'nombre' => 'Paula', 'apellido' => 'Gómez', 'fecha_nacimiento' => '1986-03-22'],
            ['id' => 18, 'nif' => '15151515Q', 'nombre' => 'Quim', 'apellido' => 'Ramírez', 'fecha_nacimiento' => '1991-09-12'],
            ['id' => 19, 'nif' => null, 'nombre' => 'Raquel', 'apellido' => 'Jiménez', 'fecha_nacimiento' => '1978-11-05'],
            ['id' => 20, 'nif' => '16161616R', 'nombre' => 'Raúl', 'apellido' => 'Ortega', 'fecha_nacimiento' => '1985-05-30'],
            ['id' => 21, 'nif' => '17171717S', 'nombre' => 'Sara', 'apellido' => 'López', 'fecha_nacimiento' => '1997-01-18'],
            ['id' => 22, 'nif' => '18181818T', 'nombre' => 'Tomás', 'apellido' => 'Fernández', 'fecha_nacimiento' => '1994-08-08'],
            ['id' => 23, 'nif' => '19191919U', 'nombre' => 'Ursula', 'apellido' => 'García', 'fecha_nacimiento' => '1980-06-28'],
            ['id' => 24, 'nif' => null, 'nombre' => 'Ulises', 'apellido' => 'Vega', 'fecha_nacimiento' => '1999-04-04'],
            ['id' => 25, 'nif' => '20202020V', 'nombre' => 'Vanesa', 'apellido' => 'Santos', 'fecha_nacimiento' => '1992-12-25'],
            ['id' => 26, 'nif' => '21212121W', 'nombre' => 'Walter', 'apellido' => 'Hernández', 'fecha_nacimiento' => '1989-02-10'],
            ['id' => 27, 'nif' => null, 'nombre' => 'Wendy', 'apellido' => 'Díaz', 'fecha_nacimiento' => '1983-10-17'],
            ['id' => 28, 'nif' => '22222222X', 'nombre' => 'Xavier', 'apellido' => 'Ruiz', 'fecha_nacimiento' => '1996-07-08'],
            ['id' => 29, 'nif' => '23232323Y', 'nombre' => 'Yolanda', 'apellido' => 'Sánchez', 'fecha_nacimiento' => '1976-09-14'],
            ['id' => 30, 'nif' => '24242424Z', 'nombre' => 'Zoe', 'apellido' => 'Martínez', 'fecha_nacimiento' => '1998-03-01'],
            ['id' => 31, 'nif' => '25252525A', 'nombre' => 'Ana', 'apellido' => 'García', 'fecha_nacimiento' => '1987-04-15'],
            ['id' => 32, 'nif' => '26262626B', 'nombre' => 'Juan', 'apellido' => 'Pérez', 'fecha_nacimiento' => '1993-11-22'],
            ['id' => 33, 'nif' => '27272727C', 'nombre' => 'María', 'apellido' => 'Gómez', 'fecha_nacimiento' => '1981-07-05'],
            ['id' => 34, 'nif' => null, 'nombre' => 'Carlos', 'apellido' => 'Rodríguez', 'fecha_nacimiento' => '1996-04-08'],
            ['id' => 35, 'nif' => '28282828D', 'nombre' => 'Laura', 'apellido' => 'López', 'fecha_nacimiento' => '1989-02-18'],
            ['id' => 36, 'nif' => '29292929E', 'nombre' => 'Pablo', 'apellido' => 'Martínez', 'fecha_nacimiento' => '1994-09-30'],
            ['id' => 37, 'nif' => '30303030F', 'nombre' => 'Elena', 'apellido' => 'Sánchez', 'fecha_nacimiento' => '1979-11-20'],
            ['id' => 38, 'nif' => null, 'nombre' => 'Miguel', 'apellido' => 'Fernández', 'fecha_nacimiento' => '1984-06-30'],
            ['id' => 39, 'nif' => '31313131G', 'nombre' => 'Carmen', 'apellido' => 'Ruiz', 'fecha_nacimiento' => '1990-03-12'],
            ['id' => 40, 'nif' => '32323232H', 'nombre' => 'Oscar', 'apellido' => 'Vega', 'fecha_nacimiento' => '1997-08-30'],
            ['id' => 41, 'nif' => '33333333I', 'nombre' => 'Paula', 'apellido' => 'Díaz', 'fecha_nacimiento' => '1983-02-10'],
            ['id' => 42, 'nif' => '34343434J', 'nombre' => 'Quim', 'apellido' => 'López', 'fecha_nacimiento' => '1980-10-17'],
            ['id' => 43, 'nif' => '35353535K', 'nombre' => 'Raquel', 'apellido' => 'Santos', 'fecha_nacimiento' => '1975-06-28'],
            ['id' => 44, 'nif' => '36363636L', 'nombre' => 'Raúl', 'apellido' => 'Hernández', 'fecha_nacimiento' => '1988-09-14'],
            ['id' => 45, 'nif' => '37373737M', 'nombre' => 'Sara', 'apellido' => 'Jiménez', 'fecha_nacimiento' => '1977-03-01'],
            ['id' => 46, 'nif' => '38383838N', 'nombre' => 'Tomás', 'apellido' => 'Ortega', 'fecha_nacimiento' => '1969-01-05'],
            ['id' => 47, 'nif' => null, 'nombre' => 'Ursula', 'apellido' => 'Ramírez', 'fecha_nacimiento' => '1986-12-25'],
            ['id' => 48, 'nif' => '39393939O', 'nombre' => 'Ulises', 'apellido' => 'Fernández', 'fecha_nacimiento' => '1992-05-15'],
            ['id' => 49, 'nif' => '40404040P', 'nombre' => 'Vanesa', 'apellido' => 'García', 'fecha_nacimiento' => '1985-08-22'],
            ['id' => 50, 'nif' => '41414141Q', 'nombre' => 'Walter', 'apellido' => 'Martínez', 'fecha_nacimiento' => '1958-07-10'],
            ['id' => 51, 'nif' => '12345678A', 'nombre' => 'Juan', 'apellido' => 'Gomez', 'fecha_nacimiento' => '2000-03-10'],
            ['id' => 52, 'nif' => '23456789B', 'nombre' => 'Ana', 'apellido' => 'Rodriguez', 'fecha_nacimiento' => '1990-05-15'],
            ['id' => 53, 'nif' => '34567890C', 'nombre' => 'Carlos', 'apellido' => 'Fernandez', 'fecha_nacimiento' => '1985-08-22'],
            ['id' => 54, 'nif' => '45678901D', 'nombre' => 'Elena', 'apellido' => 'Martinez', 'fecha_nacimiento' => '1980-11-27'],
            ['id' => 55, 'nif' => '56789012E', 'nombre' => 'Miguel', 'apellido' => 'Lopez', 'fecha_nacimiento' => '1975-01-05'],
            ['id' => 56, 'nif' => '67890123F', 'nombre' => 'Laura', 'apellido' => 'Sanchez', 'fecha_nacimiento' => '1970-04-12'],
            ['id' => 57, 'nif' => '78901234G', 'nombre' => 'Pedro', 'apellido' => 'Perez', 'fecha_nacimiento' => '1965-07-18'],
            ['id' => 58, 'nif' => '89012345H', 'nombre' => 'Isabel', 'apellido' => 'Diaz', 'fecha_nacimiento' => '1960-10-23'],
            ['id' => 59, 'nif' => '90123456I', 'nombre' => 'Sergio', 'apellido' => 'Hernandez', 'fecha_nacimiento' => '1995-02-28'],
            ['id' => 60, 'nif' => '01234567J', 'nombre' => 'Carmen', 'apellido' => 'Jimenez', 'fecha_nacimiento' => '1992-06-07'],
            ['id' => 61, 'nif' => '12345678K', 'nombre' => 'Alejandro', 'apellido' => 'Gutierrez', 'fecha_nacimiento' => '1987-09-14'],
            ['id' => 62, 'nif' => '23456789L', 'nombre' => 'Sofia', 'apellido' => 'Serrano', 'fecha_nacimiento' => '1982-12-19'],
            ['id' => 63, 'nif' => '34567890M', 'nombre' => 'Raul', 'apellido' => 'Romero', 'fecha_nacimiento' => '1978-03-25'],
            ['id' => 64, 'nif' => '45678901N', 'nombre' => 'Natalia', 'apellido' => 'Nuñez', 'fecha_nacimiento' => '1973-06-30'],
            ['id' => 65, 'nif' => '56789012O', 'nombre' => 'Antonio', 'apellido' => 'Alvarez', 'fecha_nacimiento' => '1968-10-05'],
            ['id' => 66, 'nif' => '67890123P', 'nombre' => 'Marina', 'apellido' => 'Pardo', 'fecha_nacimiento' => '1963-01-11'],
            ['id' => 67, 'nif' => '78901234Q', 'nombre' => 'Luis', 'apellido' => 'Luna', 'fecha_nacimiento' => '1998-04-16'],
            ['id' => 68, 'nif' => '89012345R', 'nombre' => 'Monica', 'apellido' => 'Molina', 'fecha_nacimiento' => '1994-07-21'],
            ['id' => 69, 'nif' => '90123456S', 'nombre' => 'Daniel', 'apellido' => 'Dominguez', 'fecha_nacimiento' => '1989-10-26'],
            ['id' => 70, 'nif' => '01234567T', 'nombre' => 'Raquel', 'apellido' => 'Ramirez', 'fecha_nacimiento' => '1984-01-31'],
            ['id' => 71, 'nif' => '12345678U', 'nombre' => 'Hector', 'apellido' => 'Herrera', 'fecha_nacimiento' => '1959-05-07'],
            ['id' => 72, 'nif' => '23456789V', 'nombre' => 'Paula', 'apellido' => 'Palacios', 'fecha_nacimiento' => '1934-08-12'],
            ['id' => 73, 'nif' => '34567890W', 'nombre' => 'Javier', 'apellido' => 'Jimenez', 'fecha_nacimiento' => '1969-11-17'],
            ['id' => 74, 'nif' => '45678901X', 'nombre' => 'Eva', 'apellido' => 'Escudero', 'fecha_nacimiento' => '1964-02-22'],
            ['id' => 75, 'nif' => '56789012Y', 'nombre' => 'Diego', 'apellido' => 'Duran', 'fecha_nacimiento' => '1949-05-29'],
            ['id' => 76, 'nif' => '67890123Z', 'nombre' => 'Alicia', 'apellido' => 'Alonso', 'fecha_nacimiento' => '1906-09-03'],
            ['id' => 77, 'nif' => '78901234A', 'nombre' => 'Gabriel', 'apellido' => 'Garcia', 'fecha_nacimiento' => '1991-12-08'],
            ['id' => 78, 'nif' => '89012345B', 'nombre' => 'Nerea', 'apellido' => 'Navarro', 'fecha_nacimiento' => '1986-03-15'],
            ['id' => 79, 'nif' => '90123456C', 'nombre' => 'Ricardo', 'apellido' => 'Rojas', 'fecha_nacimiento' => '1981-06-20'],
            ['id' => 80, 'nif' => '01234567D', 'nombre' => 'Patricia', 'apellido' => 'Perez', 'fecha_nacimiento' => '1976-09-25'],
        ]);
    }
}
