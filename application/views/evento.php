<!-- Page Content  -->
        <div id="content" >
        </br>


                  <?php $i = 0; foreach($fotos as $foto): ?>
                    <div>
                        <img class="mt-3 all-space" src="/CalendarioCultural/fotos/<?=$foto->arquivo;?>">
                    </div>
                  <?php $i++; break; endforeach; ?>

            <!--
            <div>
            <img src="/CalendarioCultural/fotos/<?=$evt->foto;?>" class="mt-3 all-space">
            </div>

           <div class="mt-4 mb-0">
            <button type="button" class="btn btn-warning text-purple font-weight-bold ml-4"><i class="fa fa-check"></i>&nbsp; Já Estive Aqui</button>
            <button type="button" class="btn bg-purple text-warning ml-2"><i class="fa fa-heart"></i>&nbsp; Favoritar</button>
            </div> -->


	        <h1 class="h4 text-purple text-left mt-4 mb-4 font-weight-bold"> <?=$evt->nome;?> </h1>

    
            <div>
            <h2 class="h5 mt- text-purple"><i class="fa fa-info-circle"></i>&nbsp; Descrição do Evento </h2>
            <p style="color: #000;" class="mt-4 mb-4 text-justify"> <?=$evt->descricao;?> </p>
            </div>

