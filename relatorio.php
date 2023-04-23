<?php
require "header.php";
require "navbar.php";
?>
<style>
    h1 {
        border-bottom: solid 1px gray;
        padding-bottom: 1%;
        margin-bottom: 2%;
        text-align: center;
    }
</style>
<div class="container">
    <h1>Relátorios</h1>

    <form action="" method="post">

        <div class="row col-12">
            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="row">
            <div class="col-10">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" class="form-control">
            </div>
            <div class="col-2">
                <label for="numero">Número da casa:</label>
                <input type="text" name="numero" id="numero" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <label for="unidade">Unidade Pertencente:</label>
                <select class="form-select" name="unidade" id="unidade">
                    <option value="">Selecione a unidade</option>
                    <option value="Carobeiras">Carobeiras</option>
                    <option value="Cecap II">Cecap II</option>
                    <option value="Colinas">Colinas</option>
                    <option value="Jardin Marin">Jardin Marin</option>
                    <option value="Nina">Nina</option>
                    <option value="Paineiras">Paineiras</option>
                    <option value="Palmeiras">Palmeiras</option>
                    <option value="Parque das Nações">Parque das Nações</option>
                    <option value="São Cosme">São Cosme</option>
                    <option value="São João">São João</option>
                    <option value="Vila América">Vila América</option>
                    <option value="Vila Paes">Vila Paes</option>
                </select>
            </div>
            <div class="col-4">
                <label for="quadra">Quadra:</label>
                <input type="number" id="quadra" name="quadra" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="data_sintomas">Data dos primeiros sintomas:</label>
                <input type="date" id="data_sintomas" name="data_sintomas" class="form-control">
            </div>

            <div class="col-6">
                <label for="data_notificacao">Data da notificação:</label>
                <input type="date" id="data_notificacao" name="data_notificacao" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="ocupacao">Ocupação ou Trabalho</label>
                <input type="text" name="ocupacao" id="ocupacao" class="form-control">
            </div>

            <div class="col-sm-6">
                <label for="sintomas">Principais Sintomas:</label>
                <br>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> I have a bike</label>
                <br>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                <label for="vehicle2"> I have a car</label>
                <br>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                <label for="vehicle3"> I have a boat</label>
                <br>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> I have a bike</label>
                <br>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                <label for="vehicle2"> I have a car</label>
                <br>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                <label for="vehicle3"> I have a boat</label>
                <br>
            </div>
        </div>

        <div class="botoes">
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
    </form>

</div>
</body>

</html>