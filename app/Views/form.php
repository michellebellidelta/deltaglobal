<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>Delta Global</title>
    <style>
        #frame {
            border-radius: 50%;
        }
    </style>

</head>
<div class="conteiner mt-5">
    <form method="post" accept-charset="utf-8" action=<?php echo isset($student['id']) ? base_url('students/update/' . $student['id'])  : base_url('students/store') ?>>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img id="frame" src="<?php echo isset($student['photo']) ? $student['photo'] : 'https://cdn-icons-png.flaticon.com/512/1154/1154987.png' ?>" class="img-fluid rounded-start" alt="foto do aluno" width="90%">
                </div>
                <div class="col-md-8">
                    <div class="card-title">
                        <h2 class="text-center"> Cadastrar Aluno </h2>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col">
                                <label for="name"> Nome </label>
                                <input type="text" value="<?php echo isset($student['name']) ? $student['name'] : '' ?>" class=" form-control" placeholder="Nome completo" id="'name" name="name" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="cep"> Cep </label>
                                <input type="text" value="<?php echo isset($student['cep']) ? $student['cep'] : '' ?>" class="form-control" placeholder="22.222-222" id="cep" name="cep" required>
                            </div>
                            <div class="col">
                                <label for="street"> Endereco </label>
                                <input type="text" value="<?php echo isset($student['street']) ? $student['street'] : '' ?>" class="form-control" id="street" name="street" readonly>
                            </div>
                            <div class="col">
                                <label for="number"> Número </label>
                                <input type="number" value="<?php echo isset($student['number']) ? $student['number'] : '' ?>" class="form-control" id="number" name="number" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="complement"> Complemento </label>
                                <input type="text" value="<?php echo isset($student['complement']) ? $student['complement'] : '' ?>" class="form-control" id="complement" name="complement" placeholder="Ex. Apto 300" required>
                            </div>
                            <div class="col">
                                <label for="neighborhood"> Bairro </label>
                                <input type="text" value="<?php echo isset($student['neighborhood']) ? $student['neighborhood'] : '' ?>" class="form-control" id="neighborhood" name="neighborhood" required readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="city"> Cidade </label>
                                <input type="text" value="<?php echo isset($student['city']) ? $student['city'] : '' ?>" class="form-control" id="city" name="city" required readonly>
                            </div>
                            <div class="col">
                                <label for="state"> Estado </label>
                                <input type="text" value="<?php echo isset($student['state']) ? $student['state'] : '' ?>" class="form-control" id="state" name="state" required readonly>
                            </div>
                            <div class="col">
                                <label for="country"> País </label>
                                <input type="text" value="<?php echo isset($student['country']) ? $student['country'] : '' ?>" class="form-control" id="country" name="country" required readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="photo1" class="form-label">Foto</label>
                                <input class="form-control" type="file" accept=".jpg" id="photo1" name="photo1" onchange="preview()" required>
                            </div>

                            <input type="hidden" name="id" id="id" value=" <?php echo isset($student['id']) ? $student['id'] : '' ?>">


                            <input type="hidden" name="photo" id="photo" value="">

                            <input type="submit" value="Salvar" class="btn btn-primary mt-3">
                            <a class="btn btn-info mt-3" href="<?php echo base_url() . '/students' ?>">Cancelar</a>

                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>


</div>
<script>
    $("#cep").focusout(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val();

        //Consulta o webservice viacep.com.br/
        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

            //Atualiza os campos com os valores da consulta.
            $("#street").val(dados.logradouro);
            $("#neighborhood").val(dados.bairro);
            $("#city").val(dados.localidade);
            $("#state").val(dados.uf);
            $("#country").val('Brasil');
        });
    });

    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
        var reader = new FileReader();
        reader.readAsDataURL(event.target.files[0]);
        reader.onload = function() {
            console.log(reader.result);
            var input = document.querySelector("#photo")
            input.value = reader.result;
        };

    }

    function clearImage() {
        document.getElementById('photo').value = null;
        frame.src = "";
    }
</script>
<!--Jquery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>

</html>