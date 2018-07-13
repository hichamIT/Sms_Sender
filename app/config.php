<?php


defined("DB_HOST") ? null : define("DB_HOST","localhost");
defined("DB_USER") ? null : define("DB_USER","root");
defined("DB_PASS") ? null : define("DB_PASS","");
defined("DB_NAME") ? null : define("DB_NAME","sms");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$config = [

    'account_sid' => 'AC926fd2c782bddab669ac8f9a2ad',
    'auth_token' => '9c6fdc7e40048c7408bec529f4',
    'phonenumber' => '191029'


];