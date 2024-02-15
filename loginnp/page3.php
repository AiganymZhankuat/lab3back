<!DOCTYPE html>
<html>
    <head>
        <title>Page3</title>
    </head>
    <body>
        <style>
            #page3 {
            font-size: 40px;           
            color: #E7910C;               
            font-weight: bold;        
            text-align: center;        
            margin-top: 30px;         
            font-family: 'Goudy Stout';
        }
        </style>
        <style>
       
        #myImage3 {
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
echo '<div id="page3">Welcome to Gamma page</div>';
echo '<img src="c89aab07cd7c6a27002cafb2cc7cdca5.jpg" id="myImage3" alt="Image description" />';
?>