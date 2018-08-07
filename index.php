<?php
class People {
	public $person1 = 'Mike';
	public $person2 = 'Shirley';
	public $person3 = 'Jeff';

	protected $person4 = 'John';
	private $person5 = 'Moss';

	// function iterateObject() {
	// 	foreach( $this as $key => $value ) {
	// 		print "$key => $value\n";
	// 	}
	// }
}

$people = new People;

foreach( $people as $key => $value ) {
	print "$key => $value\n";
}

// $people->iterateObject();