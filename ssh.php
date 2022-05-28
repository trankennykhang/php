<?php
class mySSH {
	private $connection = NULL;
	
	function __construct($host, $username, $password, $port = '22') {
		$this->connection = ssh2_connect($host, $port);
		ssh2_auth_password($this->	connection, $username, $password);
	}
	public function get_shell() {
		$stream = ssh2_shell($this->connection, 'vt102', null, 80, 24, SSH2_TERM_UNIT_CHARS);
		return $stream;
	}
}
?>
