<?php

	
	namespace App\Classes;


	class Test{
		
		//Required for connecting to Twitter API
		
	public $settings = array(
		
		'oauth_access_token' => "",
		'oauth_access_token_secret' => "",
		'consumer_key' => "Fj2s3WEv7LowoajUcIMZisZKF",
		'consumer_secret' => "WQxfQQfMgaA23lhho7WbtdJcLiLVXFc0v3GxsulbbfrskKiOif"
		
		);
		
		public function __construct(){
			//$this->twitterName = $twitterName;
			$this->getDetails();
		}
		
		public function getDetails(){
			
			$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
			$getfield = '?screen_name=mike90901&count=20';
			$requestMethod = 'GET';
			$twitter = new \TwitterAPIExchange($this->settings);
			echo ($twitter->setGetfield($getfield)
						 ->buildOauth($url,$requestMethod)
						 ->performRequest()
						 );
		}
	}











?>