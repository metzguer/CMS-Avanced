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
        App\User::Create([
            "name"=>"Master",
            "email"=>"master@master.com",
            "password"=>bcrypt("master06")
        ]);
        factory(App\User::class, 7);
        App\Page::Create([
        	"parent_id"=>null,
        	"title"=>"Quienes somos",
        	"slug"=>"quienes-somos",
        	"body"=>"body"

        ]);

        App\Page::Create([
        	"parent_id"=>1,
        	"title"=>"Mision",
        	"slug"=>"mision",
        	"body"=>"body"

        ]);

        App\Page::Create([
        	"parent_id"=>1,
        	"title"=>"Vision",
        	"slug"=>"vision",
        	"body"=>"body"

        ]);
    }
}
