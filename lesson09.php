<?php


$name=[10,60,90,70,50];

if($name > 80){
  echo "80点は「優」です。";
}else if($name > 60){
  echo "60点は「良」です。";
}else if($name > 40){
  echo "40点は「可」です。";
}else{
  echo "それ以下なら「不可」です。";
}


// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。
