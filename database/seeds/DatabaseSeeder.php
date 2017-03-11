<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        //this is the call that uses each table seeder class
        //$this->call(RoleTableSeeder::class);
        //$this->call(UserTableSeeder::class);
        //this is the call that uses each table seeder class
        $this->call('WcTypesTableSeeder');
        //$this->call('WheelchairsTableSeeder');
        $this->call('WcBrandsTableSeeder');
        $this->call('WcModelsTableSeeder');
        $this->call('WcDimensionsTableSeeder');
        $this->call('WcHeightsTableSeeder');
        $this->call('UnitsTableSeeder');
        $this->call('SpruceTableSeeder');
        $this->call('MapleTableSeeder');
        $this->call('OakTableSeeder');
        $this->call('BirchTableSeeder');
        $this->call('EmployeeTitlesTableSeeder');
        $this->call('InpatientsTableSeeder');
        $this->call('InsuranceValidityTableSeeder');
        $this->call('GenderTableSeeder');
        $this->call('PatientTypeTableSeeder');
        //$this->call('CandiesTableSeeder');

        //this is the message shown in your terminal after running db:seed command
        $this->command->info("gender table seeded :)");
        $this->command->info("wc_types table seeded :)");
        $this->command->info("insurance_validity table seeded :)");
        $this->command->info("inpatients table seeded :)");
        $this->command->info("patient_type table seeded :)");
        //$this->command->info("wheelchairs table seeded :)");
        $this->command->info("wc_models table seeded :)");
        $this->command->info("wc_dimensions table seeded :)");
        $this->command->info("wc_brands table seeded :)");
        $this->command->info("wc_heights table seeded :)");
        $this->command->info("units table seeded :)");
        $this->command->info("spruce table seeded :)");
        $this->command->info("maple table seeded :)");
        $this->command->info("oak table seeded :)");
        $this->command->info("birch table seeded :)");
        $this->command->info("employee_titles table seeded :)");
        //$this->command->info("candies table seeded :)");
    }

}
