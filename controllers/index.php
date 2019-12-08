<?php


$title = "home page";

$tasks = $app['database']->selectAll('todos');

require "views/index.view.php";