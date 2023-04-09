<?php
include_once("./class/KrosExportInvoice.php");
$export = new KrosExportInvoice();

$items = array();
$items[] = array(
    "name"=>"Chleba",
    "quantity"=>2,
    "unit"=>"ks",
    "price"=> 10,
    "vat_rate"=> "V",
);

$items[] = array(
    "name"=>"Soľ",
    "quantity"=>"1",
    "unit"=>"ks",
    "price"=> 10,
    "vat_rate"=> "V",
);



$data=array(
    "number"=>"2023002",
    "name"=>"Môj zákazník",
    "ico"=>"12345678",
    "date_issue"=>"",
    "date_due"=>"",
    "duzp"=>"",
    "base_high"=> (($items[0]["price"]*$items["quantity"])+($items[1]["price"]*$items["quantity"])),
    "amount_total"=>(($items[0]["price"]*(1+(20/100))*$items[0]["quantity"])+($items[1]["price"]*(1+(20/100)))*$items[1]["quantity"]),
    "evidence_code"=>"OF",
    "items"=> $items,

    "street"=>"Testovacia ulica 256",
    "zip"=>"811 01",
    "city"=>"Bratislava",
    "dic"=>"1234567890",
    "country"=>"Slovenská republika",
    "ic_dph_code"=>"SK",
    "ic_dph"=>"1234567890",
    "intro"=>"Fakturujeme vám:",
    "cs"=>"0308",
    "signed"=>"Testovací import",
);



$file_data = $export->generate($data);
file_put_contents("invoice_to_import.txt",$file_data);
?>
