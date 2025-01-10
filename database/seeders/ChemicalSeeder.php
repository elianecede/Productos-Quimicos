<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chemical;

class ChemicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chemical::create([
            'nombre' => 'Clorox',
            'imagen' => 'https://via.placeholder.com/150',
            'descripcion' => 'Un producto de limpieza común para desinfectar.',
            'proceso_creacion' => 'El Clorox se produce al reaccionar cloro con hidróxido de sodio para generar hipoclorito de sodio.',
            'historia' => 'Introducido por primera vez en 1913, ha sido un producto básico en los hogares.',
            'usos' => 'Se utiliza para limpiar, desinfectar superficies, blanquear ropa y purificar agua.'
        ]);

        Chemical::create([
            'nombre' => 'Vinagre',
            'imagen' => 'https://via.placeholder.com/150',
            'descripcion' => 'Un líquido ácido comúnmente usado para cocinar y limpiar.',
            'proceso_creacion' => 'Se produce fermentando etanol con bacterias de ácido acético.',
            'historia' => 'Se ha utilizado desde la antigüedad tanto para fines culinarios como medicinales.',
            'usos' => 'Se utiliza para limpiar, cocinar y como herbicida natural.'
        ]);
    }
}
