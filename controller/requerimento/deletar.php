<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        $stmt = $con->prepare('DELETE FROM requerimento WHERE id = ?;');
        
        $stmt->bind_param('i', $id_requerimento);
        
        $id_requerimento = $_POST['id_requerimento'];
       
        $stmt->execute();
    }
 ?>