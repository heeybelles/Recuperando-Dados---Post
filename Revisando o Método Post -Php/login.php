<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>TechCode - Login</title>
    
</head>
<body>
        
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" ><b>CodeTech</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="index.php">Ínicio <span class="sr-only"></span></a>
      <a class="nav-link" href="index.php">Voltar</a>
    </div>
  </div>
</nav>

<br><br><br>
<h1>Acesse sua conta:</h1>
    <main>
        <br>
        <fieldset>
            <header>
                <br><br><br>
        <form name="logarUsuario" method="post" action="program.php">
           <label>Login:</label>
           <input type="text" name="nome" required></input><br><br>
           <label>Senha:</label>
           <inpuT type="password" name="senha" required></input><br><br>

           
             <a href="program.php"> <input type="submit" class="btnAcessar1"  value="Acessar"></input></a>
             <br>
             <footer><h6><i>@TechCode</i></h6></footer>
             <br><br>
             
           <style>
          
          *{
    margin:0;
    padding:0;
}
          
            .btnAcessar1{
                margin-top: 20px;
             width: 130px;
             height: 50px;
             margin-left: 120px;
             text-transform: uppercase;
             font-size: 16px;
             color:white;
             border:none;
             outline: none;
             border-radius: 8px;
             box-shadow: 2px 3px 2px 2px rgba(0, 0, 0, 0.2);
             background: #7474BF; 
             background: -webkit-linear-gradient(to right, #348AC7, #7474BF); 
             background: linear-gradient(to right, #348AC7, #7474BF); 
            }
body{
    background: #673AB7;  
background: -webkit-linear-gradient(to right, #512DA8, #673AB7); 
background: linear-gradient(to right, #512DA8, #673AB7); 

}
fieldset{
    background-color:  rgb(71, 67, 67);
    border-radius: 15px;
    width: 500px;
    height: 320px;
    display: flex;
    justify-content: center;
    align-items: center;
    
    box-shadow: 2px 3px 2px 2px rgba(0, 0, 0, 0.2);
}
main{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 30px;
    margin-top: 100px;
}

label{
    font-size: 20px;
    color:white;
    
}

input{
    margin-top: 10px;
    width: 300px;
    height: 40px;
    border-radius: 15px;
     border:none;
     outline: none;
     box-shadow: 2px 3px 2px 2px rgba(0, 0, 0, 0.2);
}

h1{
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}
footer{
                  left: 0;
                  position:absolute;
                  bottom: 0;
                  width: 100%;
                  height: 40px;
                  background-color: rgb(71, 67, 67);
                  color: white;
                   text-align: center;
                }
           
           </style>
           <header>
        </form>
       
       
        </fieldset>
    </main>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>