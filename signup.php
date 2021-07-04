<!DOCTYPE html>
<head>
    <title>SignUp</title>
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        if($namerror== "" && $mailerror== "" && $pwderror== "" && $cpwderror== ""){
            $server="localhost";
            $user="root";
            $password="";
            $db="register";

            //database connection
            $connection= new mysqli($server,$user,$password,$db);
            if($connection->connect_error){
                die("connections failed:" .$connection->connect_error);
                echo "connection not established <br>";
            }
            else{
                echo "Connected to database <br>";
            }

            //table for database
            $sql= "CREATE TABLE info ( Name VARCHAR(30) NOT NULL, Email VARCHAR(30) NOT NULL, Passwords VARCHAR(30)
             NOT NULL, Images varchar(150) DEFAULT NULL);"
            if($connection->query($sql)===TRUE){
                echo "table created";
            }
            else{
                echo "Error". $connection->error;
            }
            /*$sql="INSERT INTO info(Names,Email,Passwords) VALUES(?,?,?)";
            if($stmt=$connection->prepare($sql)){
            $stmt->bind_param("sss",$name,$email,$pwd);
            $name= $name;
            $mail=$email;
            $pwd=$pwd;
            //$image=$_POST['img'];
            $stmt->execute();
            echo "record added successfully";
        }
        else{
            echo "Error: could not insert";
        }*/

        }
        else{
            echo "Form data is invalid";
        }
        echo "<br>".$name."<br>";
        echo $mail;
    }


    
?>
</body>
</html>
  