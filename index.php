<?php 
   
session_start();
include_once __DIR__ . '/partials/functions.php';
$password=$_GET["password"] ?? "";
$password_length;
$hasLetterSelect= $_GET['lettere'] ?? "";
$hasNumberSelect=$_GET['numeri'] ?? "";
$hasSymbolsSelect=$_GET['symbols'] ?? "";
$userChoice=$_GET['userChoice'] ?? "";
/*var_dump($password);
echo "$hasLetterSelect </br>";
echo "$hasNumberSelect </br>";
echo " ripetizione caratteri: $userChoice </br>";
*/
if(!empty($password)){
    $new_password;
    var_dump($password);
    $password_length=(int)$password;
    var_dump($password_length);
    if($hasLetterSelect==="on"&&$hasNumberSelect==="on"&&$hasSymbolsSelect==="on"){
        $new_password=getPassword($password_length,$characters,$userChoice);
    }
    elseif($hasLetterSelect==="on"&&$hasNumberSelect==="on"){
        $new_password=getPassword($password_length,$numLett,$userChoice);
    }
    elseif($hasLetterSelect==="on"&&$hasSymbolsSelect==="on"){
        $new_password=getPassword($password_length,$lettSymbol,$userChoice);
    }
    elseif($hasSymbolsSelect==="on"&&$hasNumberSelect=="on"){
        $new_password=getPassword($password_length,$numSymbol,$userChoice);
    }
    elseif($hasLetterSelect==="on"){
        $new_password=getPassword($password_length,$letters,$userChoice);
    }
    elseif($hasNumberSelect==="on"){
        $new_password=getPassword($password_length,$numbers,$userChoice);
    }
    elseif($hasSymbolsSelect==="on"){
        $new_password=getPassword($password_length,$symbols,$userChoice);
    }
    else{
        $new_password=getPassword($password_length,$characters,$userChoice);
    }
    
    /*var_dump($new_password);*/
    $_SESSION['password']=  $new_password;
    header('Location: ./password.php');
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">  
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


   

<div class="container">
    <header class="text-center">
        <h1>Strong Password Generator</h1>
        <p>Genera un Password sicura</p>
        


    </header>    
    
    <section class="pt-4">
   
    <form action="index.php" method="GET" >
            
                
            
            <div class="mb-3 d-flex ">
                    <label for="password" class="form-label ms_form-label" >Lunghezza Password:</label>
                    <input type="number" class="form-control ms-form-control" id="password" name="password" min="0">
                </div>
                <div class="radio mb-3">
                    <div class="d-flex">
                        <label for="ripetizione" class="form-label ms_form-label">Consenti ripetizioni di uno o piu caratteri</label>
                        <input type="radio"  id="ripetizione" name="userChoice" value="yes"> <span>SI</span>
                    </div>      
                    <div class="d-flex">
                    <label for="no-ripetizione" class="form-label ms_form-label"></label>
                    <input type="radio"  id="no-ripetizione" name="userChoice" value="no" > <span>No</span>
                    </div>
                </div>

                
                <div class="mb-3 d-flex ">
                    <label for="lettere" class="form-label ms_form-label" ></label>
                    <input type="checkbox"  id="lettere" name="lettere" > <span>Lettere</span>
                </div>
                
                <div class="mb-3 d-flex">
                    <label for="numeri" class="form-label ms_form-label"></label>
                    <input type="checkbox"  id="numeri" name="numeri" > <span>numeri</span>
                </div>
                
                <div class="mb-3 d-flex">
                    <label for="symbols" class="form-label ms_form-label"></label>
                    <input type="checkbox"  id="symbols" name="symbols" > <span>symbols</span>
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>    
            </form>
        </section>
</div>
</body>
</html>