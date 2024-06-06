<?php
/*https://www.yangshipin.cn/#/tv/home?pid=600001859*/
error_reporting(0);
$id = isset($_GET['id'])?$_GET['id']:'cctv1';
$n = [
    //央视
    'cctv4k' => 2022575203,//cccv-4k
    'cctv8k' => 2020603421,//cccv-8k
    'cctv1' => 2022576803,//cccv1
    'cctv2' => 2022576703,//cccv2
    'cctv3' => 2022576503,//cccv3(vip)
    'cctv4' => 2022576603,//cccv4
    'cctv5' => 2022576403,//cccv5
    'cctv5p' => 2022576303,//cccv5+
    'cctv6' => 2022574303,//cccv6(vip)
    'cctv7' => 2022576203,//cccv7
    'cctv8' => 2022576103,//cccv8(vip)
    'cctv9' => 2022576003,//cccv9
    'cctv10' => 2022573003,//CCTV10
    'cctv11' => 2022575903,//CCTV11
    'cctv12' => 2022575803,//CCTV12
    'cctv13' => 2022575703,//CCTV13
    'cctv14' => 2022575603,//CCTV14
    'cctv15' => 2022575503,//CCTV15
    'cctv16' => 2022575403,//CCTV16
    'cctv16-4k' => 2022575103,//CCTV16-4k(vip)
    'cctv17' => 2022575303,//CCTV17
    //央视数字
    'bqkj' => 2012513403,//CCTV兵器科技(vip)
    'dyjc' => 2012514403,//CCTV第一剧场(vip)
    'hjjc' => 2012511203,//CCTV怀旧剧场(vip)
    'fyjc' => 2012513603,//CCTV风云剧场(vip)
    'fyyy' => 2012514103,//CCTV风云音乐(vip)
    'fyzq' => 2012514203,//CCTV风云足球(vip)
    'dszn' => 2012514003,//CCTV电视指南(vip)
    'nxss' => 2012513903,//CCTV女性时尚(vip)
    'whjp' => 2012513803,//CCTV央视文化精品(vip)
    'sjdl' => 2012513303,//CCTV世界地理(vip)
    'gefwq' => 2012512503,//CCTV高尔夫网球(vip)
    'ystq' => 2012513703,//CCTV央视台球(vip)
    'wsjk' => 2012513503,//CCTV卫生健康(vip)
    //央视国际
    'cgtn' => 2022575003,//CGTN
    'cgtnjl' => 2022574703,//CGTN纪录
    'cgtne' => 2022574803,//CGTN西语
    'cgtnf' => 2022574903,//CGTN法语
    'cgtna' => 2022574603,//CGTN阿语
    'cgtnr' => 2022574803,//CGTN俄语
    //卫视
    'bjws' => 2000272103,//北京卫视
    'dfws' => 2000292403,//东方卫视
    'tjws' => 2019927003, //天津卫视
    'cqws' => 2000297803,//重庆卫视
    'hljws' => 2000293903,//黑龙江卫视
    'lnws' => 2000281303,//辽宁卫视
    'hbws' => 2000293403,//河北卫视
    'sdws' => 2000294803,//山东卫视
    'ahws' => 2000298003,//安徽卫视
    'hnws' => 2000296103,//河南卫视
    'hubws' => 2000294503,//湖北卫视
    'hunws' => 2000296203,//湖南卫视
    'jxws' => 2000294103,//江西卫视
    'jsws' => 2000295603,//江苏卫视
    'zjws' => 2000295503,//浙江卫视
    'dnws' => 2000292503,//东南卫视
    'gdws' => 2000292703,//广东卫视
    'szws' => 2000292203,//深圳卫视
    'gxws' => 2000294203,//广西卫视
    'gzws' => 2000293303,//贵州卫视
    'scws' => 2000295003,//四川卫视
    'xjws' => 2019927403, //新疆卫视
    'hinws' => 2000291503,//海南卫视
    ];
$cnlid = $n[$id];
$guid = nu(8)."_".nu(11);

$param = [
    "appid"=>"ysp_pc",
    "guid"=>$guid,
    "pid"=>'600001859',
    "rand_str"=>nu(10),
];
$singature=md5(http_build_query($param)."Q0uVOpuUpXTOUwRn");
$param["signature"] = $singature;

$headers = [
    "Content-Type: application/x-www-form-urlencoded;charset=UTF-8",
    "Referer: https://www.yangshipin.cn/",
    "Cookie: guid={$guid}; versionCode=999999; vplatform=109; platformVersion=Chrome; deviceModel=123",
    "Yspappid: 519748109",
    ];
