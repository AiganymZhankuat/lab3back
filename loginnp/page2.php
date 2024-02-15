<!DOCTYPE html>
<html>
    <head>
        <title>Page2</title>
    </head>
    <body>
        <style>
            #page2 {
            font-size: 40px;           
            color: #E7910C;              
            font-weight: bold;         
            text-align: center;       
            margin-top: 30px;         
            font-family: 'Goudy Stout';
        }
        </style>
        <style>
        
        #myImage2 {
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
echo '<div id="page2">Welcome to Beta page</div>';
echo '<img src="c0c7f680a7f3225264218e32653cc80a.jpg" id="myImage2" alt="Image description" />';
?>