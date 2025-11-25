<?php
function conexaoBD() {
   $host = 'localhost';
   $usuario = 'root';        
   $senha = '';             
   $banco = 'blackfriday';
   $conn = new mysqli($host, $usuario, $senha, $banco);
   if ($conn->connect_error) {
       die("Erro de conexão: " . $conn->connect_error);
   }
   $conn->set_charset("utf8mb4");
   return $conn;
}

function inserirJogo($nome, $preco_original, $preco_promocional) {
   $conn = conexaoBD();
   $stmt = $conn->prepare("INSERT INTO jogo (nome, preco_original, preco_promocional) VALUES (?, ?, ?)");
   $stmt->bind_param("sdd", $nome, $preco_original, $preco_promocional);
   $resultado = $stmt->execute();
   $stmt->close();
   $conn->close();
   return $resultado;
}
function listarJogos() {
   $conn = conexaoBD();
   $sql = "SELECT id, nome, preco_original, preco_promocional FROM jogo ORDER BY data_cadastro DESC";
   $result = $conn->query($sql);
   $jogos = [];
   while ($row = $result->fetch_assoc()) {
       $jogos[] = $row;
   }
   $conn->close();
   return $jogos;
}
?>