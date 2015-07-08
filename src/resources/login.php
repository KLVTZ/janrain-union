<?php 

use \Janrain\Union\Services\Repo\User\UserRepo as Repo;

$user = new Repo;
$user->find($_POST['token']);
