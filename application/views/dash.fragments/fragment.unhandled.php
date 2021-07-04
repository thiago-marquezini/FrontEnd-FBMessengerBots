
        <div class="row">


            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">

                  <div class="row">

                    <div class="col-md-7">

                      <h3>Mensagem de Boas Vindas</h3>

                      <p class="card-description">

                              <div class="d-flex flex-row align-items-center">
                                <i class="mdi mdi-robot icon-sm text-success"></i>
                                <p class="mb-0 ml-1">
                                  <? echo $ActiveBot->name; ?>
                                </p>
                              </div>
                      </p>

                      <p class="card-description">
                        Escreva abaixo a mensagem de boas vindas do seu bot. Esta é a primeira mensagem que é enviada para um usuário quando uma conversa é iniciada.
                        <!--
                        <code>.text-primary</code>,
                        <code>.text-secondary</code> etc. for text in theme colors-->
                      </p>
                    
                      <div class="form-group">
                        <label for="exampleTextarea1">Mensagem</label>
                        <textarea placeholder="Exemplo: Olá, seja bem vindo! Meu nome é {bot_nome} e sou um atendente virtual inteligente. Para ver as opções para este atendimento, envie a palavra Menu." class="form-control" id="greetings_txt" rows="6"></textarea>
                      </div>

                      <div class="floatright">
                        <button type="button" class="btn btn-light btn-fw">Limpar</button>
                        <button type="button" class="btn btn-outline-primary">Salvar</button>
                      </div>

                      <ul class="list-arrow">
                          <li><code>{bot_nome}</code> - Insire o nome do bot na mensagem</li>
                          <li><code>{bot_site}</code> - Insere o website do bot na mensagem</li>
                      </ul>
                      
                    </div>



                    <div class="col-md-5">

                      <h3>Dicas de Boas Vindas</h3>
                      <div class="card-body">

                        <blockquote class="blockquote">
                            <p class="card-description">Estas dicas
                              <code>ajudam seu bot</code> a obter 
                              <code>mais respostas</code> após enviar uma mensagem de boas vindas.
                            </p>

                            <ul class="list-star">
                              <li>Elabore um texto limpo e coerente</li>
                              <li>Evite o uso exagerado de emojis</li>
                              <li>Dê opções para seu potencial cliente.</li>
                              <li>Diga ao usuário como utilizar mais funções do seu bot, ex.: "Digite Ajuda para saber mais.."</li>
                              <li>Crie auto-respostas para palavras comuns como "oi", "olá", "boa tarde", "preços" etc</li>
                            </ul>
                        </blockquote>

                       
                        
                      </div>
                      
                    </div>



                    
                  </div>
                </div>
              </div>
            </div>

                
            </div>

          </div>


          <script type="text/javascript">

            $("#greetings_txt").emojioneArea({
                search: true,
                searchPosition: "bottom",
                recentEmojis: true,
                pickerPosition: "bottom"
            });
          </script>