<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>YouTube Manager</title>
    </head>
    <body>

<FORM method=post action="youtube.php">

        <table align=center>
          <tbody>

          <center><font face="Comic Sans MS" color="#0000dd" size="5"> 
          Envoi vidéo Youtube -> HDMI Raspberry Pi
          </font></center>

          <br><center><font face="Comic Sans MS" size="3">
          Entrez 9 URL YouTube maximum
          </font></center><br>
            
            
          <?php

          #Affiche les 9 zones de textes
          for($i = 1; $i < 10; $i++)
          {
            ?>
            <tr class="useless">
              <td> <input type="text" name="<?php echo $i; ?>" style="border:solid 1px grey" size="60"> </td>
            </tr>
            <?php
          }
            ?>
         
          </tbody>
        </table>
        <br><center><input type = "submit" value = "Envoyer le flux !"></center></br>
    </FORM>

    <?php

    $URL1 = $_POST['1'];
    $URL2 = $_POST['2'];
    $URL3 = $_POST['3'];
    $URL4 = $_POST['4'];
    $URL5 = $_POST['5'];
    $URL6 = $_POST['6'];
    $URL7 = $_POST['7'];
    $URL8 = $_POST['8'];
    $URL9 = $_POST['9'];

    /*Execution du script bash permettant de lancer les vidéos à la suite grâce aux URL donnés par le User*/
    shell_exec("./main.sh $URL1 $URL2 $URL3 $URL4 $URL5 $URL6 $URL7 $URL8 $URL9");
    ?>

  </body>
</html>