<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<form method="post" action="index.php?page=editar_produtos">
    <table>
           <tr></br><td>Identificador::</td><td><input type=hidden value='.$id.' name=Id ><input type=hidden value='.$nome .' name=Nome><input type=hidden  value='.$descricao .' name=Descricao><button type=submit>Editar</button></td></tr>
           <tr></br><td>Nome::</td><td><a href=index.php?page=excluir>Excluir</a></td></tr>
           <tr></br><td>Descrição::</td><td><a href=index.php?page=#></a></td></tr>
           <tr></br><td>Criado em::</td><td><a href=index.php?page=#></a></td></tr>
           <tr></br><td>Atualizado em::</td><td><a href=index.php?page=#></a></td></tr>
           </table>
    
</form>

