<?php
class Session{
	
	public static function init(){
		@session_start();
	}
	
	public static function set($key,$value){
		$_SESSION[$key]=$value;
	}
	
	public static function get($key){
		
		if (isset($_SESSION[$key]))
		return $_SESSION[$key];
	}
	
	public static function destroy(){
		
		//unset session first, then destroy
		unset($_SESSION);
		session_destroy();
	}
	
	
	/**
	 * Generates session id
	 * 
	 * 
	 * @param integer $maxLength, default is 128
	 * @return string|unknown
	 */
	public static function generateSessionId($maxLength = null) {
		$entropy = '';
	
		// try ssl first
		if (function_exists('openssl_random_pseudo_bytes')) {
			$entropy = openssl_random_pseudo_bytes(64, $strong);
			// skip ssl since it wasn't using the strong algo
			if($strong !== true) {
				$entropy = '';
			}
		}
	
		// add some basic mt_rand/uniqid combo
		$entropy .= uniqid(mt_rand(), true);
	
		// try to read from the windows RNG
		if (class_exists('COM')) {
			try {
				$com = new COM('CAPICOM.Utilities.1');
				$entropy .= base64_decode($com->GetRandom(64, 0));
			} catch (Exception $ex) {
			}
		}
	
		// try to read from the unix RNG
		if (is_readable('/dev/urandom')) {
			$h = fopen('/dev/urandom', 'rb');
			$entropy .= fread($h, 64);
			fclose($h);
		}
	
		$hash = hash('whirlpool', $entropy);
		if ($maxLength) {
			return substr($hash, 0, $maxLength);
		}
		return  $hash;
	}
	
}