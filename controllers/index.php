<?php


$tasks = $database->fetchAll('todos');

require "views/index.view.php";