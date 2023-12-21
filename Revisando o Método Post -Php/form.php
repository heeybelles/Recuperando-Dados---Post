<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ficha de inscrição</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>CodeTech</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="index.php">Ínicio <span class="sr-only"></span></a>
      <a class="nav-link" href="login.php">Voltar</a>
    </div>
  </div>
</nav>
<br><br><br>
    <main>

        <fieldset>
        <legend>Ficha de Inscrição</legend>
         <form name="fichainsc"method="post" action="result.php">
            <label>Nome:</label>
            <input class="nome" type="text" name="nome"required></input>
            <label class="sobrenome1" >Sobrenome:</label>
            <input class="sobrenome"type="text"  name="sobrenome"required></input><br><br>
            <label>Data de Nascimento:</label>
            <input type="date" class="data" name="dtanasc"required></input>
            <label class="idade1">Idade:</label>
            <input class="idade"  type="number" name="idade"required></input><br><br><br>
            <div class="radio">
            <label>Sexo:</label>
            <input type="radio"class="btnradio"  name="sexo" required="required" value="Feminino">Feminino</input>
            <input type="radio" class="btnradio"  name="sexo" value="Masculino">Masculino</input>
            <input type="radio" class="btnradio"  name="sexo" value="Outros">Outros</input>
            </div>
            <br>
            <br>
            <label>Nacionalidade:</label>
            <input class="nacao0"type="text" name="nacao" required></input>
            <label>Estado:</label>
            <select id="UF" name="uf" required>
    <option value="" >Selecione</option>
    <option value="AC" >AC</option>
    <option value="AL">AL</option>
    <option value="AP">AP</option>
    <option value="AM">AM</option>
    <option value="BA">BA</option>
    <option value="CE">CE</option>
    <option value="DF">DF</option>
    <option value="ES">ES</option>
    <option value="GO">GO</option>
    <option value="MA">MA</option>
    <option value="MS">MS</option>
    <option value="MT">MT</option>
    <option value="MG">MG</option>
    <option value="PA">PA</option>
    <option value="PB">PB</option>
    <option value="PR">PR</option>
    <option value="PE">PE</option>
    <option value="PI">PI</option>
    <option value="RJ">RJ</option>
    <option value="RN">RN</option>
    <option value="RS">RS</option>
    <option value="RO">RO</option>
    <option value="RR">RR</option>
    <option value="SC">SC</option>
    <option value="SP">SP</option>
    <option value="SE">SE</option>
    <option value="TO">TO</option>
 </select>
            <label class="cidade1">Cidade:</label>
            <input class="cidade"type="text" name="cidade"required></input><br><br><br>
            <label>Estado Cívil:</label>

<select id="estadocivil"  name="estadocivil"required>
<option value=""  >Selecione</option>
    <option name="estadocivil">Casado</option>
    <option name="estadocivil" >Divorciado</option>
    <option name="estadocivil">Solteiro</option>
    <option name="estadocivil">Viúvo</option>
    <option name="estadocivil">União Estável</option>
</select>
 <br><br><br>
            <label>Formação:</label>
            <select id="formacao"  name="formacao" ><required id="required">
            <option value="">Selecione</option>
                <option name="formacao">Tenho formação</option>
                <option name="formacao">Não tenho formação</option>
                <option name="formacao" > Graduado</option>
                <option name="formacao">Concursado</option>
                <option name="formacao" >Cursando</option>
                <option name="formacao" >Estudante Técnico(Etec,Cursos à parte,etc)</option>
                <option name="formacao">Outros</option>
        </select>
        
            <label>Já trabalhou na área?</label>
            <select id="trabalhaarea" name="trabalhaarea"  required>
            <option value="">Selecione</option>
                <option name="trabalhaarea">Sim</option>
                <option name="trabalhaarea">Não</option>
            </select>

            <br><br><br>
            
            <label>Quem é você?( PS: intrapessoal e interpessoal)</label><br><br>
            <textarea type="text" name="mensagem1" required></textarea><br><br>
            <label>O que você poderá acrescentar em nossa empresa?</label><br>
             <br>
             <textarea type="text"name="mensagem2"required></textarea>
              <br><br>
              
              <label class="check0">Qual linguagem de programação você conhece?</label>
            <br><br>
            
           <h6> <input class="check" type="checkbox" name="js" value="Selecionado JavaScript" required >JavaScript</input></h6><br>
           <h6><input class="check" type="checkbox" name="asp"  value="Selecionado Asp" value="">Asp</input></h6><br>
           <h6> <input class="check" type="checkbox" name="php"  value="Selecionado PHP" >PHP</input></h6><br>
           <h6> <input class="check" type="checkbox" name="java"  value="Selecionado Java">Java</input></h6><br>
           <h6> <input class="check" type="checkbox" name="outroslp"  value="Selecionado Outros">Outras Linguagens de programação</input></h6><br><br>
           
           <input type="hidden" name="user" value="admin"></input>
           <input type="hidden" name="nivel" value="2"></input>
           <br>
           
             
           <a href="form.php"> <input type="submit" class="btnProx"  value="Próximo"></input></a>
          
          
           



           
             

             
        </form>
        </fieldset>
        
    </main>

    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
             <footer><h6><i>@TechCode</i></h6></footer>
   <style>
    .btnProx{
        margin-top: 10px;
     width: 150px;
     height: 60px;
     margin-left: 580px;
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
                 
                  left: 0;
                  position:relative;
                  bottom: 0;
                  width: 100%;
                  height: 40px;
                  background-color: rgb(71, 67, 67);
                  color: white;
                   text-align: center;
                }
</style>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>

