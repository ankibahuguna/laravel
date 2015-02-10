<?php 
class UsersTableSeeder extends Seeder{
		public function run(){
			
			DB::table('users')->delete();
			
			$users=array(
							array(
									'name'=>'ankit',
									'password'=>Hash::make('nerdysexyme'),
									'email'=>'anki0070@gmail.com'
							
								)
							
							);
			DB::table('users')->insert($users);
		}	
}								