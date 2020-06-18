<?php

if(isset($_POST['comanda']))
{
    require'dbh.inc.php';
    
    $first=$_POST['first'];
	$last=$_POST['last'];
	$adress=$_POST['adress'];
	$phone=$_POST['phone'];	
	$pret=$_POST['pret'];
    
    if(empty($first) || empty($last) || empty($adress) || empty($phone))
	{
        header("Location: ../pages/cos.php?error=emptyfields&uid=".$username."&mail=.$email.");
		exit();
    }
    
    else 
        {   
				$sql="insert into
				comanda(first_name,last_name,adress,telefon,pret) values('$first','$last','$adress','$phone','$pret')";
				$stmt=mysqli_stmt_init($conn);
        
        if ($conn->query($sql) === TRUE) {
            
                header("Location: ../pages/acasa.php?comanda=succes");
                echo "New record created successfully";
            }
        
            if(!mysqli_stmt_prepare($stmt,$sql))
                {
                    header("Location: ../pages/cos.php?error=sqlerror");
		              exit();
                }     
        }
				
}

?>