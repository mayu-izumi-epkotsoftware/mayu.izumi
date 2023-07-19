 <?php
 class Math{
    public static function median(array $numbers){
        sort($numbers);
        if (count($numbers) % 2 == 0){
            return (($numbers[(count($numbers)/2)-1]+$numbers[((count($numbers)/2))])/2);
        }else{
            return ($numbers[floor(count($numbers)/2)]);
        }
    }
}

$result = \Math::median([20, 30, 10]);
var_dump($result); // 20