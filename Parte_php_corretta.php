<?php
      if(isset($_POST["submit"]))
      {
        $ore=(float)$_POST["ore"];
        $giorni=(float)$_POST["giorni"];
        $compenso=(float)$_POST["compenso"];
        $totale=0;
        $totale=$compenso*$giorni*$ore;
        if($ore<0 || $giorni<0 || $compenso<0)
        {
           echo"Valori errati, riprovare";
        }
        else
        {

        

        
        echo "guadagnerai $totale euro per $giorni giorni per $ore ore al giorno";
        }
      }



      ?>
