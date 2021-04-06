<?php
require_once(__DIR__ . '/vendor/autoload.php');

$introvert = new \Amo\Introvert();
$result = $introvert->getLeadDateJ();

echo json_encode($result);