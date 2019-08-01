<?php

namespace Persoalan\Case4;

use Exception;

abstract class Func
{
	protected $Params;
	protected $Result;

	protected function convert()
	{
		try {
			$param1  = (int) $this->Params["param1"];
			$param2  = (int) $this->Params["param2"];
			$result  = "";
			$numbers = ["zero", "one", "two", "three", "four",
			            "five", "six", "seven", "eight", "nine",
			            "ten", "eleven", "twelve", "thirteen",
			            "fourteen", "fifteen", "sixteen", "seventeen",
			            "eighteen", "nineteen", "twenty", "twenty one",
			            "twenty two", "twenty three", "twenty four",
			            "twenty five", "twenty six", "twenty seven",
			            "twenty eight", "twenty nine"];

			if (!isset($numbers[$param1])) {
				throw new Exception("Error: <strong>Oops, are you sure following input instruction?</strong>");
			}

			if (!isset($numbers[$param2]) && !isset($numbers[60 - $param2])) {
				throw new Exception("Error: <strong>Oops, are you sure following input instruction?</strong>");
			}

			if ($param2 === 0) {
				$result = $numbers[$param1] . " o' clock";
			} elseif ($param2 === 1) {
				$result = "one minute past " . $numbers[$param1];
			} elseif ($param2 === 59) {
				$result = "one minute to " . $numbers[($param1 % 12) + 1];
			} elseif ($param2 === 15) {
				$result = "quarter past " . $numbers[$param1];
			} elseif ($param2 === 30) {
				$result = "half past " . $numbers[$param1];
			} elseif ($param2 === 45) {
				$result = "quarter to " . ($numbers[($param1 % 12) + 1]);
			} elseif ($param2 <= 30) {
				$result = $numbers[$param2] . " minutes past " . $numbers[$param1];
			} elseif ($param2 > 30) {
				$result = $numbers[60 - $param2] . " minutes to " . $numbers[($param1 % 12) + 1];
			} else {
				throw new Exception("Error: <strong>Oops, are you sure following input instruction?</strong>");
			}

			$this->Result = $result;
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