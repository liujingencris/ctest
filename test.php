<?php

/** 04题
 * @param $date
 * @return int
 */
 function getDay($date)
{
    $month = intval(date('m',$date));//当前时间的月份
    $fyear = strtotime(date('Y-01-01',$date));//今年第一天时间戳
    $fdate = intval(date('N',$fyear));//今年第一天 周几
    $sysweek = intval(date('W',$date));//系统时间的第几周
    //大于等于52 且 当前月为1时， 返回1
    if(($sysweek >= 52 && $month == 1)){
        return 1;
    }elseif($fdate == 1){
        //如果今年的第一天是周一,返回系统时间第几周
        return $sysweek;
    }else{
        //返回系统周+1
        return $sysweek + 1;
    }
}

echo getDay("2019-08-23");

 /**
  * 05 题
  *
  */
 function change_str($path)
 {
     echo strtolower(preg_replace('/(?<=[a-z])([A-Z])/', '_$1', $path));
 }

 /**
  * 06 题
  */
 function get_arr($arr)
 {
     $arr2 = [];
     foreach ($arr as $v){
         if($v['fid'] ==1){
             $arr2[] = [
                 'tid'=> $v['tid'],
                 'name'=>$v['name'],
             ];
         }
         if($v['fid'] == 5){
             $arr2[] = [
                 'tid'=>$v['tid'],
                 'name'=>$v['name'],
             ];
         }
         if($v['fid'] == 3){
             $arr2[] = [
                 'tid'=>$v['tid'],
                 'name'=>$v['name'],
             ];
         }
     }
     return $arr2;
 }

 // 07
 function array_has($array, $key)
 {
//     $array = ['product'=>['name'=>'desk','price'=>100]];
     // array_has($array, 'product.name')
     $arr = explode('.',$array);
     $flag = true;
     foreach ($arr as $v){
         return array_key_exists($v,$array) ?  :$flag = false;
     }
     return $flag;
 }

 //08
//(1)
$sql_1 = 'SELECT city,c.id,province FROM city as c INNER JOIN province as p on c.province_id = p.id ';

 //2
 $sql_2 = 'SELECT c.province_id,p.province,COUNT(c.province_id) as city_num FROM city c LEFT JOIN province as p ON c.province_id = p.id';
 //3
 $sql_3 = 'SELECT p.province FROM city c LEFT JOIN province as p ON c.province_id = p.id where COUNT(c.province_id) < 15';