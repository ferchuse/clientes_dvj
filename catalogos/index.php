<?php
$directorio = 'files';
$ficheros1  = scandir($directorio);
$ficheros2  = scandir($directorio, 1);
 
print_r($ficheros1);
print_r($ficheros2);
