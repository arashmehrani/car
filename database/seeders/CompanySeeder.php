<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'ایران خودرو'
        ]);
        Company::create([
            'name' => 'سایپا'
        ]);
        Company::create([
            'name' => 'مدیران خودرو'
        ]);
        Company::create([
            'name' => 'بهمن موتور'
        ]);
        Company::create([
            'name' => 'کرمان موتور'
        ]);
        Company::create([
            'name' => 'سایر ...'
        ]);
    }
}
