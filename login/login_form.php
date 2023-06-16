<?php
// auteur Amin
session_start();

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controleer de gebruikersnaam en het wachtwoord
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    if ($username === "john" && $password === "doe") {
        
        $_SESSION["user"] = $username;

        exit();
    } else {
        $errorMessage = "Ongeldige gebruikersnaam of wachtwoord.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($errorMessage)) { ?>
        <p><?php echo $errorMessage; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <input type="submit" value="Inloggen">
    </form>
</body>
</html>
