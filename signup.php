<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP-MENANTEA</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="icon" href="img/logoicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    
</head>

    <body>
        <div class="container">
            <h1>REGISTER</h1>
            <p>Bergabung dan dapatkan keistimewaan setiap teguknya <br> 
            <span class="merk">-MENANTEA-</span></p>
            
            <form action="daftar.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Sign Up" class="submit-btn">
            </form>
        </div>
        
    </body>
</html>