$ch = curl_init("https://player-api.yangshipin.cn/v1/player/auth");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
$data = curl_exec($ch);
curl_close($ch);
$json_data = json_decode($data);
$token = $json_data->data->token;

$key = hex2bin("48e5918a74ae21c972b90cce8af6c8be");
$iv = hex2bin("9a7e7d23610266b1d9fbf98581384d92");
$ts = time();
$el = "|{$cnlid}|{$ts}|mg3c3b04ba|V1.0.0|{$guid}|5910204|https://www.yangshipin.c|mozilla/5.0 (windows nt ||Mozilla|Netscape|Win32|";
$len = strlen($el);
$xl = 0;
for($i=0;$i<$len;$i++){
    $xl = ($xl << 5) - $xl + ord($el[$i]);
    $xl &= $xl & 0xFFFFFFFF;
    }

$xl = ($xl > 2147483648) ? $xl - 4294967296 : $xl; 

$el = '|'.$xl.$el;
$ckey = "--01".strtoupper(bin2hex(openssl_encrypt($el,"AES-128-CBC",$key,1,$iv)));

$params = [
    "adjust" => 1,
    "appVer" => "V1.0.0",
    "app_version" => "V1.0.0",
    "cKey" => "{$ckey}",
    "channel" => "ysp_tx",
    "cmd" => "2",
    "cnlid" => "{$cnlid}",
    "defn" => "fhd",
    "devid" => "devid",
    "dtype" => "1",
    "encryptVer" => "8.1",
    "guid" => "{$guid}",
    "otype" => "ojson",
    "platform" => "5910204",
    "rand_str" => nu(10),
    "sphttps" => "1",
    "stream" => "2"
    ];

$sign = Kc($params);
$params["signature"] = $sign;

$headers1 = [
    "Content-Type: application/json;charset=UTF-8",
    "Referer: https://www.yangshipin.cn/",
    "Cookie: guid={$guid}; versionCode=999999; vplatform=109; platformVersion=Chrome; deviceModel=123",
    "Yspappid: 519748109",
    "yspplayertoken: {$token}",
    ];
$ch = curl_init("https://player-api.yangshipin.cn/v1/player/get_live_info");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($params));
$data = curl_exec($ch);
curl_close($ch);

$json = json_decode($data)->data;
$live = $json->backurl_list[0]->url;
$extended_param = $json->extended_param;

$code = json_decode($json->chanll)->code;
$chanll = base64_decode($code);

preg_match( '/var des_key = "(.*?)";/', $chanll, $Key);
preg_match('/var des_iv = "(.*?)";/', $chanll, $Iv);

$text = '{"mver":"1","subver":"1.2","host":"www.yangshipin.cn/#/tv/home?pid=","referer":"","canvas":"YSPANGLE(Intel,Intel(R)Iris(R)XeGraphics(0x000046A6)Direct3D11vs_5_0ps_5_0,D3D11)"}';

$key = base64_decode($Key[1]);
$iv = base64_decode($Iv[1]);
$encrypted = openssl_encrypt($text, 'des-ede3-cbc', $key, OPENSSL_RAW_DATA, $iv);
$hex = strtoupper(bin2hex($encrypted));

$burl = explode('cn/',$live)[0]."cn";

$playurl = preg_replace("|{$burl}|",'http://183.204.13.157/ysp.v.smtcdns.net/hlslive-tx-cdn.ysp.cctv.cn',$live)."&revoi=".$hex.$extended_param;

header("Content-Type: application/vnd.apple.mpegurl");
header("location:".$playurl);
//echo $playurl;

function nu($t) {
    $e = "ABCDEFGHIJKlMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $r = strlen($e);
    $n = "";
    for ($i = 0; $i < $t; $i++) {
        $n .= $e[rand(0, $r - 1)];
        }
    return $n;
}

function Kc($t) {
    $e = "";
    $r = [];
    foreach ($t as $key => $value) {
        $r[] = $key;
        }
    sort($r);
    foreach ($r as $index => $key) {
        if ($index != 0) $e .= "&";
        if (is_array($t[$key])) $t[$key] = implode(",", $t[$key]);
        $e .= $key . "=" . rawurlencode($t[$key]);
        }
    $e .= '0f$IVHi9Qno?G';
    return md5($e);
}    
?>