<?php

namespace Persoalan\Case5;

use Exception;

abstract class Func
{
	protected $Params;
	protected $Result;

	protected function convert()
	{
		try {
			$param  = rtrim($this->Params["param"], ",");
			$arr    = explode(",", $param);
			$errArr = 0;
			$arrKey = null;
			$arrVal = null;
			$dupes  = [];

			if (!is_array($arr) && strlen($param) > 1) {
				throw new Exception("Error: <strong>Input must be separated by comma (,)</strong>");
			}

			natcasesort($arr);
			reset($arr);

			if (count(array_unique($arr)) < count($arr)) {
				foreach ($arr as $key => $value) {
					if ($value === null || $value === "") {
						$errArr++;
						continue;
					}

					if (strcasecmp($arrVal, $value) === 0) {
						$dupes[$arrKey] = $arrVal;
						$dupes[$key]    = $value;
					}

					$arrVal = $value;
					$arrKey = $key;
				}

				$this->Result = [
					"others" => count($arr) - count($dupes) - $errArr,
					"dupes"  => array_count_values($dupes)
				];
			} else {
				$this->Result = [
					"others" => "-",
					"dupes"  => $dupes
				];

				echo "
				<div class=\"alert alert-warning\" role=\"alert\">
					(int) does not have duplicates
				</div>
				";
			}
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