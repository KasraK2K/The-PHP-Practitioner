<?php


$tasks = $app['database']->fetchAll('todos');

require "views/index.view.php";