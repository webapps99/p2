<?php


if(isset($_POST['no_of_words'])) {
    $count=$_POST['no_of_words'];
    $item=$_POST['no_of_words'];


    }
else
{$count = 1;
 $item = 1;
}



//Determine if boxes are checked for options

if(isset($_POST['uppercase'])) {
    $uppercase=true;}
else{
    $uppercase=false;}

if(isset($_POST['symbol'])) {
    $symbol=true;}
else{
    $symbol=false;}

if(isset($_POST['number'])) {
    $number=true;}
else{
    $number=false;}

//pull in dictionary of words to use. Saved in array
$f_pointer=fopen("words.txt","r");
    while(! feof($f_pointer)){
    $words=fgetcsv($f_pointer);
    }

if($count){

    $selected_words = [];
    $symbols=['!','@','#','$','%','&'];
    $numbers=['0','1','2','3','4','5','6','7','8','9'];

    for($i=0; $i < $count; $i++){
    //generate random number from 0 to dictionary size
       $max=count($words)-1;
       $rand=rand(0,$max);

       $word=$words[$rand];
       array_push($selected_words, trim($word));


    }

    If ($uppercase) {
//Loop through words and change the first letter to uppercase

        foreach ($selected_words as $index => $word){
         $selected_words[$index] = ucfirst($word);

        }
    }
    if ($symbol){
//Append a symbol to string of words

        $max_sym=count($symbols)-1;
        $rand_sym=rand(0,$max_sym);
        $sym=$symbols[$rand_sym];

        $ind = count($selected_words);
        $ind=$ind-1;
        $selected_words["$ind"]= $selected_words["$ind"].$sym;

        }

    if ($number){

//Append a number to string of words

        $max_numb=count($numbers)-1;
        $rand_numb=rand(0,$max_numb);
        $numb=$numbers[$rand_numb];

        $ind = count($selected_words);
        $ind=$ind-1;
        $selected_words["$ind"]= $selected_words["$ind"].$numb;

        }


    $password = implode('-',$selected_words);
}







