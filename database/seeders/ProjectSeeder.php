<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            'Praga',
            'Green View',
            'La Calera',
            'Villa Privada Vidanta',
            'La Reserva',
            'Lagoon Village',
            'Villa Privada Balandra',
            'Jumeirah Lake',
            'Altos del Prado',
            'Urban Residencial',
            'San Andrés',
            'Lugo',
            'Villa Portón',
            'Orense',
            'Lagoon Center',
            'Planicie I',
            'Lachay View',
            'Altos del Valle',
            'Costa Verde',
            'Ciudad Diagonal',
            'El Cabo',
            'Grocio Prado',
            'Finca Montecarlo',
            'Praga Village',
            'Viña del Mar',
            'Praderas de Huaral',
            'Rinconada del Lago',
            'El Olivar',
            'Fundo Monasterio',
            'Villa Palermo',
            'Entre Bosques',
            'Praderas de Huaral',
            'Planicie Etapa II',
            'Finca Las Lomas',
            'Foresta',
            'Rivera del Campo',
            'PonteVedra',
            'Camtabria',
            'Lagoon View',
            'Camtabria Lagoons',
            'El Poblado',
            'Mariadrago',
        ];

        foreach ($projects as $name) {
            Project::create([
                'description' => $name,
                'detail' => '',
            ]);
        }
    }
}
