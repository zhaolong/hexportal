<?php
# Copyright (c) 2009, cPanel, Inc.
# All rights reserved.
#
# Redistribution and use in source and binary forms, with or without modification, are permitted provided 
# that the following conditions are met:
#
# * Redistributions of source code must retain the above copyright notice, this list of conditions and the 
#   following disclaimer.
# * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the 
#   following disclaimer in the documentation and/or other materials provided with the distribution.
# * Neither the name of the cPanel, Inc. nor the names of its contributors may be used to endorse or promote 
#   products derived from this software without specific prior written permission.
#
# THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED 
# WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A 
# PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR 
# ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED 
# TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) 
# HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING 
# NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE 
# POSSIBILITY OF SUCH DAMAGE.

class xmlapi {
	public $host;
	public $curl;
	
	private $port = 2087;
	private $protocol = "https://";
	private $debug = 0;
	private $return_xml = 0;

	function __construct($host) {
		$this->host = $host;
		$this->curl = curl_init();								# Create Curl Object
		curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER,0);
 		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER,1);		# Return contents of transfer on curl_exec
		curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST,0);		# Allow self-signed certs
	}
	
	function __destruct() {
		curl_close($this->curl);								# destroy curl object on unset
	}
	
	public function set_debug($debug) {
		$this->debug = $debug;
	}
	
	public function set_port($port) {
		$this->port = $port;
		if ($port == "2087" || $port == "2083" || $port == "443") {
			$this->protocol = "https://";
		} else {
			$this->protocol = "http://";
		}
	}
	
	public function return_xml($value = 1 ) {
		$this->return_xml = 1;
	}
	
	public function return_object($value = 1) {
		$this->return_xml = 0;
	}
	
	public function password_auth($username,$password) {
		curl_setopt($this->curl, CURLOPT_USERPWD, $username.":".$password);
	}
	
	public function hash_auth($user,$hash) {
		$hash = preg_replace("/(\n|\r|\s)/", '', $hash);
		$header[0] = "Authorization: WHM $user:" . $hash;
		curl_setopt($this->curl,CURLOPT_HTTPHEADER,$header);
	}

	public function xmlapi_query($function, $calls = array()) {
		if (!$function) {
			error_log("xmlapi_query() requires a function to be passed to it");
			return;
		}
		
		$args = http_build_query($calls,'','&');
		$query =  $this->protocol . $this->host . ":" . $this->port . "/xml-api/" . $function . "?" . $args;

		if ($this->debug) {
			print "\n\nQUERY:\n" . $query . "\n\n";
		}

		curl_setopt($this->curl, CURLOPT_URL, $query);
		$result = curl_exec($this->curl);

		if ($result == false) {
			error_log("curl_exec threw error \"" . curl_error($this->curl) . "\" for $query");
		}

		if ($this->return_xml) {
			if ($this->debug) {
				print "RAW XML:\n\n$result\n\n";
			}
			return $result;
		} else {
			if ($this->debug) {
				print "RAW XML:\n\n$result\n\n";
				print "SIMPLEXML OBJ:\n\n" . var_dump(simplexml_load_string($result)) . "\n\n";
			}
			return simplexml_load_string($result);
		}

	}
	
	
	
	public function api1_query($user,$module,$function,$args) {
		$api_call = array(
			module => $module,
			func => $function,
			apiversion => "1",
			args => $args
		);
		
		$call = array(
			user => $user,
			xmlin => $this->build_api1_call($api_call),
		);
		
		return $this->xmlapi_query("cpanel",$call);
	}
	
	public function api2_query($user,$module,$function,$args) {
		$api_call = array(
			module => $module,
			func => $function,
			args => $args
		);
		
		$call = array(
			user => $user,
			xmlin => $this->build_api2_call($api_call)
		);
		return $this->xmlapi_query("cpanel",$call);
	}
	
	public function build_api2_call($input) {
		$output = "<cpanelaction>";
		foreach($input as $tag => $data) {
			if (is_array($data)) {
				$output .= "<args>";
				foreach ($data as $arg_tag => $arg) {
					$output .= "<$arg_tag>" . $arg . "</$arg_tag>";
				}
				$output .= "</args>";
			} else {
		   	$output .= "<$tag>" . $data . "</$tag>";
			}
		}
		$output .= "</cpanelaction>";
		if ($this->debug) {
			print "\n\nRAW API2 CALL:\n" . $output . "\n\n";
		}
		return $output;
	}

	public function build_api1_call($input) {
		$output = "<cpanelaction>";
		foreach($input as $tag => $data) {
			if (is_array($data)) {
				foreach ($data as $arg) {
					$output .= "<args>" . $arg . "</args>";
				}
			} else {
		   	$output .= "<$tag>" . $data . "</$tag>";
			}
		}
		$output .= "</cpanelaction>";
		if ($this->debug) {
			print "\n\nRAW API1 CALL:\n" . $output . "\n\n";
		}
		return $output;
	}
	
	####
	#  XML API Functions
	####
	
	####
	# Accounting
	####
	
	
	####
	# createacct($accthash)
	# This needs to be passed in a hash where username, password and domain are all defined.
	# all other arguments are optional
	####
	public function createacct($acctinfo) {
		if (!isset($acctinfo['username']) || !isset($acctinfo['password']) || !isset($acctinfo['domain'])) {
			error_log("createacct requires that username, password & domain elements are in the array passed to it");
			return 0;
		}
		return $this->xmlapi_query("createacct", $acctinfo);
	}
	
	
	public function removeacct($username) {
		if (!isset($username)) {
			error_log("killacct requires that a username is passed to it");
			return 0;
		}
		return $this->xmlapi_query("removeacct",array("user" => $username));
	}
	
	public function passwd($user,$pass){
		if (!isset($user) || !isset($pass)) {
			error_log("passwd requires that (username,password) are passed to it");
			return 0;
		}
		return $this->xmlapi_query("passwd", array("user" => $user, "pass" => $pass));
	}
	
	public function listaccts($searchtype = null, $search = null) {
		if ($search) {
			return $this->xmlapi_query("listaccts", array( "searchtype" => $searchtype, "search" => $search ) );
		} else {
			return $this->xmlapi_query("listaccts");
		}
	}
	
	public function accountsummary($username) {
		if (!isset($username)) {
			error_log("accountsummary requires that a username is passed to it");
			return 0;
		}
		return $this->xmlapi_query("accountsummary",array(user => $username));
	}
	
	public function suspendacct($username, $reason = null) {
		if (!isset($username)) {
			error_log("suspendacct requires that a username is passed to it");
			return 0;
		}
		if ($reason) {
			return $this->xmlapi_query("suspendacct",array( "user" => $username, "reason" => $reason ));
		} else {
			return $this->xmlapi_query("suspendacct", array("user" => $username));
		}
	}
	
	public function unsuspendacct($username){
		if (!isset($username)) {
			error_log("unsuspendacct requires that a username is passed to it");
			return 0;
		}
		return $this->xmlapi_query("unsuspendacct", array("user" => $username));
	}
	
	public function modifyacct($opts) {
		if (!isset($opts['user'])) {
			error_log("modifyacct requires that user is defined in the array passed to it");
			return 0;
		}
		return $this->xmlapi_query("modifyacct",$opts);
	}
	
	####
	# Package Functions
	####
	
	public function addpkg($pkg) {
		if (!isset($pkg['name'])) {
			error_log("addpkg requires that name is defined in the array passed to it");
			return 0;
		}
		return $this->xmlapi_query('addpkg', $pkg);
	}

	public function killpkg($pkg) {
		if(!isset($pkg)) {
			error_log("killpkg requires that the package name is passed to it");
			return 0;
		}
		return $this->xmlapi_query('killpkg',array("pkg" => $pkg));
	}
	
	public function editpkg($pkg) {
		if (!$isset($pkg['name'])) {
			error_log("editpkg requires that name is defined in the array passed to it");
			return 0;
		}
		return $this->xmlapi_query("editpkg",$pkg);
	}
	
	public function listpkgs() {
		return $this->xmlapi_query('listpkgs');
	}
	
	####
	# Reseller Functions
	####
	
	public function setupreseller($user,$makeowner) {
		if (!isset($user) || !isset($makeowner)) {
			error_log("setupreseller requires that (user,makeowner) are passed to it");
			return 0;
		}
		return $this->xmlapi_query("setupreseller",array("user" => $user, "makeowner" => $makeowner));
	}
	
	public function unsetupreseller($user) {
		if (!isset($user)) {
			error_log("unsetupreseller requires that a reseller name is passed to it");
			return 0;
		}
		return $this->xmlapi_query("unsetupreseller",array("user"=>$user));
	}
	
	public function listresellers() {
		return $this->xmlapi_query('listresellers');
	}
	
	public function saveacllist($acl) {
		if (!isset($acl['acllist'])) {
			error_log("saveacllist requires that acllist is defined in the array passed to it");
			return 0;
		}
		return $this->xmlapi_query('saveacllist',$act);
	}
	
	public function setacls($acl) {
		if (!isset($acl['reseller'])) {
			error_log("setacls requires that reseller is defined in the array passed to it");
			return 0;
		}
		return $this->xmlapi_query("setacls", $acl);
	}
	
	public function terminatereseller($reseller,$terminatereseller) {
		if (!isset($reseller) || !isset($terminatereseller)) {
			error_log("terminatereseller requires that (reseller|terminatereseller) are passed to it");
			return 0;
		}
		$verify = "I%20understand%20this%20will%20irrevocably%20remove%20all%20the%20accounts%20owned%20by%20the%20reseller%20" . $reseller;
		return $this->xmlapi_query("terminatereseller",array("reseller" => $reseller, "terminatereseller" => $terminatereseller, "verify" => $verify));
	}
	
	####
	# Server Info
	####
	
	public function version() {
		return $this->xmlapi_query("version");
	}
	
	public function hostname() {
		return $this->xmlapi_query('hostname');
	}
	
	####
	# Service Functions
	####
	
	public function restartsrv($service) {
		if (!isset($service)) {
			error_log("restartsrv requires that service is passed to it");
			return 0;
		}
		return $this->xmlapi_query("restartservice",array('service' => $service));
	}
	
	public function applist() {
		return $this->xmlapi_query("applist");
	}
	
	public function myprivs() {
		return $this->xmlapi_query("myprivs");
	}
	
	public function sethostname($hostname) {
		if (!isset($hostname)) {
			error_log("sethostname requires that hostname is passed to it");
			return 0;
		}
		return $this->xmlapi_query("sethostname", array("hostname"=>$hostname));
	}
	
	public function addip($ip,$netmask) {
		if (!isset($ip,$netmask)) {
			error_log("addip requires that an IP address and Netmask are passed to it");
			return 0;
		}
		return $this->xmlapi_query("addip",array("ip"=>$ip,"netmask"=>$netmask));
	}
	
	public function delip($ip) {
		if (!isset($ip)) {
			error_log("delip requires that an IP is passed to it");
			return 0;
		}
		return $this->xmlapi_query("delip", array("ip"=>$ip));
	}
	
	public function listips() {
		return $this->xmlapi_query("listips");
	}

	####
	# DNS Functions
	####
	
	public function adddns($domain,$ip) {
		if (!isset($domain) || !isset($ip)) {
			error_log("adddns require that domain, ip are passed to it");
			return 0;
		}
		return $this->xmlapi_query("adddns", array("domain"=>$domain,"ip"=>$ip));
	}
	
	public function killdns($domain) {
		if (!isset($domain)) {
			error_log("killdns requires that domain is passed to it");
			return 0;
		}
		return $this->xmlapi_query("killdns", array("domain"=>$domain));
	}

	public function listzones() {
		return $this->xmlapi_query("listzones");
	}
	
	public function dumpzone($domain) {
		if (!isset($domain)) {
			error_log("dumpzone requires that a domain is passed to it");
			return 0;
		}
		return $this->xmlapi_query("dumpzone",array("domain"=>$domain));
	}
	
	public function lookupnsip($nameserver) {
		if (!isset($nameserver)) {
			error_log("lookupnsip requres that a nameserver is passed to it");
			return 0;
		}
		return $this->xmlapi_query("lookupnsip",array("nameserver"=>$nameserver));
	}

	public function loadavg() {
		return $this->xmlapi_query("loadavg");
	}
}

?>
