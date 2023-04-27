# Vytvorenie faktúry pre import do Omegy (Kros SK)    

Jednoduchá knižnica pre vytvorenie importného súboru do OMEGY. Knižnica sa len stiahne bez nutnosti inštalácie.

<a href="https://www.buymeacoffee.com/owlysk" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-yellow.png" alt="Buy Me A Coffee" height="41" width="174"></a>
## Dokumentácia

### Hlavička faktúry

| povinné pole |názov poľa|hodnota|poznámka|
| :---: |--|--|--|
|✅| number | číslo faktúry | |
| ✅ | name | názov odberateľa | |
| ✅ | ico | IČO odberateľa | |
| - | date_issue | dátum vystavenia | ak je prázdne, použije sa dátum generovania|
| - | date_due | dátum splatnosti | ak je prázdne, použije sa dátum generovania|
| - | duzp | dátum uskutočnenia zdaniteľného plnenia | ak je prázdne, použije sa dátum generovania|
| - | base_low | Suma základu dane s nízkou sadzbou DPH | ak je prázdne, nastaví sa ako 0 |
| - | base_high | číslo | ak je prázdne, nastaví sa ako 0|
| - | base_0 | Suma základu dane s 0 sadzbou DPH | ak je prázdne, nastaví sa ako 0|
| - | base_free | Suma základu dane, ktorá neobsahuje sadzbu | ak je prázdne, nastaví sa ako 0|
| - | rate_low | Nízka sadzba DPH | napr. 10 (pre 10% DPH) |
| - | rate_high | Vysoká sadzba DPH | napr. 20 (pre 20% DPH) |
| - | amount_vat_low | Suma DPH pre nižšiu sadzbu | |
| - | amount_vat_high | Suma DPH pre vyššiu sadzbu | |
| - | price_correction | halierové vyronanie | ak je prázdne, nastaví sa 0|
| - | amount_total | Suma spolu | ak je prázdne, nastaví sa 0|
| - | type | Typ dokladu | 0 (odberateľská faktúra), 1(preddavková faktúra), 2 (dodací list), 3 (odoslaná objednávka), 4 (odoslaný dobropis), 5 (zákazkový list), 6 (likvidačný list), 7 (reklamácia), 8 (upomienka), 9 (penalizačná faktúra), 10 (storno faktúra), 11 (došlá objednávka), 12 (cenová ponuka), 13 (predajka),14 (došlá faktúra); ak je prázdne nastaví sa 0|
| - | items | Pole s položkami faktúry | Viď tabuľku položky faktúry|
| &nbsp; |
| - | evidence_code | Kód evidencie dokladu | napr. OF odoslaná faktúra|
| - | number_code | Kód číselnej rady dokladu | |
| - | customer_internal_code | Interné číslo partnera | |
| - | customer_code | Kód partnera | |
| - | customer_centre | Stredisko partnera | |
| - | customer_plent | Prevádzka partnera | |
| - | street | Ulica odberateľa | |
| - | zip | PSČ odberateľa | |
| - | city | Mesto odberateľa | |
| - | dic | DIČ odberateľa | |
| - | time_issue | čas vystavenia faktúry | |
| - | term_delivery | Dodacie podmienky | |
| - | intro | Úvod | text na faktúre |
| - | ending | Záver | text na faktúre |
| - | delivery_bill | Dodací list | |
| - | order_number | Číslo objednávky | |
| - | signed | Vystavil | |
| - | cs | Konštantný symbol | |
| - | ss | Špeciálny symbol | |
| - | payment_type | Forma úhrady | |
| - | shipment_type | Spôsob dopravy | |
| - | currency | mena | text, 5 znakov |
| - | currency_amount | Množstvo jednotky meny | zadáva sa hodnota 1, ak je kurz cudzej meny vyjadrený k hodnote 1 € |
| - | currency_course | Kurz meny | |
| - | amount_total_hc | Suma spolu  v domácej mene| v domácej mene ?asi v náväznosti na cudziu menu |
| - | custom_bill | Zákazkový list | |
| - | note | Poznámka | |
| - | invoice_subject | Predmet fakturácie | |
| - | country | Štát odberateľa | |
| - | ic_dph_code | Kód IČ DPH | napr. SK |
| - | ic_dph | IČ DPH | kód bez prvých 2. znakov (teda bez SK)|
| - | account_number | Dodávateľské číslo účtu |  |
| - | bank_name | Dodávateľska banka |  |
| - | bank_branch | Dodávateľska pobočka banky |  |
| - | country | Dodávateľský štát |  |
| - | signed_code | Kód vystavil |  |
| - | name_short | Meno skrátene |  |
| - | swift | Swift kód |  |
| - | iban | IBAN |  |
| - | supplier_country_code | Dodávateľsky kód štátu |  |
| - | supplier_ic_dph | Dodávateľské IČ DPH |  |
| - | supplier_country | Dodávateľský štát |  |
| - | round | Zaokrúhlenie | zadáva sa  ako -1 na jedno desatinné,-2 na dve desatinné , -3 na tri desatinné , -4 na štyri desatinné miesta |
| - | round_mode | Spôsob zaokrúhlenia | zadáva sa ako 1 nahor, 2 nadol, 3 prirodzene  |
| - | ico_order_number | IČO poradové číslo |  |
| - | round_item | Zaokrúhlenie položky |  zadáva sa  ako -1 na jedno desatinné,-2 na dve desatinné , -3 na tri desatinné , -4 na štyri desatinné miesta |
| - | advance_text | Sprievodny text k preddavku  |  |
| - | advance_amount | Suma preddavku |  |
| - | vat_calc_method | Spôsob výpočtu DPH | 0 - ako Omega, 1 - ako registračné pokladnice  |
| - | vat_calc_method_old | Starý spôsob výpočtu DPH | 0 - výpočet ako kasa podľa funkcie vytvorenej podľa ELCOMu, -1 - výpočet ako kasa spôsobom pred existenciou tejto funkcie |
| - | date_issue_df | Datum vystavenia DF | Tento dátum vystavenia sa zadáva len pri došlých faktúrach. Dátumy sú v tvare DD.MM.RRRR, D.M.R, prípadne oddelovače / (lomítko) a , (čiarka) |
| - | paid_ecr | Úhradené cez ECR |  |
| - | vs | Variabilný symbol |  |
| - | post_contact_person | Poštová adresa - Kontaktná osoba |  |
| - | post_name | Poštová adresa - Firma |  |
| - | post_centre | Poštová adresa - Stredisko |  |
| - | post_plent | Poštová adresa - Prevádzka |  |
| - | post_street | Poštová adresa - Ulica |  |
| - | post_zip | Poštová adresa - PSČ |  |
| - | post_city | Poštová adresa - Mesto |  |
| - | discount_type | Typ zľavy za doklad | 0 - Percentuálna zľava; -1 - Absolútna zľava |
| - | discount_invoice | Zľava za doklad |  Zľava za doklad vyjadrená v percentách alebo v absolútnej zľave (Podľa typu zľavy za doklad) . Na doklad nie je možné pridať viacero zliav za doklad. Možno použiť iba pri importe - neexportuje sa. Maximálne do 100%, prípadne do výšky sumy dokladu (C210_SumaSpoluZahranicnaMena). |
| - | reserve | Rezervované |  |
| - | contact_person | Kontaktná osoba |  |
| - | phone | Telefón |  |
| - | apply_vat_payed | Uplatňovanie DPH podľa úhrad | 0 - neuplatňuje, -1 - uplatňuje |
| - | invoice_old_macrocards | Doklad obsahuje makrokarty vystavené po starom | 0 - neobsahuje, -1 obsahuje |
| - | customer_iban | IBAN zákazníka |  |
| - | customer_account_number | Číslo účtu zákazníka |  |
| - | is_oss | JeOSS | 0 - Doklad nepatrí do OSS; -1 - Doklad patrí do OSS |
| - | oss_country | Kod štátu OSS | Kód štátu z číselníka Intrastat, v ktorom sa končí odoslanie, preprava tovaru |
| - | oss_direction | Smerovanie OSS | Kód smerovania OSS |
| - | oss_country_code | Kód štátu prevádzky OSS  |  |
| - | quart_oss | Kvartál pre zaradenie do OSS  |  |
| - | year_oss | Rok pre zaradenie do OSS |  |




  
    
