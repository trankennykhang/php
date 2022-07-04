<?php
// Author: HishamDalal@gamil.com
// Publish on: 2017-08-28

class users
{
    private $users = null;
    private $i = 5;

    function __construct(){
        // Get users from database
        $this->users = array('a', 'b', 'c', 'd', 'e', 'f');
    }

    function displayUsers($callback){
        for($n=0; $n<=$this->i; $n++){
            echo  $callback($this->users[$n], $n);
        }
    }

    function showUsers($callback){
        return $callback($this->users);

    }

    function getUserByID($id, $callback){
        $user = isset($this->users[$id]) ? $this->users[$id] : null;
        return $callback($user);
    }

}

$u = new users();

$u->displayUsers(function($username, $userID){
    echo "$userID -> $username<br>";
});

$u->showUsers(function($users){
    foreach($users as $user){
        echo strtoupper($user).' ';
    }

});

$x = $u->getUserByID(2, function($user){

    return "<h1>$user</h1>";
});

echo ($x);
?>