<!-- Page Content  -->
        <div id="content" class="bg-travel" >

            
        <section class=" mt-4">
        
            <form class="form-login text-center" method="post" action="<?=base_url('eventos/salvar');?>" enctype="multipart/form-data">

        <img class="mb-4" src="images/logo_colorido.png" alt="" width="80%" >

        <h1 class="h1 text-purple text-center"> <i class="fa fa-flag fa-lg"></i></h1>
        <h1 class="h2 text-purple text-center mt-3 font-weight-bold">Vamos criar um Evento?</h1>
        </br>

        <h1 class="h5 text-purple text-left mt-3 font-weight-bold"> 1. Dados Principais </h1>

          <div class="form-group">
            <input type="text" name="nome" class="form-control text-black mt-4" placeholder="Nome do Evento">
          </div>

          <div class="form-group">
            <input type="text" name="frequencia" class="form-control text-black mt-4" placeholder="Frequencia do Evento">
          </div>

          <div class="form-group">
            <select name="tipo" class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Categoria do Evento</option>
              <?php foreach($tipos as $tipo): ?>
              <option value="<?=$tipo->id?>">
                  <?=$tipo->nome?>
              </option>
              <?php endforeach; ?>
              <!--
              <option>Ecoturismo</option>
              <option>Cívico ou Histórico</option>
              <option>Artístico ou Cultural</option>
              <option>Comercial ou Promocional</option>
              <option>Científico ou Técnico</option>
              <option>Esportivo</option>
              <option>Gastronômico</option>
              <option>Artístico ou Cultural</option>
              <option>Religioso</option>          
              <option>Outros</option> -->
            </select>
           </div>
        

         <div class="form-group">
            <select name="cidade" class="form-control font-weight-bold">
              <option disabled selected>Município do Evento</option>
              <?php foreach($cidades as $tipo): ?>
              <option value="<?=$tipo->id?>">
                  <?=$tipo->nome;?>
              </option>
              <?php endforeach; ?>
              <!--
              <option>Ecoturismo</option>
              <option>Cívico ou Histórico</option>
              <option>Artístico ou Cultural</option>
              <option>Comercial ou Promocional</option>
              <option>Científico ou Técnico</option>
              <option>Esportivo</option>
              <option>Gastronômico</option>
              <option>Artístico ou Cultural</option>
              <option>Religioso</option>          
              <option>Outros</option> -->
            </select>
           </div>


        <div class="form-group">
            <input type="text" name="localidade" class="form-control text-black mt-4" placeholder="Localidade">
        </div>
        
         <!--<div class="form-group">
            <select name="cidade" class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Cidades da Região</option>
              <?php foreach($cidades as $tipo): ?>
              <option value="<?=$tipo->id?>">
                  <?=$tipo->nome?>
              </option>
              <?php endforeach; ?>
              
              <option>Ecoturismo</option>
              <option>Cívico ou Histórico</option>
              <option>Artístico ou Cultural</option>
              <option>Comercial ou Promocional</option>
              <option>Científico ou Técnico</option>
              <option>Esportivo</option>
              <option>Gastronômico</option>
              <option>Artístico ou Cultural</option>
              <option>Religioso</option>          
              <option>Outros</option> 
            </select>
           </div> -->
          <div class="form-group">
            <input type="number" name="edicao" class="form-control text-black" placeholder="Nº Edição do Evento">
          </div>

           <div class="form-group">
            <select name="importancia" class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Importância do Evento</option>
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>              
            </select>
           </div>

        <div class="form-group">
            <input type="text" class="form-control text-black" name="periodo" placeholder="Período do Ano">
          </div>


        <div class="form-group">
            <select name="entrada" class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Tipo de Entrada</option>
              <option>Gratuita</option>
              <option>Ingresso Pago</option>
            </select>
        </div>

        <div class="form-group">
        <input type="number" name="preco" class="form-control text-black" placeholder="Preço do Ingresso (R$)">
        </div>

        <div class="form-group">
            <input type="text" name="site" class="form-control text-black" placeholder="Site do Evento">
        </div>

        <div class="form-group font-weight-bold">
          <textarea name="descricao" class="form-control" rows="3" placeholder="Descrição do Evento"></textarea>
        </div>

        <div class="form-group">
        <label for="files" class="btn bg-warning text-purple font-weight-bold btn-block"> <i class="fa fa-camera"></i>&nbsp; Selecionar 1ª Foto do Evento</label>
        <input id="file1" name="foto1" type="file" accept="image/png, image/jpg, image/jpeg">
        </div>
         
        <div class="form-group">
        <label for="files" class="btn bg-warning text-purple font-weight-bold btn-block"> <i class="fa fa-camera"></i>&nbsp; Selecionar 2ª Foto do Evento</label>
        <input id="file2" name="foto2" type="file" accept="image/png, image/jpg, image/jpeg">
        </div>
         
        <div class="form-group">
        <label for="files" class="btn bg-warning text-purple font-weight-bold btn-block"> <i class="fa fa-camera"></i>&nbsp; Selecionar 3ª Foto do Evento</label>
        <input id="file3" name="foto3" type="file" accept="image/png, image/jpg, image/jpeg">
        </div>

        <div class="line-purple"></div>
        <h1 class="h5 text-purple text-left mt-3 mb-3 font-weight-bold">2. Data & Horário </h1>
            <!--
          <div class="form-group">
            <input type="text" class="form-control text-black" name="periodo" placeholder="Período do Ano">
          </div> -->

          <div class="form-group">
            <input class="form-control text-black" type="text" onfocus="(this.type='date')" mas coonfocus="(this.type='date')"  placeholder="Data de Começo">
          </div>

          <div class="form-group">
            <input class="form-control text-black" type="text" onfocus="(this.type='date')" placeholder="Data de Término">
          </div>  

          <div class="form-group">
            <input class="form-control text-black" type="text" onfocus="(this.type='time')"  placeholder="Horário de início">
          </div>

          <div class="form-group">
            <input class="form-control text-black" type="text" onfocus="(this.type='time')"  placeholder="Horário de Fim">
          </div>

          <div class="line-purple"></div>
          <h1 class="h5 text-purple text-left mt-0 mb-3 font-weight-bold">3. Informações de Endereço </h1>

           <div class="form-group">
            <input type="text" class="form-control text-black" placeholder="Endereço do Evento">
          </div>

          <div class="line-purple"></div>
          <h1 class="h5 text-purple text-left mt-0 mb-3 font-weight-bold">4. Valores e Preços </h1>

            <!--
            <div class="form-group">
            <select name="entrada" class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Tipo de Entrada</option>
              <option>Gratuita</option>
              <option>Ingresso Pago</option>
            </select>
           </div>

          <div class="form-group">
            <input type="number" name="preco" class="form-control text-black" placeholder="Preço do Ingresso (R$)">
          </div>
            -->
          <div class="line-purple"></div>
           <h1 class="h5 text-purple text-left mt-0 mb-3 font-weight-bold">5. Contatos e Redes sociais </h1>

           <div class="form-group">
            <input type="email" class="form-control text-black" placeholder="Email do Evento">
          </div>

        <div class="form-group">
            <input type="number" class="form-control text-black" placeholder="Telefone do Evento (Com DDD)">
          </div>

         <div class="form-group">
            <input type="text" class="form-control text-black" placeholder="Idiomas Falados">
          </div>
        <!--
        <div class="form-group">
            <input type="text" name="site" class="form-control text-black" placeholder="Site do Evento">
          </div> -->

           <div class="form-group">
            <input type="text" class="form-control text-black" placeholder="Url do Facebook">
          </div>

          <div class="form-group">
            <input type="number" class="form-control text-black" placeholder="Whatsapp do Evento">
          </div> 

          <div class="form-group">
            <input type="text" class="form-control text-black" placeholder="Url do Instagram">
          </div>          


          <div class="line-purple"></div>
          <h1 class="h5 text-purple text-left mt-0 mb-3 font-weight-bold">6. Informações Extras </h1>

           <div class="form-group">
            <select class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Possui Estacionamento no Local? </option>
              <option>Sim</option>
              <option>Não</option>            
            </select>
           </div>

                      <div class="form-group">
            <select class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Possui acesso a pessoas com Necessidades Especiais? </option>
              <option>Sim</option>
              <option>Não</option>            
            </select>
           </div>

                      <div class="form-group">
            <select class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Possui Equipe Medica?</option>
              <option>Sim</option>
              <option>Não</option>            
            </select>
           </div>


                      <div class="form-group">
            <select class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Possui Seguranças no Evento?  </option>
              <option>Sim</option>
              <option>Não</option>            
            </select>
           </div>
                      <div class="form-group">
            <select class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Possui Banco 24H proximo ao Local?  </option>
              <option>Sim</option>
              <option>Não</option>            
            </select>
           </div>

                      <div class="form-group">
            <select class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Possui Banheiros Públicos?</option>
              <option>Sim</option>
              <option>Não</option>            
            </select>
           </div>

                      <div class="form-group">
            <select class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Possui Wifi (Internet) Disponível?  </option>
              <option>Sim</option>
              <option>Não</option>            
            </select>
           </div>


                      <div class="form-group">
            <select class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Possui Hospedagem proximo ao Local? </option>
              <option>Sim</option>
              <option>Não</option>            
            </select>
           </div>

                      <div class="form-group">
            <select class="form-control font-weight-bold" id="exampleFormControlSelect1">
              <option disabled selected>Possui Lanchonete ou Restaurante proximo ao Local? </option>
              <option>Sim</option>
              <option>Não</option>            
            </select>
           </div>


          <button type="submit" class="btn bg-purple text-white mt-4 mb-5 btn-lg ">Criar Evento</button>


        </form>

      </section>
