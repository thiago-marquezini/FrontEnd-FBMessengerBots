<div class="row">


            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">

                  <div class="row">


                    <div class="col-md-7">

                      <h3>Configurações do Menu Interativo</h3>
                      <p class="card-description">

                              <div class="d-flex flex-row align-items-center">
                                <i class="mdi mdi-robot icon-sm text-success"></i>
                                <p class="mb-0 ml-1">
                                  <? echo $ActiveBot->name; ?> 
                                </p>
                              </div>
                      </p>

                      <div class="form-check form-check-flat">
                          <label class="form-check-label">
                            <input class="form-check-input" checked="true" type="checkbox"> Habilitar Menu
                            <i class="input-helper"></i>
                          </label>
                      </div>

                      <p class="card-description">
                        Abaixo você pode editar, deletar e criar novos itens/sub-menus a qualquer momento. Caso queira refazer seu menu em outra order, clique em Limpar Menu ou Restaurar Padrão.
                        <!--
                        <code>.text-primary</code>,
                        <code>.text-secondary</code> etc. for text in theme colors-->
                      </p>


                      <div class="template-demo interactmenu_actionmenu">
                        <button type="button" onclick="AddItemToMenu();" class="btn btn-inverse-primary btn-fw">Adicionar Item</button>
                        <button type="button" class="btn btn-inverse-secondary btn-fw">Limpar Menu</button>
                        <button type="button" class="btn btn-inverse-light btn-fw">Restaurar Padrão</button>
                      </div>



                      <div class="interactmenu_blockquote_additem">
                        <blockquote class="blockquote">

                          <p class="card-description">Adicionar Item ao Menu</p>

                          <div class="row">

                            <div class="col-md-6 grid-margin stretch-card"">
                              <div class="card">
                                <div class="card-body">
                                  <p class="card-description">
                                    Preencha as informações do <b>item</b> abaixo e ao lado.
                                  </p>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend bg-primary border-primary">
                                        <span class="input-group-text bg-transparent text-white">
                                          <i class="mdi mdi mdi-menu text-white"></i>
                                        </span>
                                      </div>
                                      <select class="form-control">
                                        <option>Abrir Submenu</option>
                                        <option>Abrir Link</option>
                                        <option>Enviar Palavra</option>
                                      </select>

                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend bg-primary border-primary">
                                        <span class="input-group-text bg-transparent">
                                          <i class="mdi mdi mdi-menu text-white"></i>
                                        </span>
                                      </div>
                                      <input class="form-control" placeholder="Nome do Item" aria-label="Nome do Item" aria-describedby="colored-addon2" type="text">
                                    </div>
                                  </div>


                                </div>
                              </div>
                            </div>



                            <div class="col-md-6 grid-margin stretch-card"">
                              <div class="card">
                                <div class="card-body">
                                  <p class="card-description">
                                    Preencha as informações do <b>sub-menu</b> do item
                                  </p>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend bg-primary border-primary">
                                        <span class="input-group-text bg-transparent text-white">
                                          <i class="mdi mdi mdi-menu text-white"></i>
                                        </span>
                                      </div>
                                      <select class="form-control">
                                        <option>Abrir Submenu</option>
                                        <option>Abrir Link</option>
                                        <option>Enviar Palavra</option>
                                      </select>

                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend bg-primary border-primary">
                                        <span class="input-group-text bg-transparent">
                                          <i class="mdi mdi mdi-menu text-white"></i>
                                        </span>
                                      </div>
                                      <input class="form-control" placeholder="Nome do Item" aria-label="Nome do Item" aria-describedby="colored-addon2" type="text">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <button type="button" class="btn btn-outline-primary floatright">Adicionar Item</button>
                                  </div>


                                </div>
                              </div>
                            </div>

                          </div>

                        </blockquote>
                      </div>

                      <p class="card-description">
                        Para alterar a ordem dos itens do seu menu basta movê-los com o mouse na tabela abaixo
                      </p>

                        <table class="table table-striped sorted_table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Item
                          </th>
                          <th>
                            Tipo
                          </th>
                          <th>
                            Nome
                          </th>
                          <th>
                            Opções
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            #1
                          </td>
                          <td>
                            John Doe
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 123.21
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            #2
                          </td>
                          <td>
                            Henry Tom
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 150.00
                          </td>
                        </tr>
                      </tbody>
                    <div></div>
                  </table>





                     
                      
                    </div>



                    <div class="col-md-5">
                      
                      <div class="card-body">

                        <h3>O que é o Menu Interativo</h3>

                        <p class="card-description">
                        O Menu Interativo é um menu fixo que está sempre disponível para os usuários que conversam com seu bot. Através dele você pode ajudar o usuário a chegar no lugar certo ou até mesmo abrir um link externo..
                        <!--
                        <code>.text-primary</code>,
                        <code>.text-secondary</code> etc. for text in theme colors-->
                      </p>
                        

                        <h4 class="card-title">Exemplo de Menu</h4>
                        <p class="card-description">
                          <img src="../assets_dash/images/interactmenu.png" width="420" height="280">
                        </p>
                        <ul class="list-arrow">
                          <li>Elabore um texto limpo e claro</li>
                          <li>Evite o uso exagerado de emojis</li>
                          <li>Dê opções para seu potencial cliente.</li>
                          <li>Diga ao usuário como utilizar mais funções do seu bot</li>
                          <li>Nulla volutpat aliquam velit&gt;</li>
                        </ul>
                      </div>
                      
                    </div>



                    
                  </div>
                </div>
              </div>
            </div>



                    
            </div></div>


            <script type="text/javascript">

              var AddItem = false;
              function AddItemToMenu()
              {
                if (AddItem == false)
                {
                  AddItem = true;
                  $(".interactmenu_blockquote_additem").show();
                } else
                {
                  AddItem = false;
                  $(".interactmenu_blockquote_additem").hide();
                }
                

              }

              // Sortable rows
              $('.sorted_table').sortable({
                containerSelector: 'table',
                itemPath: '> tbody',
                itemSelector: 'tr',
                placeholder: '<tr class="placeholder"/>'
              });
            </script>