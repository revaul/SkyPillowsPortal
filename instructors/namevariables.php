<?php
        $a=date("N");
        $b=date("G");
      $c=0;
      if (($a==5) && ($b>15) && ($b<17)):
      $c=1;
      endif;
      $s1n="Sky Pillows";
      $s1r="Ryan";
      
      $s2n="Kirby";
      $s2r="Julianne";
      
      $s3n="Jeeves";
      $s3r="Jeremy";
      
      $s4n="Zero";
      $s4r="Chase";
      
      $s5n="Link";
      $s5r="Ethan";
      
      $s6n="Bread";
      $s6r="James";
      
      $s7n="Expo";
      $s7r="Spencer";
      
      if ($c==1):
      $s1n=$s1r;
      $s2n=$s2r;
      $s3n=$s3r;
      $s4n=$s4r;
      $s5n=$s5r;
      $s6n=$s6r;
      $s7n=$s7r;
      endif;
      
      ?>
