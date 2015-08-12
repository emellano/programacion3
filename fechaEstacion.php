<?php

if (date('ms')>=1221 && date('ms')<=320) {
	echo "Verano";
}else if(date('ms')>=321 && date('ms')<=620){
	echo "Otoño";
}elseif (date('ms')>=621 && date('ms')<=920) {
	echo "Invierno";
}elseif (date('ms')>=921 && date('ms')<=1220) {
	echo "Primavera";
}
?>