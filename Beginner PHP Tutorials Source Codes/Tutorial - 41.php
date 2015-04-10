<?php
$cities = array('MP'=>
                    array('Bhopal','Indore','Jabalpur'),
                'UP'=>
				    array('Noida','Lucknow','Varanasi'));
					
		foreach($cities as $element => $inner_array){
		echo '<strong>'.$element.'</strong><br>';
		foreach($inner_array as $item){
		echo $item.'<br>';
		  }
		}
?>
