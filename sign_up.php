<?php
require_once "./const.php";
session_start();

// バリデーション
function form_vld($check){
    if(count($check) == 0){
        return false;
    }
    $result = [];
    foreach($check as $target){
        $result[$target[0]] = ["vld" => "valid","value" => htmlspecialchars($_REQUEST[$target[0]],ENT_QUOTES | ENT_HTML5),"msg" => ""];
        foreach($target[2] as $type){
            if($type == "required"){
                if($_REQUEST[$target[0]] == ""){
                    $result[$target[0]]["vld"] = "invalid";
                    $result[$target[0]]["msg"] = $target[1] . "を入力してください。";
                    break;
                }
            }elseif($type == "numeric"){//少数、マイナスも受け付ける
                $result[$target[0]]["value"] = sp(mb_convert_kana($_REQUEST[$target[0]],"n"));
                if(!is_numeric(mb_convert_kana($_REQUEST[$target[0]],"n"))){
                    $result[$target[0]]["vld"]  = "invalid";
                    $result[$target[0]]["msg"]  = $target[1] . "は数値で入力してください。";
                    break;
                }
            }elseif(preg_match('/^min-[\-\.0-9]+/',$type)){
                if($_REQUEST[$target[0]] < str_replace("min-","",$type)){
                    $result[$target[0]]["vld"]  = "invalid";
                    $result[$target[0]]["msg"]  = $target[1] . "は" . str_replace("min-","",$type) ."以上で入力してください。";
                    break;
                }
            }elseif(preg_match('/^minlength-[\-\.0-9]+/',$type)){
                if(mb_strlen($_REQUEST[$target[0]]) < str_replace("minlength-","",$type)){
                    $result[$target[0]]["vld"]  = "invalid";
                    $result[$target[0]]["msg"]  = $target[1] . "は" . str_replace("minlength-","",$type) ."文字以上で入力してください。";
                    break;
                }
            }elseif(preg_match('/^max-[\-\.0-9]+/',$type)){
                if($_REQUEST[$target[0]] > str_replace("max-","",$type)){
                    $result[$target[0]]["vld"]  = "invalid";
                    $result[$target[0]]["msg"]  = $target[1] . "は" . str_replace("max-","",$type) ."以下で入力してください。";
                    break;
                }
            }elseif(preg_match('/^maxlength-[\-\.0-9]+/',$type)){
                if(mb_strlen($_REQUEST[$target[0]]) > str_replace("maxlength-","",$type)){
                    $result[$target[0]]["vld"]  = "invalid";
                    $result[$target[0]]["msg"]  = $target[1] . "は" . str_replace("maxlength-","",$type) ."文字以下で入力してください。";
                    break;
                }
            }elseif($type == "natural_num"){//１以上の整数のみ
                $result[$target[0]]["value"] = sp(mb_convert_kana($_REQUEST[$target[0]],"n"));
                if(!is_numeric(mb_convert_kana($_REQUEST[$target[0]],"n"))){
                    $result[$target[0]]["vld"]  = "invalid";
                    $result[$target[0]]["msg"]  = $target[1] . "は数値で入力してください。";
                    break;
                }elseif(strpos($_REQUEST[$target[0]],".") !== false){
                    $result[$target[0]]["vld"]  = "invalid";
                    $result[$target[0]]["msg"]  = $target[1] . "は整数で入力してください。";
                    break;
                }elseif($_REQUEST[$target[0]] <= 0){
                    $result[$target[0]]["vld"]  = "invalid";
                    $result[$target[0]]["msg"]  = $target[1] . "は1以上で入力してください。";
                    break;
                }
            }elseif($type == "email"){//inpupt type=email　と同じバリデーションを行う。厳しすぎる又は緩すぎる表現は規制していない
                $reg_email = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/";
                if(preg_match($reg_email,$_REQUEST[$target[0]]) !== 1){
                    $result[$target[0]]["vld"]  = "invalid";
                    $result[$target[0]]["msg"]  = "正しいメールアドレスを入力してください。";
                    break;
                }
            }elseif($type == "mail_simple"){//課題用メールアドレスチェック　
                if(strpos($_REQUEST[$target[0]],"@") === false){
                    $result[$target[0]]["vld"]  = "invalid";
                    $result[$target[0]]["msg"]  = "正しいメールアドレスを入力してください。";
                    break;
                }
            }
        }
    }
    return $result;
}

$check = [
    ["user_name","ユーザー名",["required"]],
    ["email","メールアドレス",["required","email"]],
    ["password","パスワード",["required"]],
];
$data = [];
foreach($check as $val){
    $data[$val[0]] = ["vld" => "","value" => "","msg" => ""];
}

//確認画面から修正ボタンで戻った時
if(isset($_SESSION["state"]) && $_SESSION["state"] == "sign_up_back"){
    $data = $_SESSION["sign_up_data"];
}
//確認ボタンが押されていないとき
if(!isset($_REQUEST["submit"]) || $_REQUEST["submit"] !== "confirm"){
    require_once "./tpl/sign_up.php";
    exit;
}
$data = form_vld($check);
foreach($data as $vld){
    if($vld["vld"] == "invalid"){
        require_once "./tpl/sign_up.php";
        exit;
    }
}
$_SESSION["sign_up_data"] = $data;
$_SESSION["state"] = "sign_up_confirm";
header("location: sign_up_confirm.php");
?>
