<?php
 

    session_start();


    // If already logged in, redirect to index.php
    //if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'])
       // header("Location: index.php");
    // Login Credentials for admindb
    $username = 'user';
    $err = '';
    $host = 'localhost';
    $dbname = 'schem';
    $password = 'password123';
    
    
    if ($_POST) {
        $email = $_POST["emailAd"];
        $password = $_POST["password"];

        $sanemail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $sanpassword = filter_var($password, FILTER_SANITIZE_STRING);
        $hashpass = md5($sanpassword);
        // var_dump($pwd_hashed);
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $stmt = $conn->query("SELECT ID, password as sanpassword FROM Users WHERE email='$email'");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($result);
            if ($result) {
                if ($hashpass === $result[0]['sanpassword']) {
                    
                    $_SESSION['user'] = $result[0]['ID'];                    
                    header("Location: dash.php");
                    exit;
                } else {
                    $err = "<p>Email or Password Invalid</p>";
                }
            }
        
    } else {
        $email = "";
    }





/*session_start();

function userLogin($emailAd,$password)
{
    if(!(CheckLoginInDB($emailAd,$password)))
    {
        echo "Login Failed";
        return false;
    }
}

function CheckLoginInDB($emailAd,$password)
{
    $connect = new PDO('mysql:host=localhost;dbname=bugme;', 'root', 'password');
    $checkLoginQuery = "SELECT `ID`, `firstname`, `lastname` FROM `Users` WHERE `email`='$emailAd'";
    $stmt = $connect->query($checkLoginQuery);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
        $_SESSION["user_id"] = $result['ID'];
        $_SESSION["firstname"] = $result['firstname'];
        $_SESSION["lastname"] = $result['lastname'];
        header("Location: ../dash.php");
    }
    else 
    {
        return false;
    }
    
}


if(isset($_SESSION["user_id"])) 
{
header("Location: ../dash.php");
}
if ( isset( $_POST['SubBtn'] ) )
{
    $EmailAd = $_POST['email'];
    $password = $_POST['password'];
    
    userLogin($emailAd,$password);
}*/
?>