<!--
            <div class="bg-travel-purple text-white all-space mt-4">
            </br>    
            <h1 class="h2 text-warning mt-4 text-center"> <i class="fa fa-rocket fa-lg"></i></h1>
            <h1 class="h5 text-white text-center mt-3 mb-4 font-weight-bold"> Atrações </h1>

            <p class="mt-4 mb-1 h6 text-center text-white"> <b> 1. Música no Palco Brasil </b> </p>
            <p class="mt-2 mb-1 h6 text-center font-weight-bold text-warning">DJ Marcelinho da Lua.</p>
            <p class="mt-0 mb-4 h6 text-center font-weight-bold text-warning"> Gabriel - O Pensador e Detonautas.</p>

            <p class="mt-4 mb-1 h6 text-center text-white"> <b> 2. Atividades para Família</b> </p>
            <p class="mt-2 mb-1 h6 text-center font-weight-bold text-warning">Pintura Facial.</p>
            <p class="mt-0 mb-1 h6 text-center font-weight-bold text-warning">Jogos Germânicos e Teatro Infantil. </p>
            <p class="mt-0 mb-4 h6 text-center font-weight-bold text-warning">Desfile Folclórico.</p>

            <p class="mt-4 mb-1 h6 text-center text-white"> <b>3. Gastronomia</b> </p>
            <p class="mt-2 mb-1 h6 text-center font-weight-bold text-warning"> Mais de 70 tipos da bebida ao Festival.</p>
            <p class="mt-0 mb-1 h6 text-center font-weight-bold text-warning"> Hot-Dog alemão Gigante.</p>
            <p class="mt-0 mb-1 h6 text-center font-weight-bold text-warning"> Burguer Artesanal Alemão 500g.</p>
            <p class="mt-0 mb-5 h6 text-center font-weight-bold text-warning"> Concurso de Chope em Metro.</p>
            </br></br>
            </div> -->


            <div class="">
            <h1 class="h2 text-purple mb-0 mt-5 text-center"> <i class="material-icons md-62">photo_camera</i></h1>
            <h1 class="h5 text-purple  text-center mt-0 font-weight-bold"> Galeria de Fotos </h1>

            <section class="mt-3 mb-0" style="width: 90%; margin: 0 auto;">         
            <div id="carouselExampleIndicators" class="carousel slide  all-space" data-ride="carousel">
              <ol class="carousel-indicators">
                  <?php $i = 0; foreach($fotos as $foto): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i++;?>" class="active"></li>
                  <?php endforeach; ?>
                <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
              </ol>
              <div class="carousel-inner">
                  <?php $i = 0; foreach($fotos as $foto): ?>
                    <div class="carousel-item <?=($i==0)?'active':''?>">
                        <img class="d-block w-100" src="/CalendarioCultural/fotos/<?=$foto->arquivo;?>">
                    </div>
                  <?php $i++; endforeach; ?>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
              </a>
            </div>
            </section>
            </br>
            </div>

            <div class=" text-white bg-travel-purple all-space mt-4">
            </br>
            <h1 class="h2 text-white mt-2 text-center"> <i class="fa fa-clock fa-lg"></i></h1>
            <h1 class="h5 text-white text-center mt-3 font-weight-bold"> Período </h1>
            <p class="mt-2 mb-2 h6 text-center text-white"><?=$evt->periodo;?></p>
            <!--<p class="mt-0 mb-6 h6 text-center text-white">14:25 às 23:00. </p> -->
            </br>
            </div>

            <div>
            </br>
            <h1 class="h2 text-purple mt-5 text-center"> <i class="fa fa-map fa-lg"></i></h1>
            <h1 class="h5 text-purple text-center mt-4 font-weight-bold"> Endereço e Localização </h1>
            <p class="mt-3 mb-4 h6 text-center"><?=$evt->localidade;?></p>

            <!--
            <iframe class="mb-4 mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.966296178464!2d-43.185247385041606!3d-22.50544768521734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x990807b7efb54f%3A0xbbec2ad45d4b6225!2sPal%C3%A1cio%20de%20Cristal%20-%20R.%20Alfredo%20Pach%C3%A1%20-%20Centro%2C%20Petr%C3%B3polis%20-%20RJ%2C%2025685-220!5e0!3m2!1spt-BR!2sbr!4v1571616850392!5m2!1spt-BR!2sbr" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            -->
            </div>

            <hr>

            <div>
            <h1 class="h2 text-purple mt-5 text-center"> <i class="material-icons md-62">monetization_on</i></h1>
            <h1 class="h5 text-purple text-center mt-0 font-weight-bold"> Preços e Ingressos </h1>
            <p class="mt-3 mb-1 h6 text-center"><?=isset($evt->preco)?number_format($evt->preco, 2, ',', '.'):"ENTRADA GRATUITA";?></p>
            <!--<p class="mt-0 mb-4 h6 text-center"><b>MEIA</b> R$ 30,00</p> -->

            <!--<h1 class="h6 text-purple text-center mt-0 font-weight-bold"> Pontos de Venda </h1>
            <p class="mt-1 mb-2 h6 text-center"> Venda Online: ingressocerto.com </p>
            <p class="mt-0 mb-2 h6 text-center"> <b> Venda na Bilheteria do Local Disponível </b> </p>
            <p class="mt-4 mb-1 h6 text-center text-purple"> <b> Aceitamos Cartões </b> </p>
            <center><img  class="mx-auto mt-2 mb-4"  style="width: 40%;" src="images/brands.png"></center>
            </div>-->

            <hr>

            <div>
            <h1 class="h2 text-purple mt-5 text-center"> <i class="material-icons md-62">perm_phone_msg</i></h1>
            <h1 class="h5 text-purple text-center mt-0 font-weight-bold"> Informações e Contato </h1>

            <?php if(isset($evt->site)):?>
            <p class="mt-4 mb-3 h6 text-left"><b>
            <i class="fas fa-envelope "></i> &nbsp; Site: </b> &nbsp; <a href="<?=$evt->site;?>"> <?=$evt->site;?> </a> </p>
            <?php endif; ?>
            <!--
            <p class="mt-0 mb-3 h6 text-left"><b>
            <i class="fas fa-phone "></i> &nbsp; Telefone: </b> &nbsp; 21 3987-6544 </p>

            <p class="mt-0 mb-3 h6 text-left"><b>
            <i class="fas fa-globe fa-lg"></i> &nbsp; Idiomas Falados: </b> &nbsp; Inglês e Português </p>

            <p class="mt-0 mb-3 h6 text-left"><b> <i class="fab fa-facebook-square fa-lg">
            </i> &nbsp; Facebook: </b> &nbsp; facebook.com/bauernfest </p>

            <p class="mt-0 mb-3 h6 text-left"><b>
            <i class="fab fa-whatsapp fa-lg"></i> &nbsp; Whatsapp: </b> &nbsp; +55 21 97453-6577 </p>

            <p class="mt-0 mb-3 h6 text-left"><b>
            <i class="fab fa-instagram fa-lg"></i> &nbsp; Instagram: </b> &nbsp; instagram.com/bauernfest </p>
           --></div> 

            <div class="bg-travel-purple mt-4 all-space ">
            </br>
            <h1 class="h2 text-warning mt-3 text-center"> <i class="material-icons md-62">info</i></h1>
            <h1 class="h5 text-warning text-center mt-0 font-weight-bold"> Outras Informações </h1>
            </br>

            <center>
            <table class="tabela5">

            <tr>
            <td><p class="mt-0 mb-0 h6 text-center"> <b> <i class="material-icons md-48">directions_car</i></br> Possui Estacionamento no Local? 
            </b> &nbsp; </br> <h4><span class=" mt-0 badge badge-success"> Sim </span></h4> </p></td>

            <td><p class="mt-0 mb-0 h6 text-center"> <b><i class="material-icons md-48">accessible</i></br>Possui acesso a pessoas com Necessidades Especiais?
            </b> &nbsp; </br> <h4><span class=" mt-0 badge badge-danger"> Não </span> </h4></p></td>
            </tr>

            <tr>
            <td><p class="mt-0 mb-0 h6 text-center"> <b><i class="material-icons md-48">local_hospital</i></br>Possui Equipe Medica?
            </b> &nbsp; </br> <h4><span class=" mt-0 badge badge-danger"> Não </span> </h4></td>

            <td><p class="mt-0 mb-0 h6 text-center"><p class="mt-2 mb-2 h6 text-center"> <b><i class="material-icons md-48">security</i></br>Possui Seguranças no Evento? 
            </b> &nbsp; </br> <h4><span class=" mt-0 badge badge-success"> Sim </span></h4> </p></td>
            </tr>

            <tr>
            <td><p class="mt-0 mb-0 h6 text-center"><p class="mt-2 mb-2 h6 text-center"> <b><i class="material-icons md-48">local_atm</i></br>Possui Banco 24H proximo ao Local?
            </b> &nbsp; </br> <h4><span class=" mt-0 badge badge-danger"> Não </span> </h4></p></td>

            <td><p class="mt-2 mb-2 h6 text-center"> <b><i class="material-icons md-48">wc</i></br>Possui Banheiros Públicos?
            </b> &nbsp; </br> <h4><span class=" mt-0 badge badge-success"> Sim </span></h4></p></td>
            </tr>

            <tr>
            <td><p class="mt-0 mb-0 h6 text-center"><p class="mt-2 mb-2 h6 text-center"> <b><i class="material-icons md-48">wifi</i></br>Possui Wifi (Internet) Disponível?
            </b> &nbsp; </br> <h4><span class=" mt-0 badge badge-danger"> Não </span> </h4></p></td>

            <td><p class="mt-2 mb-2 h6 text-center"><p class="mt-2 mb-2 h6 text-center"> <b><i class="material-icons md-48">hotel</i></br>Possui Hospedagem proximo ao Local?
            </b> &nbsp; </br> <h4><span class=" mt-0 badge badge-success"> Sim </span></h4> </p></td>
            </tr>

            <tr>
            <td><p class="mt-0 mb-0 h6 text-center"><p class="mt-2 mb-2 h6 text-center"> <b><i class="material-icons md-48">fastfood</i></br>Possui Lanchonete ou Restaurante proximo ao Local?</b> &nbsp; </br> <h4><span class=" mt-0 badge badge-success"> Sim </span></h4> </p></td>
            </tr> 



            </table> 
            </center>

            </br></br>
            </div>