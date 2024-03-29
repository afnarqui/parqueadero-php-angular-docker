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
        $this->truncartablas([
            'celdas',
            'vehiculos'
        ]);

        $this->call(CeldasSeeder::class);
        $this->call(VehiculosSeeder::class);
    }
    protected function truncartablas(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table){
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }    
}
