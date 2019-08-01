<?php

namespace Persoalan\Case1;

use Exception;

abstract class Func
{
	protected $Params;
	protected $Result;

	protected function calculate()
	{
		try {
			$param = $this->Params["param"];
			$arr   = explode(",", $param);

			if (!is_array($arr) && strlen($param) > 1) {
				throw new Exception("Error: <strong>Input must be separated by comma (,)</strong>");
			}

			$this->Result = array_sum($arr);
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