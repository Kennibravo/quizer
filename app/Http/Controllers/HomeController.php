<?php 

namespace App\Http\Controllers;

public function getHome{
	$name = "Alade Kehinde";
	return view('home')->with("fullname", $name);
}