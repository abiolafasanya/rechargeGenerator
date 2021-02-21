


<h1>Recharge pin</h1>
<ol>

  
                <?php
                // recharge pin generator

                $pinRand = rand(100, 1000000000);
                
                for($x = 100; $x <=299; $x++ ){
                    echo 
                    '<li>'.
                    'Recharge Pin Number:'. '<br>'
                    .$pinRand.$x. '<br>'.
                    '</li>'
                    ;                
                }
                ?>

</ol>


