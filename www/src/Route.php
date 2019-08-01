<?php

namespace Persoalan;

define("PORT", ":8081");
define("BASEURL", "http://" . $_SERVER["SERVER_NAME"] . PORT);

class Route
{
	private $BASE_URL;

	public function __construct()
	{
		$this->BASE_URL = BASEURL;
	}

	public static function getBaseUrl()
	{
		return BASEURL;
	}

	public function getRoutes()
	{
		return [
			"case1" => [
				"name"  => "Case 1",
				"path"  => $this->BASE_URL . "/src/Case1/Main.php",
				"style" => "primary"
			],
			"case2" => [
				"name"  => "Case 2",
				"path"  => $this->BASE_URL . "/src/Case2/Main.php",
				"style" => "secondary"
			],
			"case3" => [
				"name"  => "Case 3",
				"path"  => $this->BASE_URL . "/src/Case3/Main.php",
				"style" => "success"
			],
			"case4" => [
				"name"  => "Case 4",
				"path"  => $this->BASE_URL . "/src/Case4/Main.php",
				"style" => "info"
			],
			"case5" => [
				"name"  => "Case 5",
				"path"  => $this->BASE_URL . "/src/Case5/Main.php",
				"style" => "warning"
			]
		];
	}
}