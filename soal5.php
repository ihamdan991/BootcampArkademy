<!--
DWDW      DW          DW
DW  DW    DW          DW
DW    DW  DW    DW    DW
DW    DW  DW  DWDWDW  DW
DW  DW    DWDW      DWDW
DWDW      DW          DW	
-->

<?php
// fungsi decode
function dw ($data){
	return "<pre>".base64_decode($data)."</pre>"; //
}

// enkripsi dari tulisan diatas menggunakan base64_encode
$enco = "RFdEVyAgICAgIERXICAgICAgICAgIERXDQpEVyAgRFcgICAgRFcgICAgICAgICAgRFcNCkRXICAgIERXICBEVyAgICBEVyAgICBEVw0KRFcgICAgRFcgIERXICBEV0RXRFcgIERXDQpEVyAgRFcgICAgRFdEVyAgICAgIERXRFcNCkRXRFcgICAgICBEVyAgICAgICAgICBEVw==";
echo dw($enco);
?>
