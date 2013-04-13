<?php
class Dynadot{
	
	public $key;

	public function __construct($key){
		$this->key = $key;
	}

	private function call($command,$params){
		//TODO: Format return from dynadot
		echo $params;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.dynadot.com/api2.html?command=".$command."&key=".$this->key."&".$params);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$data = explode(',',curl_exec($ch));
		curl_close($ch);
		return $data;
	}

	public function search($domains){
		$i = 0;
		foreach($domains as $data){
			$params .= "&domain".$i."=".$data['domain'];
			$params .= (isset($data['language']) ?  "&language".$i."=".$data['language'] : '');
			$i++;
		}
		return $this->call('search',$params);
	}

	public function register($domain,$duration){
		//TODO: Allow optional fields option0,option1 and option2
		return $this->call('register',"&domain=".$domain."&duration=".$duration);
	}

	public function delete($domain){
		return $this->call('delete',"&domain=".$domain);
	}

	public function renew($domain,$duration){
		return $this->call('renew',"&domain=".$domain."&duration=".$duration);
	}

	public function getNameservers($domain){
		return $this->call('get_ns',"&domain=".$domain);
	}

	public function setNameservers($domain,$ns){
		$i = 0;
		$params = "&domain"."=".$domain;
		foreach($ns as $data){
			$params .= "&ns".$i."=".$data;
			$i++;
		}
		return $this->call('set_ns',$params);
	}

	public function setRenewOptions($domain,$option){
		return $this->call('set_renew_option',"&domain=".$domain."&renew-option=".$option);
	}

	public function setFolder($domain,$folder){
		return $this->call('set_folder',"&domain=".$domain."&folder=".$folder)
	}
}
?>