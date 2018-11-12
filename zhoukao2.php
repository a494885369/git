<?php
//1.四个数字组成不同三位数
$arr=array("1","2","3","4");
$len=count($arr);
for($i=0; $i<$len ; $i++) { 
	 for ($j=0; $j<$len ; $j++) { 
	      for ($k=0; $k<$len ; $k++) { 
	      	  	if($arr[$i]!=$arr[$j]&&$arr[$j]!=$arr[$k]&&$arr[$i]!=$arr[$k])
	      	  	{
	      	  		echo $arr[$i].$arr[$j].$arr[$k]."<br>";
	      	  	}
	        }	  
	  } 
}
//2.单例模式

	
	class Single{
    public $hash;
    static protected $ins=null;
    final protected function __construct(){
        $this->hash=rand(1,9999);
    }

    static public function getInstance(){
        if (self::$ins instanceof self) {
            return self::$ins;
        }
        self::$ins=new self();
        return self::$ins;
    } 
}

//3.遍历文件夹、
function get_all_files( $path ){
  $list = array();
  foreach( glob( $path . '/*') as $item ){
    if( is_dir( $item ) ){
     $list = array_merge( $list , get_all_files( $item ) );
    }
    else{
     $list[] = $item;
    }
  }
  return $list;
}
$path="E:\wamp\Apache\htdocs\PMP";
var_dump(get_all_files($path)) ;
echo "<br>";

//4.求公共部分
function findCommonPath($aPath,$bPath)
{ 
    $count1=strlen($aPath);
    $count2=strlen($bPath);
   if($count1>$count2)
   {
   	$count=$count1;
   }else{
   	$count=$count2;
   }
   $path="";
         for ($i=0;$i<$count;$i++) { 
               if(substr($aPath,$i,1)==substr($bPath,$i,1))
               {
               	  $path.=substr($aPath,$i,1);
               }
               else{
               	return $path;
               }
         }
}
$aPath="/a/b/c/d/test.php";
$bPath="/a/b/e/f/test.php";
echo findCommonPath($aPath,$bPath);
echo "<br>";
//5.倒计时
$time1=strtotime(date("Y-m-d H:i:s"));
$time2=strtotime("2019-1-1 00:00:00");
$time=$time2-$time1;//时间差
$tian=floor($time/86400);//算出还有几天
$time=$time-($tian*86400);
$shi=floor($time/3600);//算出还有几个小时
$time=$time-($shi*3600);
$fen=floor($time/60);//算出还有几分钟
$time=$time-($fen*60);
echo "距离元旦还剩".$tian."天".$shi."小时".$fen."分".$time."秒";
?>