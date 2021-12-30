<?php

$a[] = "bagerhat";
$a[] = "Bandarban";
$a[] = "Chittagong Hill Tracks";
$a[] = "Cox’s Bazar";
$a[] = "Nafakhum Waterfalls";
$a[] = "Feni";
$a[] = "Amiakhum,Bandarban";
$a[] = "Debotakhum ";
$a[] = "Kuyakata";
$a[] = "Tanguar haor";
$a[] = "Shitakundo,Chittagong";
$a[] = "Lalmonir hat";
$a[] = "Sajek";
$a[] = "Sylhet";
$a[] = "Tetulia";
$a[] = "Kaptai Lake";
$a[] = "Rangamati";
$a[] = "Paharpur";
$a[] = "Jaflong:";
$a[] = "Bisanakandi";
$a[] = "Star Mosque";
$a[] = "Ahsan Manzil";
$a[] = "Lalakhal";
$a[] = "Ratatgul Swamp Forest";
$a[] = "Sundarbans";
$a[] = "Srimagal";
$a[] = "Saint Martin";
$a[] = "Mainamati";
$a[] = "Sonargaon";
$a[] = "Foy’s Lake";


$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "no suggestion" : $hint;
?>