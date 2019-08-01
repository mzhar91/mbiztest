<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../header.php";
require_once "../../vendor/autoload.php";

use Persoalan\Route;
use Persoalan\Request;
use Persoalan\Case3\Ctrl;

$Q    = Request::handler();
$Ctrl = new Ctrl($Q);

$result = $Ctrl->getResult();
?>

<div class="container" style="margin-top: 50px; margin-bottom: 100px;">
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
		<div class="row">
			<div class="col-lg-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= Route::getBaseUrl() ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Case 3</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-row">
					<div class="col">
						<label for="input1">
							Write function to calculate and print the factorial of a given integer.
							For example, if n = 5, we calculate 5 x 4 x 3 x 2 x 1 and get 120.
							<input id="input1" class="form-control form-control-lg" type="text" name="param"
							       placeholder="Type int ( n )"
							       value="<?= !empty($Q["param"]) ? $Q["param"] : "" ?>"/>
						</label>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-lg-12">
				<button type="submit" class="btn btn-outline-danger col-lg-12">Go</button>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-lg-12">
				<?php if (!empty($Q)) : ?>
					<div class="jumbotron jumbotron-fluid">
						<div class="container">
							<h1 class="display-4">Result</h1>
							<p class="lead">
								<?= $result ?>
							</p>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</form>
</div>