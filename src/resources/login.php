<?php 

use \Janrain\Union\Services\Repo\User\UserRepo as Repo;

$user = new Repo;
$user = $user->find($_POST['token']);

echo "Hello {$user->profile->displayName}";
