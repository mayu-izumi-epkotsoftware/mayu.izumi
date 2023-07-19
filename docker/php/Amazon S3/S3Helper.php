<?php
class S3Helper{
    public static function extractKeysFromListObjectsV2Response($listObjectsV2Response){
        $ListObjectsV2ResponseContentsKey = [];
        foreach($listObjectsV2Response['Contents'] as $listObjectsV2Response){
            $ListObjectsV2ResponseContentsKey[] = $listObjectsV2Response['Key'];
        }
        return $ListObjectsV2ResponseContentsKey;
    }
}

// 引数
$res = [
    'IsTruncated' => false,
    'Contents' => [
        ['ETag' => 'xxxxxxx', 'Key' => '1.txt'],
        ['ETag' => 'xxxxxxx', 'Key' => '2.txt'],
        ['ETag' => 'xxxxxxx', 'Key' => '3.txt'],
    ],
    'Name' => 'test',
    // NOTE: その他メンバーは省略
];
// 実行
$result = S3Helper::extractKeysFromListObjectsV2Response($res);
var_export($result); // array ( 0 => '1.txt', 1 => '2.txt', 2 => '3.txt', )