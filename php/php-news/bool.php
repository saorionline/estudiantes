<?php

$dog_cans = true;
$dog_4_legs = true;
$dog_flies = false;
$dog_coder = false;

var_dump ( $dog_cans && $dog_4_legs);
var_dump ( $dog_cans && $dog_flies);
var_dump ( $dog_cans || $dog_flies);
var_dump ( $dog_coder && $dog_4_legs);
var_dump ( $dog_coder || $dog_4_legs);
var_dump ( !$dog_cans );
