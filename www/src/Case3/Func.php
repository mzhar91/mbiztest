<?php

namespace Persoalan\Case3;

use Exception;

abstract class Func
{
	protected $Params;
	protected $Result;

	protected function calculate()
	{
		try {
			$param = (int) $this->Params["param"];
			$x     = 1;

			if ($param === "") {
				throw new Exception("Error: <strong>Input cannot be empty</strong>");
			}

			for ($i = 1; $i <= $param - 1; $i++) {
				$x *= ($i + 1);
			}

			$this->Result = $x;
		} catch (Exception $e) {
			$this->Result = "-";

			echo "
				<div class=\"alert alert-danger\" role=\"alert\">
					" . $e->getMessage() . "
				</div>
				";
		}

		return;
	}
}