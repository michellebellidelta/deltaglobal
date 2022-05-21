<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Ícones do Bootstrap 5  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


    <title>Global Delta </title>

    <style>
        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .active {
            background-color: #2b94cd;
            color: #fff;
        }

        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }

        i.bi.bi-trash {
            color: #c71e1e;
            font-size: 1.2em;
        }

        i.bi.bi-pencil {
            color: #198754;
            font-size: 1.2em;
        }
    </style>

    <script>
        function confirma() {
            if (!confirm('Deseja excluir o aluno?')) {
                return false;
            }
            return true;
        }
    </script>

</head>

<body>

    <h1 class="text-center mt-5"> Gerenciamento de Alunos </h1>

    <div class="container mt-5">
        <div class="text-end">
            <?php echo anchor(base_url('students/create'), '<i class="bi bi-person-plus"></i>', ['class' => 'btn btn-info']) ?>
        </div>
        <table class="table table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">País</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student) : ?>
                    <tr>
                        <td> <?php echo $student['id'] ?> </td>
                        <td> <?php echo $student['name'] ?> </td>
                        <td> <?php echo $student['city'] ?> </td>
                        <td> <?php echo $student['state'] ?> </td>
                        <td> <?php echo $student['country'] ?> </td>
                        <td>
                            <?php echo anchor('students/edit/' . $student['id'], '<i class="bi bi-pencil"></i>') ?>
                            <?php echo anchor('students/delete/' . $student['id'], '<i class="bi bi-trash"></i>', ['onClick' => 'return confirma()']) ?>
                        </td>


                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <?php echo $pager->links(); ?>
        <a href="<?php echo base_url() ?>" class=" text-end">Voltar ao início</a>

    </div>
</body>

</html>