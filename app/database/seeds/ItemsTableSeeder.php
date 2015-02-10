<?php 
class ItemsTableSeeder extends Seeder{

	public function run(){
			
			
			DB::table('items')->delete();
			
			$items=array(
			
							array(
									'owner_id'=>1,
									'name'=>'Had sex',
									'done'=>true
							
								),
								
							array(
							
									'owner_id'=>1,
									'name'=>'Kissed a girl',
									'done'=>false
							
								)
							);
				DB::table('items')->insert($items);
				
				
	}
}