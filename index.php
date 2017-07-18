<?php include("cabecalho.php"); ?>

      <h2> Fill the Form: </h2>
       
        <form name="formulario-teste" method="post" action="adiciona-resposta.php">
          <table class="table"> 
           <tr>
               <td>Name:</td> 
               <td><input class="form-control" type="text" name="nome" id="nome"> </td>   
            </tr>

           <tr>
               <td>Age:</td> 
               <td><input type="number"  name="idade" id="idade"></td> 
          </tr>
          <tr>
        <td> Gender:</td> <td><select name="sexo" id="sexo"> 
             <option value="feminino"> female</option>
             <option value="masculino"> male</option>
             </select></td>
            </tr>
            
            
        <tr>

       <td>Number:</td> 
       <td> <input  class="radio-inline" type="radio" name="numero"  id="numero" value="1"> 1 
        <input class="radio-inline" type="radio" name="numero" id="numero" value="2"> 2  
        <input class="radio-inline" type="radio" name="numero" id="numero" value="3"> 3 
        <input class="radio-inline" type="radio" name="numero" id="numero" value="4"> 4  
        <input class="radio-inline" type="radio" name="numero" id="numero" value="5"> 5  </td>
         
         </tr>
         
       <tr>
       <td><input class="btn btn-primary" type="submit" value="Submit" id="cadastrar" name="cadastrar"></td>
       </tr> 

     </form>
     </table>

 
<?php  include("rodape.php"); ?>