<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../header.php";
require_once "../../vendor/autoload.php";

use Persoalan\Route;
use Persoalan\Request;
use Persoalan\Case5\Ctrl;

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
						<li class="breadcrumb-item active" aria-current="page">Case 5</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-row">
					<div class="col">
						<label for="input1">
							Karl has an array of integers. He wants to reduce the array until all remaining elements are
							equal. Determine the minimum number of elements to delete to reach his goal.<br/>For
							example, if
							his array is arr=[1,2,2,3], we see that he can delete the 2 elements 1 and 3 leaving
							arr=[2,2]. He could also delete both twos and either the 1 or the 3, but that would take 3
							deletions. The minimum number of deletions is 2.<br/><br/>
							Instruction:
							Write a function that will return the minimum number of deletions required to equalize the
							array, the input of the function will be arr: an array of integers.<br/><br/>
							Constraint:<br/>
							1 <= n <= 100<br/>
							1 <= arr[i] <= 100<br/>
							n is length of the array and arr[i] is an array of integers<br/><br/>
							Sample Input:<br/>
							n = 5<br/>
							arr = [3,3,2,1,3]<br/><br/>
							Sample Output:<br/>
							2<br/><br/>
							Explanation:<br/>
							Array arr = [3,3,2,1,3]. If we delete arr[2] = 2 and arr[3] = 1, all of the elements in the
							resulting array, arr = [3,3,3], will be equal. Deleting these 2 elements is minimal. Our
							only other options would be to delete 4 elements to get an array of either [1] or [2].
						</label>
						<input id="input1" class="form-control form-control-lg" type="text" name="param"
						       placeholder="Type (int) w/ comma (,) separators"
						       value="<?= !empty($Q["param"]) ? $Q["param"] : "" ?>"/>
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
								<?= $result["others"] !== "-" ? "Non duplicates value must be delete:" : "" ?>
								<span class="badge badge-danger"><?= $result["others"] ?></span>
							</p>
							<?php if (count($result["dupes"]) > 1): ?>
								<?php foreach ($result["dupes"] as $k => $v): ?>
									<p class="lead">
										Duplicates value may be delete to equal duplicated other elements is
										(int) <strong><?= $k ?></strong> =
										<span class="badge badge-info"><?= $v ?></span> +
										<span class="badge badge-danger"><?= $result["others"] ?></span>
									</p>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</form>
</div>