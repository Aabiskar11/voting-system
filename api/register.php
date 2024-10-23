<?php
    include("connect.php");

    $name= $_POST['name'];
    $email= $_POST['Email'];
    $collegeid= $_POST['Collegeid'];
    $password= $_POST['password'];
    $repassword= $_POST['rpassword'];
    $role= $_POST['role'];

    if($password==$repassword){
        $insert= mysqli_query($connect, "INSERT INTO Voter(name, email, college ID, Password, Re-enter password, Role, Status, Votes) VALUES('$name', '$email', 'collegeid', 'password', 'repassword', 'role', 0, 0)");
        if($insert){
            echo '
        <script>
            alert("Registration successful");
            window.location="../";
            </script>
            ';
        }
        else{
            echo '
        <script>
            alert("Error occured!!");
            window.location="../html/registration.html";
            </script>
            ';
        }

    }
    else{
        echo '
        <script>
            alert("Password and re-enter password doesnot match.");
            window.location="../html/registration.html";
            </script>
            ';

    }
    

?>