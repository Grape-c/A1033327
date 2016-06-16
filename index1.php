<?php
class PostOffice {
	
     
    function mailFiler() {
        $myfile="string.txt";
        if (file_exists($myfile)) 
           {
             $file=fopen($myfile,"r");
             fpassthru($file);
             echo "$myfile";
        }else
           {
             echo "檔案不存在";
        }
    }
    function mailRegex(){
    	$myfile="string.txt";
    	$char=array('a-z','A-Z','1-0');
  
  for($i=0;$i<5;$i++)
  {
    echo "<br>\n";
    echo $char[$i];
    $char[$i]=htmlspecalchars($char[$i]);
    echo "　←→　";
    echo $char[$i];

    }
}
   function spiltroad(){
   }
   $myfile="road.txt";
   $tok_str = strtok($myfile, " \n");
     while ($tok_str !== false) {
　       echo "$tok_str<br />";
　       $tok_str = strtok(" \n");
}


 

?>