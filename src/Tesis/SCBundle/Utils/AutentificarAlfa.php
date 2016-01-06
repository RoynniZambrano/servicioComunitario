<?php 

namespace Tesis\SCBundle\Utils;

/*
* class provide for somebody in FACYT
*/
class AutentificarAlfa {
	private $login;
	private $passwd;
	private $host; 
	private $port; 
	private $dn; 
	private $base; 
	
	public function getLogin(){ return $this->login; }
	public function setLogin($x){ $this->login=$x; }
	public function getPasswd(){ return $this->passwd; }
	public function setPasswd($x){ $this->passwd=$x; }
	public function getHost(){ return $this->host; }
	public function setHost($x){ $this->host=$x; }
	public function getPort(){ return $this->port; }
	public function setPort($x){ $this->port=$x; }
	public function getDn(){ return $this->dn; }
	public function setDn($x){ $this->dn=$x; }
	public function getBase(){ return $this->base; }
	public function setBase($x){ $this->base=$x; }

	public function __construct($login,$pass){
		$this->setLogin($login);	
		$this->setPasswd($pass);	
		
		$this->setHost("alfa.facyt.uc.edu.ve");	
		$this->setPort(389);	
	    $this->setDn('uid='.$login.',ou=people,dc=facyt,dc=uc,dc=edu,dc=ve'); // modificar respecto a los valores del LDAP
	    $this->setBase(' ');
	}
	
	public function conectarse(){
		/*
		$conn= ldap_connect($this->getHost(),$this->getPort());
	    ldap_set_option($conn, LDAP_OPT_PROTOCOL_VERSION, 3);
		$bind= ldap_bind($conn,$this->getDn(),$this->getPasswd());
		ldap_close($conn);
		
		if($bind) 
			return 1; 
		return 0;
		*/
  		
  		// for test porpuse
  		return 1;
 
	}
	
} 
