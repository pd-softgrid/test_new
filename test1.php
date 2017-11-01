<?php
ini_set('display_errors', 'On');
//include 'test.php';
//class cool extends xyz
//{
//    function test()
//    {
//        return $this->cool('pro');
//    }
//    function __isset($name)
//    {
//        echo "__isset is called for $name";
//    }
//    function __unset($name)
//    {
//        echo "__unset is called for $name";
//    }
//}
//
//$t = new cool('test1','test2');
//echo "<pre>";print_r($t->cool('sfas'));
//isset($t->x);
//unset($t->c);

//echo xyz::$name;
//
//echo "<hr>";
//abstract class abc
//{
//    public function xyz()
//    {
//        return 1;
//    }
//}
//
//class abcChild extends abc
//{
//    public function ttt()
//    {
//        return 'ok';
//    }
//}
//$a = new abcChild();//this will throw error in php
//echo $a->ttt();
//echo "<hr>";
//
//abstract class abc1
//{
//    abstract protected function f1($a , $b);
//}
//class abc1Child extends abc
//{
//    function f1($name , $address)
//    {
//        echo "$name , $address";
//    }
//}
//$a = new abc1Child();
//echo "<pre>";
//print_r($a->f1('t','k'));


$t[1] = 'me';
$t['one'] = 'me1';
$t[2] = 'me2';
$t['two'] = 'me3';



$t1[1] = 'u';
$t1['three'] = 'u1';
$t1[3] = 'u2';
$t1['two'] = 'u3';

$a = array_combine($t1, $t);

echo "<pre>";print_r($a);

?>

