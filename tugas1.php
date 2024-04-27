<?php
class segitiga{
    private $alas;
    private $tinggi;

    public function _construct(){
        echo "Algoritma Rumus Segitiga <br>";
    }
    public function segitigasiku($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function luas_segitiga(){
        echo "Luas Segitiga : return 0.5 * $this->alas * $this->tinggi";
    }
}
$saya_adalah_object = new segitiga;
$alas_segitiga->luas_segitiga(5);
$tinggi_segitiga->luas_segitiga(10);


?>