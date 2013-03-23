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
		trigger_error("Not implemented.", E_ERROR);
	}

	public function register($domain,$duration){
		trigger_error("Not implemented.", E_ERROR);
	}

	public function delete($domain){
		trigger_error("Not implemented.", E_ERROR);
	}

	public function renew($domain,$duration){
		trigger_error("Not implemented.", E_ERROR);
	}

	public function getNameservers($domain){
		trigger_error("Not implemented.", E_ERROR);
	}

	public function setNameservers($domain,$ns){
		trigger_error("Not implemented.", E_ERROR);
	}

	public function setRenewOptions($domain,$option){
		trigger_error("Not implemented.", E_ERROR);
	}

	public function setFolder($domain,$folder){
		trigger_error("Not implemented.", E_ERROR);
	}
}
?>