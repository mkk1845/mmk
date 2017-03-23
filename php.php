<?php
$a=array(1,3,9,8,7);
$max=0;
for($i=0;$i<count($a);$i++)
{   
    if($max<$a[$i])
    {
        $max=$a[$i];    
    }
    
}	
echo $max;
?>

