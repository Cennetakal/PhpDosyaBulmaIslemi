<?php
function dosyaAc(){
  $x = file_get_contents("x.json");
  if(!$x){
     throw new Exception('Dosya Bulunamadư');
}
  return $x;
}
 
 try {
  echo dosyaAc();
}
 catch(Exception $e){
  echo $e->getMessage();
}
 
?>