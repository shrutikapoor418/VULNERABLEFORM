<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>  
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #0A2647;
  color:orange;  
}  
button {  

       width: 100%;  
        color: orange;  
        padding: 15px;  
        margin: 10px 0px;  
        border: none;  
        cursor: pointer;  
         }  
 form {  
        border: 3px solid #f1f1f1;  
        height:500px;
        width:400px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, .5);
        border-radius: 10px;
        backdrop-filter: blur(2px);
    }  
 input[type=text], input[type=password] {  
        width: 100%;  
        margin: 8px 0;  
        padding: 12px 20px;  
        display: inline-block;  
        border: 2px solid green;  
        box-sizing: border-box;  
    }  
 button:hover {  
        opacity: 0.7;  
    }  
  .cancelbtn {  
        width: auto;  
        padding: 10px 18px;  
        margin: 10px 5px;  
    }  
       
     
 .container {  
        padding: 25px;  
    }  

</style>  
</head>    
<body  background="nioo.jpg">    
    <center> <h1> Treasure Hunt </h1>  
    <form method="post" action="valid.php">  
        <div class="container">  
            <label>Username : </label>  
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>  
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>  
        </div>  
    </form>
    </center>  
   
</body>    
</html>  







  
