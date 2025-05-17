<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Nhpiash\InputFilter\InputFilter;

$name    = InputFilter::getString($_POST['name'] ?? '');
$email   = InputFilter::getEmail($_POST['email'] ?? '');
$website = InputFilter::getSanitizedURL($_POST['website'] ?? '');
$agree   = InputFilter::getBoolean($_POST['agree'] ?? '');

echo "Name: $name<br>Email: $email<br>Website: $website<br>Agreed: " . ($agree ? 'Yes' : 'No');
?>