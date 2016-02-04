<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //mockery
        Model::unguard();
         $this->call('postsTableSeeder');
    }
}

class postsTableSeeder extends  seeder{

    public function run()
    {
        // TODO: Implement run() method.
        App\posts::truncate();
        factory(App\posts::class,20)->create();
    }
}