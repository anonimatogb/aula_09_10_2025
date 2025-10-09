<?php

    if (empty($produtos)) {
      echo "<p>Nenhum usuário encontrado!</p>";
       echo"<a href='View/Usuario/cadastrar.php'>Cadastrar</a>";
      return;
    }

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo"<tr><td><a href='View/Usuario/cadastrar.php'>Cadastrar</a></td></tr>";
    echo "<tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Código de Barras</th>
        <th>Preço</th>
        <th>Ações</th>
      </tr>";

foreach ($produtos as $produto) {
      $id = $produto['id'];
      echo "<tr>";
      echo "<td>{$id}</td>";
      echo "<td>{$produto['nome']}</td>";
      echo "<td>{$produto['descricao']}</td>";
      echo "<td>{$produto['quantidade']}</td>";
      echo "<td>{$produto['codigobarra']}</td>";
      echo "<td>{$produto['preco']}</td>";
      echo "<td>
<a href='View/Usuario/editar.php?id={$id}'>Editar</a> 
<a href='View/Usuario/deletar.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este usuário?')\">Deletar</a></td>";
      echo "</tr>";
    }

   
  
 echo "</table>";