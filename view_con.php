
 <!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="mar.css">
    <title>projet1</title>
</head>
<body>
<div class="MM" >
 <h2> <center>connexion</center> </h2>
 <br> 

 <form method="post" action="connexion.php">
    <table align="center">  
      <tr>  
           <td> <label> <b>name </b></label>
         <br> <input class="w3-input w3-border w3-margin-bottom" style="width:500px;height:40px" type="text" placeholder="Enter name" name="nom" required>
           </td>         
      </tr>     
     <tr>
         <td> <label > <b>password </b></label>
            <br><input class="w3-input w3-border w3-margin-bottom" type="password" name="pwd" placeholder="your password.."  style="width:500px;height:40px" ></td>
            </td>              
      </tr>
      <tr>
            <td> 
           <br> <input  style="width:500px;height:40px;background-color:#570c28;color:white;" type="submit" name="connexion" value="je me connecte" > </td>
            </td>
     </tr>         
    </table>
 </form>
 </div>
</body>
</html>
