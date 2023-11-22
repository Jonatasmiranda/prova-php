function recupera_curso($id){


global $link;
// lista cursos já cadastrados
$query = "SELECT id_curso, ds_curso, nr_carga_horaria, dt_inicio FROM tb_curso WHERE id_curso = $id;";
if ($result = mysqli_query($link, $query)) {
     // busca os dados lidos do banco de dados
  while ($row = mysqli_fetch_assoc($result)) {
              return $row;
        }
       
      
  // libera a área de memória onde está o resultado
  mysqli_free_result($result);
}

}
}