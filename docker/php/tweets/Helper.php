<?php

class Helper{
    public static function convertToViewData(array $tweetsResponse){
        foreach($tweetsResponse['data'] as $i => $str){
            $data = [];
            $data['tweet_id'] = $tweetsResponse['data'][$i]['id'];
            $data['tweet_text'] = $tweetsResponse['data'][$i]['text'];
            if($tweetsResponse['data'][$i]['author_id'] != null){
                $data['user_id'] = $tweetsResponse['data'][$i]['author_id'];
            }else{
                $data['user_id'] = "";
            }
            if($tweetsResponse['data'][$i]['username'] != null){
                $data['user_name'] = $tweetsResponse['data'][$i]['username'];
            }else{
                $data['user_name'] = "";
            }
            if($tweetsResponse['data'][$i]['name'] != null){
                $data['user_display_name'] = $tweetsResponse['data'][$i]['name'];
            }else{
                $data['user_display_name'] = "";
            }
            return $data;
        }
    }
}

// 引数
$tweets = [
    'data' => [
        [
            'text' => 'ツイート001',
            'id' => '1001',
        ],
    ],
];
// 実行
$result = Helper::convertToViewData($tweets);
var_dump($result);