<?php
require_once('connection.php');
$isEmpty = false;

$title = mysqli_real_escape_string($conn, $_POST['Title']);
$text = mysqli_real_escape_string($conn, $_POST['Text']);
$autor = mysqli_real_escape_string($conn, $_POST['Autor']);

if(empty($_POST["Title"])){
    $isEmpty = true;
}
if(empty($_POST["Autor"])){
    $isEmpty = true;
}
if(empty($_POST["Text"])){
    $isEmpty = true;
}

if($isEmpty == true){
    header('Location: createArticle.php?message=Nieco si nezadal');
}

$s = rand(1,2);
switch($s) {
    case 1:
        $img = "user.png";
        break;
    case 2:
        $img = "sus.png";
        break;    
}

if($isEmpty == false){
    $sql = "INSERT INTO articles (Title, Text, Autor, Cover_image) 
    VALUES('$title', '$text', '$autor', '$img')";
    if ($conn->query($sql) == true){       
        header('Location: createArticle.php?message=Clanok bol vytvoreny');
    }
    else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>