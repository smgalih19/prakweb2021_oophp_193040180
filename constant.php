<?php

// define('NAMA', 'smgalih19');
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;

// class Coba{
//   const NAMA = 'smgalih19';
// }
// echo Coba::NAMA;

// echo __FILE__;

// function coba(){
//   return __FUNCTION__;
// }
// echo coba();

class Coba{
  public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;

?>