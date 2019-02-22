<?php 
$limit = stripcslashes($_GET['lim']); 
$count = 0; 
$num = 2;  
$num_arr = '';
while ($count < $limit )  
{  
$div_count=0;  
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$div_count++;  
}  
}  
if ($div_count<3)  
{ 
 $num." , ";  
$count=$count+1;  
if($num < $limit )
 {$num_arr.= $num.",";}
}  
$num=$num+1;  
}  


header('Content-Type: application/xml');
$output = "<root><initial>$limit</initial><primes>$num_arr</primes></root>";
print ($output);
 


?> 
