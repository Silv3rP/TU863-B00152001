<?php
    if (isset($_POST['submit'])) {
    require "../common.php";
    require_once '../src/DBconnect.php';

    try {
        
        if (!isset($connection)) {
            throw new Exception("Database connection is missing.");
        }   

     // Sanitize
    $new_user = [
    "firstname" => escape($_POST['firstname']),
    "lastname" => escape($_POST['lastname']),
    "email" => escape($_POST['email']),
    "age" => escape($_POST['age']),
    "location" => escape($_POST['location'])
    ];


    $sql = "INSERT INTO users (firstname, lastname, email, age, location) 
                VALUES (:firstname, :lastname, :email, :age, :location)";

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);


 }  catch(PDOException $error) {
         echo $sql . "<br>" . $error->getMessage();
 }
}
    require "templates/header.php";
        if (isset($_POST['submit']) && $statement){
    echo $new_user['firstname']. ' successfully added';
 }
?>
    
    <h2>Add a user</h2>

    <div>
    <form method="post">
        <label for="firstname">First Name</label>
            <br>
            <input type="text" name="firstname" id="firstname">
            <br>
            <label for="lastname">Last Name</label>
            <br>
        <input type="text" name="lastname" id="lastname">
            <br>
            <label for="email">Email Address</label>
            <br>
        <input type="text" name="email" id="email">
            <br>
            <label for="age">Age</label>
            <br>
        <input type="text" name="age" id="age">
            <br>
            <label for="location">Location</label>
            <br>
        <input type="text" name="location" id="location">
            <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
    <a href="index.php">Back to home</a>

    <?php include "templates/footer.php"; ?>