<div class="modal fade none-border" id="verEditar{{linha.id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="services/salvar/salvarEditar.php" method="POST">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><strong>Cliente</strong></h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="box-title">Dados Do Cliente - COD {{linha.id}}</h3>
                        <input type="hidden" name="id" ng-value="{{linha.id}}">
                        <input type="hidden" name="usuario1" value="<?=$usuario1?>">
                        <input type="hidden" name="senha1" value="<?=$senha1?>">
                       
                    </div>
                </div>

                <div class="row">
                <div class="col-md-4">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" ng-value="linha.nome" ng-model="cliente">
                </div>

                <div class="col-md-4">
                    <label>Data De Nascimento</label>
                    <input type="text" class="form-control" id="campData" name="data_de_nascimento" ng-value="linha.data_de_nascimento|date:'dd/MM/yyyy'" ng-model="data_de_nascimento">
                </div>

                <div class="col-md-4" ng-init="genero = linha.sexo">
                  <label>Genero:</label>
                    <select name="genero" class="form-control" ng-value="linha.sexo" ng-model="genero">
                      <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>

                <div class="col-md-4">
                   <label>CEP:</label>
                     <div class="input-group margin" style="margin: 0 !important;">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-danger" style="background-color: #068c84 !important;"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                           <!-- /btn-group -->
                         <input type="text" name="cep" class="form-control" id="cep" ng-value="linha.cep" ng-model="cep">
                     </div>
                </div>

                <div class="col-md-4">
                    <label>Endereço:</label>
                    <input type="text" name="endereco" class="form-control texto" id="logradouro" ng-value="linha.endereco" ng-model="endereco">
                </div>

                <div class="col-md-4">
                    <label>Numero:</label>
                    <input type="text" name="numero" onkeypress='return SomenteNumero(event)' class="form-control texto" ng-value="linha.numero" ng-model="numero">
                </div>

                <div class="col-md-4">
                    <label>Complemento:</label>
                    <input type="text" name="complemento" class="form-control texto" id="" ng-value="linha.complemento" ng-mode="complemento">
                </div>

                <div class="col-md-4">
                    <label>Bairro:</label>
                    <input type="text" name="bairro" class="form-control texto" id="bairro" ng-value="linha.bairro" ng-model="bairro">
                </div>

                <div class="col-md-2">
                    <label>Cidade:</label>
                    <input type="text" name="cidade" class="form-control texto" id="cidade" ng-value="linha.cidade" ng-model="cidade">
                </div>

                <div class="col-md-2" ng-init="estado = linha.estado">
                   <label>Estado:</label>
                    <select type="text" name="uf" class="form-control" id="uf" ng-value="linha.estado" ng-model="estado">
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                        <option value="ES">ES</option>
                     </select>
                  </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Sair</button>
                
                <button type="submit" class="btn btn-danger delete-event waves-effect waves-light" name="editar" value="S">Salvar</button>

                <!--
                
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal" ng-click="salvarEditar(linha.id,cliente,data_de_nascimento,genero,cep,endereco,numero,complemento,bairro,cidade,estado)">Salvar</button>

            -->
            </div>

            </form>
        </div>
    </div>
</div>