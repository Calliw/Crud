<?php 

include 'config/conexaobd.php';

function cadastrarEquipamento($agencia, $numeroEquipamento, $serie, $link){
    $query = "INSERT INTO equipamentos VALUES (NULL, '$numeroEquipamento', '$agencia', '$serie')";
    mysqli_query($link, $query) or die (mysqli_error($link));
}

function selectAllEquipamentos($link){
    $query = "SELECT * FROM equipamentos";
    $res = mysqli_query($link, $query) or die (mysqli_error($link));
    return $res;
}

function montaTabelaEquipamentos($link){

    $res = selectAllEquipamentos($link);
    $row1 = mysqli_num_rows($res);

    if ($row1 > 0) {

        while ($row2 = mysqli_fetch_array($res)) {
            echo "
                <tr>
                <th scope='row'>".$row2['id']."</th>
                <td>".$row2['numEquipamento']."</td>
                <td>".$row2['agenciaVinc']."</td>
                <td>".$row2['numSerie']."</td>
                <td>
                    <form action='crud.php' method='POST'>
                        <input type='hidden' value='".$row2['id']."' name='idEquip'>
                        <button type='submit' class='btn btn-success'>Editar</button>
                        <button type='submit' class='btn btn-danger' name='btnDel'>Excluir</button>
                    </form>
                </td>
                </tr>
            ";
        }			
    }
    else{
        echo "
        <tr>
            <td>#</td>
            <td>Sem equipamentos</td>
        </tr>
        ";
    }
}

function deletaEquipamento($link, $idEquip){
    $query = "DELETE FROM equipamentos WHERE id LIKE '$idEquip'";
    mysqli_query($link, $query) or die (mysqli_error($link));
}

?>