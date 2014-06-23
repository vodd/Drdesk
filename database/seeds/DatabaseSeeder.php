<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    public function run(){
		DB::table('users')->insert(
  		  array(
       		 array('username' => 'superuser', 'password' => Hash::make('hpl1706$!'))
  		  )
		);
    }

}

class UserTableSeeder extends Seeder {

    public function run(){
		DB::table('users')->insert(
  		  array(
       		 array('username' => 'superuser', 'password' => Hash::make('hpl1706$!'))
  		  )
		);
    }

}