<?php

 $EZGLPI1 = $_POST['EZGLPI-1'];
 $EZGLPIA = $_POST['EZGLPI-A'];
 $EZGLPIB = $_POST['EZGLPI-B'];
 $EZGLPI3 = $_POST['EZGLPI-3'];
 $EZGLPI4 = $_POST['EZGLPI-4'];
 $EZGLPI5 = $_POST['EZGLPI-5'];
 $EZGLPI6 = $_POST['EZGLPI-6'];
 $EZGLPI7 = $_POST['EZGLPI-7'];
 $EZGLPI8 = $_POST['EZGLPI-8'];
 $EZGLPI9 = $_POST['EZGLPI-9'];
 $EZGLPIC = $_POST['EZGLPI-C'];
 $EZGLPID = $_POST['EZGLPI-D'];
 $EZGLPIE = $_POST['EZGLPI-E'];
 $EZGLPIF = $_POST['EZGLPI-F'];
 $EZGLPIG = $_POST['EZGLPI-G'];

 $EZGLPI2 = $_POST['EZGLPI-A'] . " " . $_POST['EZGLPI-B'];

 echo "Enviando Incidencia al GLPI...";

 $EZGLPI_CP = "cp /ezglpi/GLPI-AUTO.sh /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_CP));

 $EZGLPI_1 = "sed -i 's/EZGLPI-1/EZGLPI_1/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_1A = str_replace("EZGLPI_1", $EZGLPI1, $EZGLPI_1);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_1A));

 $EZGLPI_2 = "sed -i 's/EZGLPI-2/EZGLPI_2/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_2A = str_replace("EZGLPI_2", $EZGLPI2, $EZGLPI_2);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_2A));

 $EZGLPI_3 = "sed -i 's/EZGLPI-3/EZGLPI_3/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_3A = str_replace("EZGLPI_3", $EZGLPI3, $EZGLPI_3);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_3A));

 $EZGLPI_4 = "sed -i 's/EZGLPI-4/EZGLPI_4/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_4A = str_replace("EZGLPI_4", $EZGLPI4, $EZGLPI_4);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_4A));

 $EZGLPI_5 = "sed -i 's/EZGLPI-5/EZGLPI_5/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_5A = str_replace("EZGLPI_5", $EZGLPI5, $EZGLPI_5);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_5A));

 $EZGLPI_6 = "sed -i 's/EZGLPI-6/EZGLPI_6/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_6A = str_replace("EZGLPI_6", $EZGLPI6, $EZGLPI_6);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_6A));

 $EZGLPI_7 = "sed -i 's/EZGLPI-7/EZGLPI_7/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_7A = str_replace("EZGLPI_7", $EZGLPI7, $EZGLPI_7);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_7A));

 $EZGLPI_8 = "sed -i 's/EZGLPI-8/EZGLPI_8/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_8A = str_replace("EZGLPI_8", $EZGLPI8, $EZGLPI_8);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_8A));

 $EZGLPI_9 = "sed -i 's/EZGLPI-9/EZGLPI_9/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_9A = str_replace("EZGLPI_9", $EZGLPI9, $EZGLPI_9);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_9A));

 $EZGLPI_C = "sed -i 's/EZGLPI-C/EZGLPI_C/g' /ezglpi/temp/GLPI-AUTO-EZGLPI_C.sh";
 shell_exec(str_replace("EZGLPI_C", $EZGLPIC, $EZGLPI_C));

 $EZGLPI_D = "sed -i 's/EZGLPI-D/EZGLPI_D/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_DA = str_replace("EZGLPI_D", $EZGLPID, $EZGLPI_D);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_DA));

 $EZGLPI_E = "sed -i 's/EZGLPI-E/EZGLPI_E/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_EA = str_replace("EZGLPI_E", $EZGLPIE, $EZGLPI_E);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_EA));

 $EZGLPI_F = "sed -i 's/EZGLPI-F/EZGLPI_F/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_FA = str_replace("EZGLPI_F", $EZGLPIF, $EZGLPI_F);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_FA));

 $EZGLPI_G = "sed -i 's/EZGLPI-G/EZGLPI_G/g' /ezglpi/temp/GLPI-AUTO-EZGLPI-C.sh";
 $EZGLPI_GA = str_replace("EZGLPI_G", $EZGLPIG, $EZGLPI_G);
 shell_exec(str_replace("EZGLPI-C", $EZGLPIC, $EZGLPI_GA));

 shell_exec("sh /ezglpi/temp/GLPI-AUTO-{$_POST['EZGLPI-C']}.sh");

 sleep(2);

 shell_exec("rm /ezglpi/temp/GLPI-AUTO-{$_POST['EZGLPI-C']}.sh");

 echo " ";

 echo "Incidencia Enviada!";

?>
