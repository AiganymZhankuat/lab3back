<!DOCTYPE html>
<html>
    <head>
        <title>Page1</title>
    </head>
    <body>
        <style>
            #page1 {
            font-size: 40px;         
            color: #E7910C;               
            font-weight: bold;         
            text-align: center;        
            margin-top: 30px;          
            font-family: 'Goudy Stout';
        }
        </style>
        <style>
        #myImage1 {
            width: 500px;     
            height: auto;      
            margin-top: 30px;      
            position: relative;
            left: 480px;
        }
</style>
    </body>
</html>
<?php
session_start();


if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
echo '<div id="page1">Welcome to Alpha page</div>';
echo '<img src="64a5cc16167bc3a2da5f11e1fe8194f3.jpg" id="myImage1" alt="Image description" />';
?>