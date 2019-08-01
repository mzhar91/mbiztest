<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../header.php";
require_once "../../vendor/autoload.php";

use Persoalan\Route;
use Persoalan\Request;
use Persoalan\Case4\Ctrl;

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
						<li class="breadcrumb-item active" aria-current="page">Case 4</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-row">
					<div class="col">
						<label>
							Convert time in numerals into words, example :<br/>
							5:00 -> five o'clock<br/>
							5:01 -> one minute past five<br/>
							5:10 -> ten minutes past five<br/>
							5:15 -> quarter past five<br/>
							5:30 -> half past five<br/>
							5:40 -> twenty minutes to six<br/>
							5:45 -> quarter to six<br/>
							5:47 -> thirteen minutes to six<br/>
							5:28 -> twenty eight minutes past five<br/><br/>
							At minutes = 0, use "o' clock". For 1 <= minutes <= 30, use "past", and for 30 > minutes use
							"to". Note the space between the apostrophe and clock in o' clock. Write a program which
							prints the time in words for the input given in the format described.
							Function parameters :
							h: an integer representing hour of the day
							m: an integer representing minutes after the hour<br/>
						</label>
						<div class="row">
							<div class="col">
								<label for="input1"></label>
								<input id="input1" class="form-control form-control-lg" type="text" name="param1"
								       placeholder="Type int ( h )"
								       value="<?= !empty($Q["param1"]) ? $Q["param1"] : "" ?>"/>
							</div>
							<div class="col">
								<label for="input2"></label>
								<input id="input2" class="form-control form-control-lg" type="text" name="param2"
								       placeholder="Type int ( m )"
								       value="<?= !empty($Q["param2"]) ? $Q["param2"] : "" ?>"/>
							</div>
						</div>
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