<div class="container mt-4 ">
    <div class="card bg-light">
        <div class="card-body">
            <form id="formCadastro" method="post">
                <div class="row">
                    <h3 class="text-center">CADASTRO PESSOAL</h3>
                    <div class="form-group col-8">
                        <label class=" control-label" for="Nome">Nome <span>*</span></label>
                        <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
                    </div>
                    <div class="form-group col-4">
                        <label class=" control-label" for="Nome">CPF <span>*</span></label>
                        <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                    </div>
                    <div class="form-group col-2">
                        <label class="control-label" for="Nome">Nascimento<span>*</span></label>
                        <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                    </div>
                    <div class="form-group col-4">
                        <label class="control-label" for="radios">Sexo <span>*</span></label>
                        <div class="mt-2">
                            <label class="radio-inline mr-3" for="radios-0">
                                <input name="sexo" id="sexo" value="feminino" type="radio" required>
                                Feminino
                            </label>
                            <label class="radio-inline mr-3" for="radios-1">
                                <input name="sexo" id="sexo" value="masculino" type="radio">
                                Masculino
                            </label>
                            <label class="radio-inline mr-3" for="radios-2">
                                <input name="sexo" id="sexo" value="naoDizer" type="radio">
                                Prefiro não dizer
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <label class=" control-label" for="prependedtext">Telefone celular<span>*</span></label>
                        <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                    </div>
                    <div class="form-group col-3">
                        <label class="control-label" for="prependedtext">Telefone fixo</label>
                        <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                    </div>
                    <div class="form-group col-4">
                        <label class="control-label" for="prependedtext">Email <span>*</span></label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>
                    <div class="form-group col-4">
                        <label for="txtPass">Senha</label>
                        <input type="password" name="txtPass" id="txtPass" class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label for="txtVerPass">Verificar senha</label>
                        <input type="password" name="txtVerPass" id="txtVerPass" class="form-control">
                    </div>

                    <div class="d-grid gap-2 mt-3">
                        <button type="button" class="btn btn-outline-primary btn-block btn-lg" onclick="cadastrar()">CADASTRAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function cadastrar() {
        $.ajax({
            url: base_url + "/cadastro/cadastrar",
            data: $('#formCadastro').serialize(),
            type: 'POST',
            dataType: "json",
            cache: false,
            error: function() {
                swal("Atenção!",
                    "Ocorreu um erro ao inserir os dados! Contate o CPD!",
                    "error"
                );
            },
            beforeSend: function() {
                swal({
                    title: "Aguarde!",
                    text: "Carregando...",
                    imageUrl: "../assets/img/gifs/loading-red.gif",
                    showConfirmButton: false
                });
            },
            success: function(result) {

            }
        });
    }
</script>