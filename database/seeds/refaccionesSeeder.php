<?php

use Illuminate\Database\Seeder;
//NOTA: requerimos el uso una fachada para modificar la DB
use Illuminate\Support\Facades\DB;
//NOTA: para agregar timestamps de created_At, updated_at.
use Carbon\Carbon;

class refaccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*NOTA Pueden agregarse funciones utiles como:
            use Illuminate\Support\Facades\Hash; //-> "Hashear" una contraseña
            use Illuminate\Support\Str; // -> Funciones para cadenas, ej. generacion aleatoria
            use Faker\Factory as Faker; // -> Funciones generar ¿textos o parrafos? legibles... (otras cosas?)
            use Carbon\Carbon; // -> Para agregar timestamps ... (otras cosas?).

            Ejemplos:
                $cadenaAleatoria = Str::random(10);
                $passHasheado = $Hash::make("password");
                
                $faker = Faker::create();
                $cadena = $faker->sentence(5);
                $parrafo = $faker->paragraph(5);
        */

        //

        //Se inserta <un solo registro> con datos pseudo-aleatorios
        DB::table('piezasDeRefaccion')->insert([
            'nombre' => "refaccionX",
            'descripcion' => "Esta es la refaccion X creada en el seeder",
            'piezasDisponibles' => 10,
            'costo' => 50.25,
            //NOTA: No se agregan los timestamps automáticamente
        ]);
        
        //Se inserta <varios registros> con datos pseudo-aleatorios usando factory
        foreach (range(1, 15) as $index) {
            $costoAux = rand(0, 500) + rand(0, 100)/100;
            //Agregamos los timestamps (al no guardar usando un MODELO, se quedan como NULL)
            $timestampNow = Carbon::now();

            DB::table('piezasDeRefaccion')->insert([
                'nombre' => "refaccion".$index,
                'descripcion' => "Esta es la refacción ".$index." creada en el seeder",
                'piezasDisponibles' => rand(0, 200),
                'costo' => $costoAux,
                'created_at' => $timestampNow,
                'updated_at' => $timestampNow,
            ]);
        }
    }
}
