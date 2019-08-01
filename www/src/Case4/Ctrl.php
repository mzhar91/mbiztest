<?php

namespace Persoalan\Case4;

require_once "../../vendor/autoload.php";

use Persoalan\Result;

class Ctrl extends Func implements Result
{
	public function __construct($param)
	{
		if (!empty($param)) {
			$this->Params = $param;
			$this->convert();
		}
	}

	public function getResult()
	{
		return $this->Result;
	}
}