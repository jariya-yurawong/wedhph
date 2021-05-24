
<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <link rel ="stylesheet" type="text/css"href="mystyle.css">
    </head>
    <body>
    <div align="center">
  <?php
     
       if(($num>100)||($num<0)) {    
         print "เกรดที่ได้  : ไม่สามารถคิดเกรดได้ คะแนนเกิน".'<br>';   
      }
      else if (($num>=79.5)&&($num<=100)) {    
         print "เกรดที่ได้  : A".'<br>';   
      }
       else if (($num>=74.5)&&($num<=79.4)) {    
         print "เกรดที่ได้  : B+".'<br>';   
      }
       else if (($num>=69.5)&&($num<=74.4)) {       
         print "เกรดที่ได้  : B".'<br>';   
      }
       else if (($num>=64.5)&&($num<=69.4)) {
            print "เกรดที่ได้  : C+".'<br>';   
      }
       else if (($num>=59.5)&&($num<=64.4)) {    
         print "เกรดที่ได้  : C".'<br>';   
      }
       else if (($num>=54.5)&&($num=59.4)) {            
         print "เกรดที่ได้  : D+".'<br>';   
      }
       else if (($num>=49.5)&&($num<=54.4)) {       
         print "เกรดที่ได้  : D".'<br>';   
      }
       else if ($num<=49.4) {       
         print "เกรดที่ได้  : E หรือ F".'<br>';   
      }    

   
   ?>
</div>
    </body>
</html>
<?php
       

      