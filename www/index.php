<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "header.php";
require_once __DIR__ . "/vendor/autoload.php";

use Persoalan\Route;

$R      = new Route();
$routes = $R->getRoutes();
?>

	<div class="container" style="margin-top: 50px; margin-bottom: 100px;">
		<div class="row">
			<div class="col-lg-12">
				<div class="alert alert-primary" role="alert">
					Harry Kurniawan
				</div>
				<?php foreach ($routes as $item) : ?>
					<a href="<?= $item["path"]; ?>" type="button"
					   class="btn btn-raised btn-<?= $item["style"]; ?>"><?= $item["name"]; ?></a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

<?php phpinfo(); ?>