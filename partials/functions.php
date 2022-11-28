<?php 
    $characters=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9","~","!","@","#","$","%","^","&","*","(",")","_","-","+","=","{","[","}","]",",","|",":",";","<",">",".","?",
    "/"];
    $letters=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $numbers=["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $symbols=["~","!","@","#","$","%","^","&","*","(",")","_","-","+","=","{","[","}","]",",","|",":",";","<",">",".","?",
    "/"];
    $numLett=array_merge($numbers,$letters);
    $numSymbol=array_merge($numbers,$symbols);
    $lettSymbol=array_merge($symbols,$letters);
    function getPassword($length,$array,$user){
    
    $new_PassWord="";
    $index=0;
    var_dump($array);
    while($index<=$length){
        $randomNumber=mt_rand(0,count($array)-1);
        var_dump($randomNumber);
        var_dump($user);
        if($user==="no"){
            if(!str_contains($new_PassWord,$array[$randomNumber])){
                $new_PassWord.=$array[$randomNumber];
                $index++;
        }
    }
        else{
           
            $new_PassWord.=$array[$randomNumber];
            $index++;
            }
        }
        
    
    var_dump($new_PassWord);
    var_dump(strlen($new_PassWord));
    return $new_PassWord;
}
