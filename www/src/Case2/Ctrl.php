<?php

namespace Persoalan\Case2;

require_once "../../vendor/autoload.php";

use Persoalan\Result;

class Ctrl extends Func implements Result
{
	public function __construct($param)
	{
		if (!empty($param)) {
			$this->Params = $param;

			if (isset($param["check"])) {
				$this->convertRegex();
			} else {
				$this->convertDate();
			}
		}
	}

	public function getResult()
	{
		return $this->Result;
	}
}