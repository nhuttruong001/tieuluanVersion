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
        // $this->call(UserSeeder::class);


        $this->call(UserSeeder::class);
       $this->call(LoaiGiaySeeder::class);
        $this->call(NhaCungCapSeeder::class);
        $this->call(KhuyenMaiSeeder::class);
        $this->call(GiaySeeder::class);
        $this->call(BinhLuanSeeder::class);
        $this->call(HoaDonSeeder::class);
        $this->call(ChiTietHoaDonSeeder::class);
   
        
    }
}
