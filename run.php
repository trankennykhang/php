<?php
require_once 'ssh.php';

$ssh = new mySSH('192.168.15.127', 'kenny', '1qwas');
$shell = $ssh->get_shell();
?>
