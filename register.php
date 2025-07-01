<?php 
include 'connect.php';

if(isset($_POST['signUp']))
{
    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

$password = md5($_POST['password']);

    $checkemail = "SELECT * FROM users where email = '$email' ";

    $result = $conn->query($checkemail);
    if($result->num_rows>0)
    {
        echo "Email already exists";
    }
    else{
        $insertQuery = "INSERT INTO users (firstname,lastname,email , password)
        VALUES('$firstname' , '$lastname' , '$email', '$password')";
        if($conn->query($insertQuery) == TRUE)
        {
            header("Location: index.php");
        }
        else{
            echo "Error ".$conn->error;
        }
    }
}
if(isset($_POST['signIn']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
$password = md5($_POST['password']);
 
    $sql ="  SELECT * FROM users WHERE email = '$email' and password = '$password' ";
    $result = $conn->query($sql);
    if($result->num_rows>0)
    {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];

        header("Location: homepage.php");
        exit();
    }
    else{
        echo "invalid email or password";
    }

}
?>