<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Recuperando Dados do Formulário</title>
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
      <a class="nav-link" href="form.php">Voltar</a>
    </div>
  </div>
</nav>
<br><br><br>
<br><br><br>
  <main>
<fieldset>
<?php
     $nome = $_POST['nome'];
     $sobrenome = $_POST['sobrenome'];
     $dtanasc = $_POST['dtanasc'];
     $idade=$_POST['idade'];
     $sexo=$_POST['sexo'];
     $nacao=$_POST['nacao'];
     $uf=$_POST['uf'];
     $cidade=$_POST['cidade'];
     $estadocivil=$_POST['estadocivil'];
     $formacao=$_POST['formacao'];
     $trabalhaarea=$_POST['trabalhaarea'];
     $js=$_POST['js'];
     $asp=$_POST['asp'];
     $php=$_POST['php'];
     $java=$_POST['java'];
     $outroslp=$_POST['outroslp'];
     $mensagem1=$_POST['mensagem1'];
     $mensagem2=$_POST['mensagem2'];
     
   
     
     
   echo "<br><h2>Recuperando os Dados</h2><br>";
    echo "<h5><b>Nome:</b> $nome </h5><br>";
    echo "<h5><b>Sobrenome:</b> $sobrenome </h5><br>";
    echo "<h5><b>Data de Nascimento:</b> $dtanasc</h5> <br>";
    echo "<h5><b>Idade: </b> $idade </h5><br>";
    echo "<h5><b>Sexo: </b> $sexo</h5><br>";
    echo "<h5>Nacionalidade: </b>  $nacao</h5><br>";
    echo "<h5><b>Estado: </b>  $uf</h5><br>";
    echo "<h5><b>Cidade: </b>  $cidade</h5><br>";
    echo "<h5><b>Estado Cívil:</b>   $estadocivil</h5><br>";
    echo "<h5><b>Formacao:</b>  $formacao</h5><br>";
    echo "<h5><b>Trabalha na área?</b>  $trabalhaarea</h5><br>";
    echo "<h5><b>Quem é você?( PS: intrapessoal e interpessoal):</b><br>    $mensagem1</h5><br>";
    echo "<h5><b>O que você poderá acrescentar em nossa empresa?:</b><br>    $mensagem2</h5><br>";
    echo "<h5><b>Qual linguagem de programação você conhece?</b></h5><br>";
    echo "<h5>";
    echo $_POST['js'];
    echo "</h5>";
    
    echo "<h5>";
    echo $_POST['asp'];
    echo "</h5>";
  
    echo "<h5>";
    echo $_POST['php'];
    echo "</h5>";

    echo "<h5>";
    echo $_POST['java'];
    echo "</h5>";
    
    echo "<h5>";
    echo $_POST['outroslp'];
    echo "</h5>";
    echo "<br>";
   
    
   
 

    ?>
    <br><br>
    <h6><i>Ao enviar, guarde alguns  minutos na página, você receberá a resposta da empresa</i></h6><br>
    <a href="form.php"> <input type="submit" class="btnVoltar"  value="Voltar"></input></a>
      <input type="submit" class="btnEnviar"  value="Enviar" data-toggle="modal" data-target="#staticBackdrop"></input>
    
   
   
   <div>
</div>
</fieldset>
  </main>
  <br>
             <footer><h6 class="marca"><i>@TechCode</i></h6></footer>
    </body>
  


<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5  class="hh5" class="modal-title" id="staticBackdropLabel">Parabéns Usuário!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
         $user=$_POST['user'];
         $nivel=$_POST['nivel'];
     
         
         echo "Olá Usuário!<br>";
         echo "Parabéns! Você acaba de ser contratado pelo nossa previlegiada empresa.Fique contente.<br><b> SEU NÍVEL DE ACESSO É:</b><br><b> Usuário:  </b>$user<br>";
         echo "<b>Nível de Acesso:  </b>$nivel °";
        ?>
      </div>
      <div class="modal-footer">
       <a button type="button" class="btn btn-primary" href="index.php">OK</button></a>
      </div>
    </div>
  </div>
</div>
<br><br>
<br><br>
<br><br>
<br><br>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<style>
*{
    margin:0;
    padding:0;
}
body{
    background: #6a3093;  
background: -webkit-linear-gradient(to right, #a044ff, #6a3093);  
background: linear-gradient(to right, #a044ff, #6a3093); 
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
main{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 60px;
}
fieldset{
    
    background: rgb(71, 67, 67);
width: 900px;
height: 1330px;
box-shadow: 2px 3px 2px 2px rgba(0, 0, 0, 0.2);
border: none;
outline: none;
border-radius: 20px;
}
h2,h4,p,h5{
  color: white;
  margin-left: 100px;
}
h6{
  color:white;
  margin-left: 150px;
}
.btnEnviar{
  margin-top: 20px;
                 width: 150px;
                 height: 60px;
                 margin-bottom: 90px;
                 margin-left: 50px;
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
            .btnVoltar{
                margin-left: 460px;
                margin-top: 10px;
                 width: 150px;
                 height: 60px;
                 margin-bottom: 90px;
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
            footer{
              margin-top: 290px;
                  left: 0;
                  position:fixed;
                  bottom: 0;
                  width: 100%;
                  height: 40px;
                  background-color: rgb(71, 67, 67);
                  color: white;
                   text-align: center;
                }
                .marca{
                  margin-right: 80px;
                }
                .hh5{
                  color:black;
                 margin-left:140px;
                }
               
}
</style>