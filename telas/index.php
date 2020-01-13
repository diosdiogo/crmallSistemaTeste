<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes
        <small>Lista de Cliente</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="row" style="margin-top:25px;">
          
          <div class="col-md-4">
          
            <div class="card-tools">

              <div class="input-group input-group-sm">
                <input type="text" name="table_search" ng-model="filtrar" class="form-control float-right" placeholder="Procurar">

              </div>
            </div>

          </div>

          <div class="col-md-8">
          
            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#cadastroNovo">Cadastrar</button>

          </div>

        </div>  

        <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Cliente</th>
                      <th>Data De Nascimento</th>
                      <th>Gênero</th>
                      <th>CEP</th>
                      <th>#</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr ng-model="dados" ng-repeat="linha in dados|filter:filtrar|orderBy:sortKey:reverse">
                      <td ng-bind="linha.id"></td>
                      <td ng-bind="linha.nome"></td>
                      <td ng-bind="linha.data_de_nascimento|date:'d/MM/yyyy'"></td>
                      <td>
                        <span class="tag tag-success" ng-if="linha.sexo =='M'">Masculino</span>
                        <span class="tag tag-success" ng-if="linha.sexo =='F'">Feminino</span>
                      </td>
                      <td ng-bind="linha.cep"></td>
                      <td>

                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verEditar{{linha.id}}">Ver / Editar</button>
                       
                      <?php 
                      require_once("pages/modal/verEditar.php");  

                       ?>  


                      </td>  
                       
                    </tr>

                  </tbody>
                </table>
              </div>

              <?php 
                require_once("pages/modal/cadastroNovo.php");  

              ?>  
              <!--
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastroSuccess">Ver / Editar</button>
          -->

               <div class="modal fade  modal-success" id="cadastroSuccess" tabindex="-1" role="dialog" aria-labelledby="ativarAlunoModal" aria-hidden="true">

                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">                    

                    <div class="modal-body">

                      <strong>Alteração feita com sucesso!!!</strong>
                    </div>
                  </div>

                  </div>

              </div>
              



       
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

