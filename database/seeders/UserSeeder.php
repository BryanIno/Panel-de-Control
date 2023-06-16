<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario=new User();
        $usuario->name=('Bryan Inostroza');
        $usuario->email=('bryan@gmail.com');
        $usuario->password=bcrypt('a1b2c3d4');
        $usuario->save();

        $usuario2=new User();
        $usuario2->name=('Ignacio Salazar');
        $usuario2->email=('ignacio@gmail.com');
        $usuario2->password=bcrypt('d4c3d2a1');
        $usuario2->save();

        $usuario3=new User();
        $usuario3->name=('Luis Fernandez');
        $usuario3->email=('Luis@gmail.com');
        $usuario3->password=bcrypt('a1b2c3d4');
        $usuario3->save();

        $usuario4=new User();
        $usuario4->name=('Miguel Cifuentes');
        $usuario4->email=('Miguel@gmail.com');
        $usuario4->password=bcrypt('d4c3d2a1');
        $usuario4->save();

        $usuario5=new User();
        $usuario5->name=('Antonio Rivas');
        $usuario5->email=('Antonio@gmail.com');
        $usuario5->password=bcrypt('a1b2c3d4');
        $usuario5->save();

        $usuario6 = new User();
        $usuario6->name = 'Juan Pérez';
        $usuario6->email = 'juan@gmail.com';
        $usuario6->password = bcrypt('password123');
        $usuario6->save();
        
        $usuario7 = new User();
        $usuario7->name = 'María López';
        $usuario7->email = 'maria@gmail.com';
        $usuario7->password = bcrypt('password456');
        $usuario7->save();
        
        $usuario8 = new User();
        $usuario8->name = 'Carlos Rodríguez';
        $usuario8->email = 'carlos@gmail.com';
        $usuario8->password = bcrypt('password789');
        $usuario8->save();
        
        $usuario9 = new User();
        $usuario9->name = 'Ana Martínez';
        $usuario9->email = 'ana@gmail.com';
        $usuario9->password = bcrypt('passwordabc');
        $usuario9->save();
        
        $usuario10 = new User();
        $usuario10->name = 'Pedro Gómez';
        $usuario10->email = 'pedro@gmail.com';
        $usuario10->password = bcrypt('passwordxyz');
        $usuario10->save();
    }
}