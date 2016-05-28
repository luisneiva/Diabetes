 <?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UsersTableSeeder extends Seeder {
 /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {


       Model::unguard();

         DB::table('users')->insert([
            'email' => 'admin@admin.admin',
            'type' => 0,
            'password' => '$2y$10$4MflYO6WbtwjGbJFNhs6Ke9MtymyKsCP9yBHDSNzoG5g5o9xnlx5u',
            'remember_token' => 'wB4WaGJPA9Wrp80SDtI4phBt87xCBJGO2lV03ZtGsJfwHsL3HEe8JIHmZQMS',
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('users')->insert([
            'email' => 'antonio_magalhaes1@hotmail.com',
            'type' => 0,
            'password' => '$2y$10$xkCSS8osnxZ0i4R4z8bUdeoDHhgohIrafLQ76F7TtGPe/X/ROGYNK',
            'remember_token' => 'DV8VacOkXoZcuJRicKHjWWXtYxLfQowvYJNAePF4V3bZHKxu3eR8FdlFe3gl',
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('users')->insert([
            'email' => 'user@user.com',
            'type' => 0,
            'password' => '$2y$10$2wqBNghWXYeC1evyLT/72OokBbuIbNmgKPVAEwudoNoWjh.3HRzX6',
            'remember_token' => 'cf8ZY4moZgYOetRlfCPXq3vreN4UcZiaWCCokKckyevZKM2rBPc0m7jv2yoQ',
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('users')->insert([
            'email' => 'utilizador@user.com',
            'type' => 0,
            'password' => '$2y$10$01yQ.3RiiYEqyV4doOgipe3VDSUTtxNuJ/ys/2sNmlsL.GjA3RwY2',
            'remember_token' => 'dDSVMIHcqNX4re6K3b9f0iDM1zkqniwW7sejzZbuC7i46MZTJunpv16WjtTV',
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('users')->insert([
            'email' => 'antonio@admin.com',
            'type' => 0,
            'password' => '$2y$10$Aqrg5kua9b0zG0s2dr4SxulYjH0M9dq8GSGiSsMNpugWMJrWkzPyG',
            'remember_token' => 'VD41UvXQEkDodH1zhpOPHT1uk1xIO9aoJdeSmKCa4y92Avv21FJQxE4nBdeX',
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);

         DB::table('users')->insert([
            'email' => 'marinho@magalhaes.net',
            'type' => 0,
            'password' => '$2y$10$dh4uY6cxszsQ9ZkLplv6M.YgLFPPPSpfp3C8RAj66eZRtSNO78t7S',
            'remember_token' => 'YF0Qct8agOlZzYgHhmAvUvsrWlKyIXVpsuWw4HpHZOQAXoZTB0PDZy5zS3z9',
            'created_at' => '2016-05-24 15:51:03',
            'updated_at' => '2016-05-24 15:51:03'
        ]);
    }
}