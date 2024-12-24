<?php
session_start();
if(isset($_POST['submit']))
{
    include ('connection.php');

    if ($con->connect_error)
    {
        die("Connection failed: ". $con->connect_error);
    }

    else
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $username = $_SESSION['username'];
        
        $sql = "SELECT * FROM trainer WHERE username = ? AND password = ?";

        $stmt = $con->prepare($sql);

        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) 
        {

            echo "Login successful!";
            header("Location: trainer_page.html");

            exit(); 
        } 
        else 
        {
        
            echo "<html><head></head><body><script>
            alert ('invalid user');
            window.location.href = 'loging_trainer.html';
            </script>
            </body>
            </html>";
        }

    $stmt->close();

    $conn->close();
    }
}
    

?>
