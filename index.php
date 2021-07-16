<!doctype html>
<html>
<head>
	<title>Simple page</title>
</head>
<body>
    <!--<script src="/sources/main.js"></script>-->
	<?php
		
		class Entree {
			private $name;
			protected $ingridients;

			public function __construct($name, $ingridients) {
				if (! is_array) {
					throw new Exception('$ingridients must be an array');
				}
				$this->name = $name;
				$this->ingridients = $ingridients;
			}

			public function hasIngridient($ingridient) {
				return in_array($ingridient, $this->ingridients);
			}
		}

		class Ingridient {
			public function __construct($name, $price) {
				$this->name = $name;
				$this->price = $price;
			}

			public function change_price($price) {
				$this->price = $price;
			}

			public function info() {
				print "$this->name - \$$this->price<br>\n";
			}

		}

		class Meal extends Ingridient {
			public function __construct($name, $ingridients)

		$tomate = new Ingridient("Tomato", 3.45);
		$tomate->info();
		$tomate->change_price(5.45);
		$tomate->info();

	?>
</body>
</html>
