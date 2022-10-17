<?php

$password = 'PASSWORD A HASHEAR';

$hash = password_hash($password, PASSWORD_DEFAULT);

var_dump($hash);