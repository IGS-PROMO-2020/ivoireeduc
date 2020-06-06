
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
 <h2> <center>INSCRIPTION</center> </h2>
 <br> 

 <form method="POST" action="inscri.php"  enctype="multipart/form-data">
    <table align="center">
     
      <tr>  
           <td> <label> <b>name </b></label>
         <br> <input class="w3-input w3-border w3-margin-bottom" style="width:500px;height:40px" type="text" placeholder="Enter name" name="name" required>
           </td>
           
      </tr> 
      
      <tr>
        <td> <label > <b> prenom</b></label>
            <br><input class="w3-input w3-border w3-margin-bottom" type="text" name="pre" placeholder="your surname..."  style="width:500px;height:40px" ></td>
            </td>
    </tr>

    <td> <label > <b>email</b></label>
            <br><input class="w3-input w3-border w3-margin-bottom" type="email" name="eml" placeholder="your email..."  style="width:500px;height:40px" ></td>
            </td>
        
      </tr>
      
      <tr>
         <td> <label > <b>password </b></label>
            <br><input class="w3-input w3-border w3-margin-bottom" type="password" name="pwd" placeholder="your password.."  style="width:500px;height:40px" ></td>
            </td>
            
    
      </tr>

      <tr>
      <td> <label > <b>confirmez password</b></label>
            <br><input class="w3-input w3-border w3-margin-bottom" type="password" name="pwd2" placeholder="confirm...."  style="width:500px;height:40px" ></td>
            </td>
      </tr>

      <tr>
         <td><label for="PHOTO DE PROFIL"> <b> photo de profil</b></label>
             <br><input type="file"  id="avatar"  name="ava">
         </td>
     </tr>

      </tr>
            <td> 
           <br> <input  style="width:500px;height:40px;background-color:#570c28;color:white;" type="submit" name="inscription" value="je m'inscris" > </td>
            </td>
     </tr>
          
    </table>
 </form>


 </div>
</body>
</html>