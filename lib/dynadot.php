<php
class Dynadot{
	
	public $key;

	public function __construct($key){
		$this->key = $key;
	}

	private function call($params){
		curl_setopt($ch, CURLOPT_URL, "https://api.dynadot.com/api2.html?key=".$this->$key."&".$params);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$data = explode(',',curl_exec($ch));
		curl_close($ch);
		return $data;
	}

	public function search($domains){
		throw new Exception('Not implemented.');
	}

	public function register($domain,$duration){
		throw new Exception('Not implemented.');
	}

	public function delete($domain){
		throw new Exception('Not implemented.');
	}

	public function renew($domain,$duration){
		throw new Exception('Not implemented.');
	}

	public function getNameservers($domain){
		throw new Exception('Not implemented.');
	}

	public function setNameservers($domain,$ns){
		throw new Exception('Not implemented.');
	}

	public function setRenewOptions($domain,$option){
		throw new Exception('Not implemented.');
	}

	public function setFolder($domain,$folder){
		throw new Exception('Not implemented.');
	}
}
?>