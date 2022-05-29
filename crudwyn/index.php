<!-- Rotas / chamadas de metodos -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>


    <div class="container-fluid p-0 mb-5">
    <nav class="navbar p-2 shadow" style="background-color: brown;">
        <h2 class="text-light">CrudWyn</h2>
    </nav>
    <form class="p-4" action="crud.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputAgencia">Estado</label>
                <select id="inputAgencia" class="form-control" name="selecAgencia">
                    <option selected value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputNumero">Numero do Equipamento</label>
                <input type="text" class="form-control" placeholder="Numero" id="inputNumero" name="inputNumero">
            </div>
            <div class="form-group col-md-4">
                <label for="inputNumero">Numero de série</label>
                <input type="text" class="form-control" placeholder="Série" id="inputNumero" name="inputSerie">
            </div>
        </div>
        <div class=" form-row justify-content-center">
            <button type="submit" class="btn btn-primary col-md-6" name="btnCad" >Cadastrar</button>
        </div>
    </form>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="">Lista de equipamentos</h2>
        </div>
        
        <br>

        <?php 
            
        ?>
        <table class="table text-center table-hover">
            <thead class="thead-dark">
                <tr class="">
                <th scope="col">#</th>
                <th scope="col">Equipamento</th>
                <th scope="col">Agencia</th>
                <th scope="col">Série</th>
                <th scope="col">Edição / Exclusão</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'funcoes.php';

                    montaTabelaEquipamentos($link);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>