<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../header.php";
require_once "../../vendor/autoload.php";

use Persoalan\Route;
use Persoalan\Request;
use Persoalan\Case2\Ctrl;

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
						<li class="breadcrumb-item active" aria-current="page">Case 2</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-row">
					<div class="col">
						<label for="input1">
							Write function to change date format from "Tue 16 Jul 2019" into "2019-07-16". The
							parameters of this function will be string and the output is string.
							<input id="input1" class="form-control form-control-lg" type="text" name="param"
							       placeholder="Please type your date format here"
							       value="<?= !empty($Q["param"]) ? $Q["param"] : "" ?>"/>
						</label>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<span class="badge badge-danger">Suggestion format is (D d M Y) w/ space as separators. And make sure ( D ) and ( d ) is match. Otherwise will be error.  Good luck.</span>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1"
					       name="check" <?= !empty($Q["check"]) ? "checked" : "" ?>>
					<label class="form-check-label" for="exampleCheck1">Check me out for regex matching
						preprocessing</label>
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