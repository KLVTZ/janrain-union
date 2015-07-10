<?php 
use \Janrain\Union\Services\Repo\User\UserRepo as Repo;

$user = new Repo;
$user = $user->find($_POST['token']);

var_dump($user); die();

