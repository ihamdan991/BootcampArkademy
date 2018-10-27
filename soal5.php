<!--
DWDW      DW          DW
DW  DW    DW          DW
DW    DW  DW    DW    DW
DW    DW  DW  DWDWDW  DW
DW  DW    DWDW      DWDW
DWDW      DW          DW	
-->

<?php
// enkripsi dari tulisan diatas menggunakan base64_encode
$enco = "RFdEVyAgICAgIERXICAgICAgICAgIERXDQpEVyAgRFcgICAgRFcgICAgICAgICAgRFcNCkRXICAgIERXICBEVyAgICBEVyAgICBEVw0KRFcgICAgRFcgIERXICBEV0RXRFcgIERXDQpEVyAgRFcgICAgRFdEVyAgICAgIERXRFcNCkRXRFcgICAgICBEVyAgICAgICAgICBEVw==";
echo "<pre>".base64_decode($enco)."</pre>";
?>
