<?php
define('BASE_URL', '/entertaiments/app/');
define('BASE_URL_ADMIN', '/entertaiments/app/admin/');

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}

function getDateFormatVideos($date)
{
  $dateCreate=date_create($date);
  return date_format($dateCreate,"F d, Y");
}

function getFullName($firstName, $lastName)
{
  return $firstName . ' ' . $lastName;
}

function replaceUsername($username)
{
  $replaceSimbol = preg_replace('/\s*/', '', $username);
  $replaceLowerCase = strtolower($replaceSimbol);
  return $replaceLowerCase;
}
