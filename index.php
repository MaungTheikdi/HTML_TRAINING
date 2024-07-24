<?php
// php code here

// print to screen echo
// php variable $

// install wampserver or laragon 

// server root path // directory
// wwww 
// public_html

$a;
$b;
$name;

$name = 'Kyaw Kyaw';

$name = "Mg Mg";

$age = 21;
$acturalAge = $age + 5; // 26
$login = true; // Data type is boolean 
$usd = 10.6; // Data type is float

$ageFilter;

if($acturalAge > 20){ // if ( condition )
	// code for excution
	$ageFilter = "You are eligible to vote";
} else {
	// code for excution
    $ageFilter = "You are not eligible to vote";
}

function myfunctionName(){
	// code for excution
    echo "This is my function";
}

// global variable
function getName($name) {
	echo $name;
}

function getNameGlobal(){
	global $name;
    echo $name;
}

function mySum($value1, $value2) {
	return $value1 + $value2;
}


// String type '' ""
//echo 'Hello';
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap PHP Lesson </title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<style>
		.text-mycolor {
			color: brown;
		}

		.bg-dark {
			background-color: darkblue;
		}

		.bg-mycolor {
			background-color: #eec5f8;
		}

		.text-bg-primary {
			color: white;
			background-color: #007bff;
		}
	</style>
</head>

<body>

	<h1>Hello, world!</h1>

	<nav class="navbar navbar-expand-md bg-warning">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" aria-disabled="true">Disabled</a>
					</li>
				</ul>
				<form class="d-flex" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>

	<div class="container text-center">
		<div class="row">
			<div class="col-md-6 md-lg-6">
				<h2><?php echo $ageFilter; ?></h2>

				<?php 

						$a = 4;
						$b = 5;

						/*echo "My sum value is : "; 
						//echo mySum(1,2); 
						echo mySum($a, $b); 
						echo "\n"; // new line*/

						// concatenate the string .

						echo "<h3 class='text-mycolor'>"."My sum value is : ".mySum($a, $b)."</h3>";
						
						
						// increment ++
						// decrement --
						// equal to ==
						// not equal to !=
						// and &&
						// or ||

						// boolean e.g true --> $variable === true

						$x = 10;
						$x++;
						//echo $x;
						if ($x == 11 || $a == 3) {
							echo "x is 11 and a is 3";
						} else {
							echo "x is not 11 and a is not 3";
						}

						
				?> 

				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac nisi orci. Nulla facilisi. Donec vel turpis et justo tincidunt elementum. Duis vel lectus a neque fermentum tristique. Donec consectetur, felis vel consectetur pharetra, ligula ex gravida neque, vel posuere felis enim in velit. Sed vel urna a neque sagittis convallis vel ut velit. Donec vel tortor sed justo pellentesque pellentesque. Donec nec ipsum non orci fermentum consectetur. Donec gravida, lectus vel vestibulum congue, nunc turpis consectetur dolor, ut sagittis arcu dolor id enim. Nulla facilisi.
				</p>
			</div>
			<div class="col-md-6 md-lg-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac nisi orci. Nulla facilisi. Donec vel turpis et justo tincidunt elementum. Duis vel lectus a neque fermentum tristique. Donec consectetur, felis vel consectetur pharetra, ligula ex gravida neque, vel posuere felis enim in velit. Sed vel urna a neque sagittis convallis vel ut velit. Donec vel tortor sed justo pellentesque pellentesque. Donec nec ipsum non orci fermentum consectetur. Donec gravida, lectus vel vestibulum congue, nunc turpis consectetur dolor, ut sagittis arcu dolor id enim. Nulla facilisi.</p>

			</div>
			<div class="col-md-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac nisi orci. Nulla facilisi. Donec vel turpis et justo tincidunt elementum. Duis vel lectus a neque fermentum tristique. Donec consectetur, felis vel consectetur pharetra, ligula ex gravida neque, vel posuere felis enim in velit. Sed vel urna a neque sagittis convallis vel ut velit. Donec vel tortor sed justo pellentesque pellentesque. Donec nec ipsum non orci fermentum consectetur. Donec gravida, lectus vel vestibulum congue, nunc turpis consectetur dolor, ut sagittis arcu dolor id enim. Nulla facilisi.</p>

			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>