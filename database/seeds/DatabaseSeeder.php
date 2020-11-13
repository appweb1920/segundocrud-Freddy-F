<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* NOTA: 
            Se manda llamar a los seeders indicados.
            Seria más facil hacerlo directamente en este caso, pero
            es util cuando se tienen multiples tablas o se quiere hacer 
            de una forma específica.
        */
        $this->call([
            refaccionesSeeder::class
        ]);
        // $this->call(UserSeeder::class);
    }
}
