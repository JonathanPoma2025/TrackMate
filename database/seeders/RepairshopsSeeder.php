<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Repairshop; // Nombre corregido
use App\Models\User;

class RepairshopsSeeder extends Seeder
{
    public function users(): mixed
    {
        return User::where('is_mechanic', true)->pluck('id');
    }

    public function run(): void
    {
        $users = $this->users();

        //if ($users->isEmpty()) {
        //    throw new \Exception('No mechanic users found to assign to repairshops.');
        //}

        // Primer taller
        Repairshop::create([
            'name' => 'Taller El Maestro',
            'address' => 'Calle Ficticia 101, Pueblo Nuevo',
            'email' => 'contacto@elmaestro.com',
            'phone' => '555-101-2020',
            'user_id' => $users->random()
        ]);

        // Lista de talleres adicionales
        $talleres = [
            [
                'name' => 'Taller Don Carlos',
                'address' => 'Av. Central 123, Ciudad Principal',
                'email' => 'doncarlos@talleres.com',
                'phone' => '555-123-4567',
                'user_id' => $users->random()
            ],
            [
                'name' => 'Mecánica Rápida El Turbo',
                'address' => 'Calle 45 #89-12, Sector Norte',
                'email' => 'elturbo@rapida.com',
                'phone' => '555-987-6543',
                'user_id' => $users->random()
            ],
            [
                'name' => 'Auto Servicio Los Hermanos',
                'address' => 'Boulevard 9, Zona Comercial',
                'email' => 'hermanos@autoservicio.com',
                'phone' => '555-222-3344',
                'user_id' => $users->random()
            ],
            [
                'name' => 'Garage El Pistón',
                'address' => 'Diagonal 18, Parque Industrial',
                'email' => 'elpiston@garage.com',
                'phone' => '555-444-5566',
                'user_id' => $users->random()
            ],
            [
                'name' => 'Centro Automotriz La Rueda',
                'address' => 'Carrera 33, Local 5',
                'email' => 'larueda@automotriz.com',
                'phone' => '555-666-7788',
                'user_id' => $users->random()
            ],
        ];

        //foreach ($talleres as $taller) {
        //    Repairshop::create($taller);
        //}
    }
}