<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'codproducto' => '1000',
                'nomproducto' => 'Piercings 1',
                'descripcion' => 'Piercings de tipo largo - candonga',
                'imagen' => 'images/piercing1.jpg',
                'precio' => '12.000',
                'stock' => '20',
            ],               
            [
                'codproducto' => '1001',
                'nomproducto' => 'Piercings 2',
                'descripcion' => 'Piercings de tipo corto - Squeleton',
                'imagen' => 'images/piercing2.jpg',
                'precio' => '12.000',
                'stock' => '25',
            ],              
            [
                'codproducto' => '1002',
                'nomproducto' => 'Piercings Nariz',
                'descripcion' => 'Piercings Naris con detalle de flor',
                'imagen' => 'images/piercing3.jpg',
                'precio' => '10.000',
                'stock' => '16',
            ],             
            [
                'codproducto' => '1003',
                'nomproducto' => 'Piercings Rock - Metal',
                'descripcion' => 'Piercings de diferentes tipos',
                'imagen' => 'images/piercingRock.jpg',
                'precio' => '15.000',
                'stock' => '30',
            ],                      
            [
                'codproducto' => '1004',
                'nomproducto' => 'Blusa Pantera',
                'descripcion' => 'Blusa negra de Pantera',
                'imagen' => 'images/blusaPantera.jpg',
                'precio' => '45.000',
                'stock' => '10',
            ],                
            [
                'codproducto' => '1005',
                'nomproducto' => 'Camisa Hellowen',
                'descripcion' => 'Camisa negra de Hellowen',
                'imagen' => 'images/camisaHello.jpg',
                'precio' => '35.000',
                'stock' => '11',
            ],            
            [
                'codproducto' => '1006',
                'nomproducto' => 'Gorra Kiss',
                'descripcion' => 'Gorra negra KISS Sencilla',
                'imagen' => 'images/gorraKiss.jpg',
                'precio' => '25.000',
                'stock' => '3',
            ],       
            [
                'codproducto' => '1007',
                'nomproducto' => 'Cuaderno argollado',
                'descripcion' => 'Cuaderno argollado Metallica Negro',
                'imagen' => 'images/LibroMetal.jpg',
                'precio' => '15.000',
                'stock' => '6',
            ],            
        ];
       
        DB::table('productos')->insert($datos);
    }
}
// php artisan db:seed --class=NombreDelSeeder
