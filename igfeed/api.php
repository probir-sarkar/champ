<?php
	require_once( 'config.php' );

    Class IGFeed {
        private $_accessToken = ACCESS_TOKEN;

        public function getPosts(){
            $posts = $this->_api('https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url&access_token='.$this->_accessToken);
            return $posts['data'];
        }

        public function getPost($post_id){
            $post = $this->_api('https://graph.instagram.com/'.$post_id.'?fields=id,caption,media_type,media_url,username,timestamp&access_token='.$this->_accessToken);
            return $post;
        }

        public function test(){
            return $this->_api('https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url&access_token=' . $this->_accessToken);
        }

        private function _api($url) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);

            curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
			curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            $response = json_decode($output, true);
            if(isset($response['error_type'])){
                var_dump($response);
                die();
            }
            return $response;
        }
    }