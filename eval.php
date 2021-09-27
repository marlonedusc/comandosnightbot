<?php
$canal = $_GET["opcion"];
$instrucciones = 'MODO DE USO: !canal (opción). Usa "!canal lista" para ver la lista de opciones disponibles.';
if(isset($canal) && $canal != ""){
   $prefijo = "https://www.twitch.tv/";
   $canales = array(
      "alexuz" => $prefijo."ialexuz/",
      "godz" => $prefijo."godzito/",
      "smoxx" => $prefijo."smoxxdesigns/",
      "tecno" => $prefijo."tecnomercy/",
      "camila" => $prefijo."camilasatv/"
   );

   if(array_key_exists($canal, $canales)){
	echo $canales[$canal];
   }else if($canal == "lista"){
	foreach ($canales as $un_canal => $valor){
		echo $un_canal." | ";
      }
   }else{
	echo $instrucciones;
   }
}else{
   echo $instrucciones;
}
?>
