<?php

namespace Persoalan;

use Exception;

class Request
{
	public static function handler()
	{
		try {
			if ($_SERVER["REQUEST_METHOD"]) {
				if ($_SERVER["REQUEST_METHOD"] !== "GET") {
					throw new Exception("Method not allowed <span class='float-right'><small>Allowed</small>: <strong>GET</strong></span>");
				}
			}
		} catch (Exception $e) {
			echo "
				<div class=\"alert alert-danger\" role=\"alert\">
					" . $e->getMessage() . "
				</div>
				";
		}

		return $_GET;
	}
}