---

### Položky faktúry
| povinné pole |názov poľa|hodnota|poznámka|
| :---: |--|--|--|
|-|name|názov položky||
|-|quantity|množstvo|číslo|
|-|unit|merná jednotka| text, max. dĺžka 5|
|-|price| jedn. cena bez DPH||
|-|vat_rate| sadzba dph| zadáva sa nulová ako 0, vyššia ako V, nižšia ako N a neobsahuje ako X;  0 - null, N - lower, V - higher, X - not contain|
| &nbsp; |
|-| price_type_code | Kód typu sumy | riadok danoveho priznania |
|-| payed_number | Číslo uhradzaneho dokladu |  |
|-| payed_countdown_number | Číslo odpočítavaného dokladu |  |
|-| centre_code | Kód stredisko  |  |
|-| centre_name | Názov stredisko  |  |
|-| order_code | Kód zákazka  |  |
|-| order_name | Názov zákazka |  |
|-| operation_code | Kód činnosti |  |
|-| operation_name | Názov činnosti |  |
|-| worker_code | Kód pracovníka |  |
|-| worker_name | Meno pracovníka |  |
|-| worker_surname | Priezvisko pracovníka |  |
|-| centre_number | Číslo stredisko | Stredisko Interné číslo |
|-| order_number | Číslo zákazky | Zákazka Interné číslo |
|-| operation_number | Číslo činnosti | Činnosti Interné číslo |
|-| worker_number | Číslo pracovníka | Pracovník Interné číslo  |
|-| part_vat_report | Oddiel KV DPH | Údaje pre kontrolný výkaz DPH  |
|-| type_vat_report | Druh tovaru KV DPH  | Údaje pre kontrolný výkaz DPH |
|-| code_vat_report | Kód tovaru KV DPH | Údaje pre kontrolný výkaz DPH |
|-| unit_vat_report | Merná jednotka KV DPH | Údaje pre kontrolný výkaz DPH |
|-| quantity_vat_report | Množstvo KV DPH | Údaje pre kontrolný výkaz DPH |
|-| centre_id | ID strediska |  |
|-| order_id | ID zákazky |  |
|-| operation_id | ID činnosti |  |
|-| worker_id | ID pracovníka |  |
|-| payed_negative | Úhrada opačným znamienkom | Pri importe sa nevyplňuje; 1 - úhrada opačným znamienkom, inak 0  |
|-| payed_id | ID číslo uhrádzaného dokladu | Pri importe sa nevyplňuje  |
|-| countdown_id | ID číslo odpočítavaného dokladu | Pri importe sa nevyplňuje  |

---

## Použitie

Najprv si načítame knižnicu
```
include_once("./class/KrosExportInvoice.php");
$export = new KrosExportInvoice();
```

Vyplníme si dáta na faktúre
```
$items = array();
$items[] = array(
    "name"=>"Chleba",
    "quantity"=>2,
    "unit"=>"ks",
    "price"=> 10,
    "vat_rate"=> "V",
);


$data=array(
    "number"=>"9900001",
    "name"=>"Test zákazník",
    "ico"=>"12345678",
    "base_high"=> ($items[0]["price"]*$items["quantity"]),
    "amount_total"=>($items[0]["price"]*(1+(20/100))*$items[0]["quantity"]),
    "evidence_code"=>"OF", 
    "items"=> $items,

    "street"=>"Testovacia ulica 25",
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

```

Nakoniec si zavoláme knižnicu, ktorá nám vráti potrebné dáta a tie si uložíme do súboru

```
$file_data = $export->generate($data);
file_put_contents("invoice_to_import.txt",$file_data);
```
