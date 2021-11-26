<?php

// f(5)
for ($i=0; $i <= 4; $i++)  {  
    for ($j=0; $j <= $i; $j++)  {  
      echo " ";  
    }  
    for ($k=0; $k <= 4-$i; $k++)  {  
      echo "* ";  
    }  
    echo"\n";  
}
  
for ($i=0; $i <= 4; $i++) { 	 
    for ($k = 4; $k > $i; $k--) {	  
      echo " ";	  
    }	
    for($j=0; $j <= $i; $j++)	{	  	
      echo " *";	  
    }	  	
    echo "\n";	
}

//   f(3)
for ($i=0; $i <= 2; $i++)  {  
    for ($j=0; $j <= $i; $j++)  {  
      echo " ";  
    }  
    for ($k=0; $k <= 2-$i; $k++)  {  
      echo "* ";  
    }  
    echo"\n";  
}
  
for ($i=0; $i <= 2; $i++) { 	 
    for ($k = 2; $k > $i; $k--) {	  
      echo " ";	  
    }	
    for($j=0; $j <= $i; $j++)	{	  	
      echo " *";	  
    }	  	
    echo "\n";	
}
?>