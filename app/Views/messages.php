<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Delta Global</title>
</head>

<body>

    <div class="container mt-5">
        <div class="alert alert-info">
            <?php echo $message; ?>
        </div>
        <p class="text-end"> <?php echo anchor(base_url() . '/students', 'Voltar para Alunos') ?> </p>
</body>

</html>