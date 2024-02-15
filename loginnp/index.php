<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<style>
        #myImage {
            width: 250px;     
            height: auto;     
            position: relative; 
            top: 30px;       
            left: 595px    
            }
</style>
<style>
#hello {
            font-size: 40px;          
            color: #E7910C;              
            font-weight: bold;        
            text-align: center;      
            margin-top: 50px;       
            font-family: 'Goudy Stout';
        }
    </style>
<style>
    #sign {
        font-size: 20px;           
            color: #000000;             
            text-align: center;        
            margin-top: 5px;         
            font-family: 'Bookman Old Style';
    }
</style>
<style>
        input[type="text"].styled-textfield {
            font-size: 20px;         
            padding: 10px;            
            margin-top: 20px;         
            width: 300px;     
            height: 40px;        
            border: 2px solid #E7910C;   
            border-radius: 4px;       
            position: relative;
            top: 5px;
            left: 550px;
        }
    </style>
    <style>
       
        input[type="password"].styled-textfield1 {
            font-size: 20px;          
            padding: 10px;            
            margin-top: 10px;         
            width: 300px;     
            height: 40px;        
            border: 2px solid #E7910C;   
            border-radius: 4px;   
            position: relative;
            top: 5px;
            left: 550px;      
        }
    </style>
    <style>
        
        input[type="submit"], button {
            padding: 17px 50px;            
            background-color: #E7910C;     
            color: white;     
            font-family: 'Bookman Old Style';           
            border: none;                 
            border-radius: 5px;           
            cursor: pointer;              
            font-size: 20px;               
            position: relative;
            top: 30px;
            left: 622px;
        }

        
        input[type="submit"]:hover, button:hover {
            background-color: #C88111;
        }
    </style>
    <style>
    #here {
        font-size: 17px;          
            color: #000000;               
            text-align: center;        
            margin-top: 55px;          
            font-family: 'Bookman Old Style';
    }
</style>
</head>
<?php

$imageURL = '2024-02-15_19-51-25.png';



echo '<img src="'.$imageURL.'" id="myImage" alt="Image description" />';
echo '<div id="hello">Hello</div>';
echo '<div id="sign">Sign in to continue.</div>';
?>
<form action="login.php" method="post">
        <div>
            <label for="username"></label>
            <input type="text" name="username" placeholder= "Username" class="styled-textfield" required>
        </div>
        <div>
            <label for="password"></label>
            <input type="password" name="password" placeholder = "Password" class="styled-textfield1" required>
        </div>
        <div>
            <button type = "submit">Submit</button>
        </div>
<?php
echo '<div id= "here">Forgot password? Click here.</div>';
?>
</body>
</html>
