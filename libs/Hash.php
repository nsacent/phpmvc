<?php
class Hash{
	
	/**
	 * 
	 * @param string $algo
	 * @param string $pass
	 * @param string $salt
	 * @return string
	 */
	public static function create($algo,$pass){
		
		$result=hash_init($algo,HASH_HMAC,HASH_KEY);
		hash_update($result, $pass);
		return hash_final($result);
		
	}
}