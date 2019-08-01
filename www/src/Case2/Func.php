<?php

namespace Persoalan\Case2;

use DateTime;
use Exception;

abstract class Func
{
	protected $Params;
	protected $Result;

	private function getFormat()
	{
		return "Y-m-d";
	}

	protected function convertDate()
	{
		try {
			$param = $this->Params["param"];

			if (DateTime::createFromFormat("D d M Y", $param) === false) {
				if (DateTime::createFromFormat("Y D d M", $param) === false) {
					if (DateTime::createFromFormat("M Y D d", $param) === false) {
						if (DateTime::createFromFormat("d M Y D", $param) === false) {
							throw new Exception("Error: <strong>Hehe, i won't handle all format bro. Please follow the suggestion format</strong>");
						}
					}
				}
			}

			$this->Result = date($this->getFormat(), strtotime($param));
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


	protected function convertRegex()
	{
		try {
			$param = $this->Params["param"];

			$pattern = "/(?:mon|tue|wed|thu|fri|sat|sun) [0-9]{1,2} [a-z]{3,4} [0-9]{4}/i";

			if (!preg_match($pattern, strtolower($param), $matches)) {
				throw new Exception("Error: <strong>Hehe, i won't handle all format bro. Please follow the suggestion format</strong>");
			}

			$this->convertDate();
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