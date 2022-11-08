<?php
	$mkdir="Hasil"; // cOded by shutdown57 
	$o=getopt("l:");
	if(!file_exists("$mkdir/coded.shutdown57")){
		$status_dir="NOT READY ";
		@mkdir("$mkdir");
		@touch("$mkdir/coded.shutdown57");
		@file_put_contents("$mkdir/coded.shutdown57","Plutope Auto Reff By NETNOT");
		sleep(3);exit();}
		else{
			$status_dir="READY ";}

printf("
▒█▄░▒█ ▒█▀▀▀ ▀▀█▀▀ ▒█▄░▒█ ▒█▀▀▀█ ▀▀█▀▀ 
▒█▒█▒█ ▒█▀▀▀ ░▒█░░ ▒█▒█▒█ ▒█░░▒█ ░▒█░░ 
▒█░░▀█ ▒█▄▄▄ ░▒█░░ ▒█░░▀█ ▒█▄▄▄█ ░▒█░░
 +---- Plutope Auto Reff --------------+
 | Status : ".$status_dir." | Created By : Abdul NETNOT
 +------------------------------------------+\n");;
 echo "Please wait ...";
 sleep(3);echo "\n";
function nama()
   {
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   $ex = curl_exec($ch);
   // $rand = json_decode($rnd_get, true);
   preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
   return $name[2][mt_rand(0, 14) ];
   }
   function get_between($string, $start, $end) 
    {
        $string = " ".$string;
        $ini = strpos($string,$start);
        if ($ini == 0) return "";
        $ini += strlen($start);
        $len = strpos($string,$end,$ini) - $ini;
        return substr($string,$ini,$len);
    }

   function angkarand($panjang)
{
    $karakter= '1234567890';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
  $pos = rand(0, strlen($karakter)-1);
  $string .= $karakter{$pos};
    }
    return $string;
}

function gaskan($email,$nope,$address,$tt,$aa,$reffmu)
{
   $url = "https://plutope.kickoffpages.com?kid=$reffmu";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
$kodereff = get_between($resp,"__kol_fallback/",'" action="');

   $acakaja = angkarand(4);
  $url = "https://leads.kickofflabs.com/lead/$kodereff";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Host: leads.kickofflabs.com",
   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:105.0) Gecko/20100101 Firefox/105.0",
   "Accept: application/json",
   "Accept-Language: id,en-US;q=0.7,en;q=0.3",
   "Content-Type: application/json",
   "Origin: https://plutope.kickoffpages.com",
   "Referer: https://plutope.kickoffpages.com/",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"email":"'.$email.'","phone_number":"'.$nope.'","bsc_wallet_address_usdt":"'.$address.'","__form_name":"Default Form","__rid":"22d46277-'.$acakaja.'-4b42-b782-88b28e5b92a3","__uid":"d3829c89-4b7d-450e-9fd4-f2f14f2eddbf","__sid":"35b0f690-'.$acakaja.'-4632-b2b8-338da473981b","__kid":"'.$reffmu.'","__url":"https://plutope.kickoffpages.com/?kid='.$reffmu.'","__lid":"'.$kodereff.'","__language":"id","__custom":{"theme":"finance_droppable","pageType":"single_page"},"__source":"kfp.361627","__mm":111,"__kd":41}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
if (strpos($resp, "later")) {
  print_r("[$tt/$aa] LIMIT Delay 15 sec\n");
  sleep(10);
}
elseif (strpos($resp, "thankyou_url")) {
   print_r("[$tt/$aa] SUKSES : $email | ADDRESS : $address\n");
   file_put_contents('akun.txt', $email."|".$address.PHP_EOL, FILE_APPEND);
} else {
   print_r("[$tt/$aa] ERROR BOSS\n");
   //print_r($resp);
}


}

echo "[?] Kode Reffmu: ";
$reff = trim(fgets(STDIN));
echo "[?] Address: ";
$list = trim(fgets(STDIN));
$list2 = explode(PHP_EOL, file_get_contents($list));
$i = 1;

foreach ($list2 as $lista) {
   $fullname = nama();
$nama = explode(" ", $fullname);

$emailnya = "$nama[0]".angkarand(3)."@gmailni.com";
$nohape = "0858".angkarand(8);

   $lines = count($list2);
      gaskan($emailnya,$nohape,$lista,$i,$lines,$reff);
      $i++;
      //sleep(1);
    }  


?>

