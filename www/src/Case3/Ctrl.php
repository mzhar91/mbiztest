<?php

namespace Persoalan\Case3;

require_once "../../vendor/autoload.php";

use Persoalan\Result;

class Ctrl extends Func implements Result
{
	public function __construct($param)
	{
		if (!empty($param)) {
			$this->Params = $param;
			$this->calculate();
		}
	}

	public function getResult()
	{
		return $this->Result;
	}
}