<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role1 = Role::create(['name'=>'Gerente']);
        $role2 = Role::create(['name'=>'Operario']);
        $role3 = Role::create(['name'=>'Conductor']);
        $role4 = Role::create(['name'=>'Admin']);
        /**
     * Home Permission
     */


        Permission::create(['name'=>'dashboard'])->syncRoles([$role1,$role2,$role4,$role3]);


        /**
     * Users Permission
     */
        Permission::create(['name'=>'admin.users.index'])->syncRoles([$role4]);
        Permission::create(['name'=>'admin.users.edit'])->syncRoles([$role4]);
        Permission::create(['name'=>'admin.users.update'])->syncRoles([$role4]);
        Permission::create(['name'=>'admin.users.destroy'])->syncRoles([$role4]);


        /**
     * Driver Permission
     */

        Permission::create(['name'=>'driver.ver.index'])->syncRoles([$role1,$role4]);

        Permission::create(['name'=>'driver.indexVer.visualizar'])->syncRoles([$role1,$role4]);
        Permission::create(['name'=>'driver.documento.view.clearinghouse'])->syncRoles([$role1,$role4]);

        Permission::create(['name'=>'driver.aspiranteDriver.create.nuevoDriver'])->syncRoles([$role2,$role4]);
        Permission::create(['name'=>'driver.driver.destroy'])->syncRoles([$role1,$role4]);


        /**
     * Aspirante Permission
     */



        Permission::create(['name'=>'aspirante.driver.index'])->syncRoles([$role1,$role4]);
        Permission::create(['name'=>'aspirante.aspirante.index'])->syncRoles([$role2,$role4]);

        Permission::create(['name'=>'aspirante.aspirante.edit'])->syncRoles([$role2,$role4]);
        Permission::create(['name'=>'aspirante.aspirante.destroy'])->syncRoles([$role2,$role4]);
        Permission::create(['name'=>'aspirante.aspirante.create'])->syncRoles([$role2,$role4]);

        /**
     * Solicitud Permission
     */

        Permission::create(['name'=>'solicitud.ver.operario.cita'])->syncRoles([$role2,$role4]);
        Permission::create(['name'=>'solicitud.index'])->syncRoles([$role3,$role4]);

        Permission::create(['name'=>'solicitud.edit'])->syncRoles([$role4,$role2,$role3]);
        Permission::create(['name'=>'solicitud.destroy'])->syncRoles([$role4,$role2,$role3]);
        Permission::create(['name'=>'solicitud.create'])->syncRoles([$role4,$role2,$role3]);

    /**
     * Agenda Permission
     */
        Permission::create(['name'=>'cita.index'])->syncRoles([$role3,$role4]);

        Permission::create(['name'=>'cita.edit'])->syncRoles([$role2,$role4]);
        Permission::create(['name'=>'cita.destroy'])->syncRoles([$role2,$role4]);
        Permission::create(['name'=>'cita.create'])->syncRoles([$role3,$role4]);


    }
}
