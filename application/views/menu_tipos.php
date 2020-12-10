<!-- Page Content  -->
        <div id="content" class="bg-travel" >

        </br></br>
        <h1 class="h3 text-purple text-center mt-5 mb-2 font-weight-bold" style="background-color: white; padding: 10px; box-shadow: 0px 0px 25px 50px rgba(255,255,255,0.8) ;"> Escolha o Tipo de Evento. </h1>


<center>
  <table class="tabela3 container text-left">

      <?php $i = 0; foreach($tipos as $obj): ?>
      
      <?php if($i%2 == 0): ?>
        <tr>
      <?php endif; ?>
      
        <td>
        
        <div onclick="window.location.href='<?=base_url(isset($cidade)?"eventos/{$cidade}/{$obj->id}":"eventos/tipo/{$obj->id}");?>'" 
        class="card card-body rounded card-title text-center" style="width: 150px;"  >

        <h1 class="h2 text-purple text-center"> <img width="50px" height="50px" src="/CalendarioCultural/icones/<?=$obj->foto;?>"/></h1>
        <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" ><?= $obj->nome;?></h1>
        </div></td>
        
        <?php if($i%2 == 1):?>
          </tr>
        <?php endif; ?>
    <?php $i++; endforeach; ?>
    
    <!--
    <tr>
    <td><div onclick="window.location.href='resultado_form.html'" class="card card-body rounded card-title text-center" style="width: 90%;">
    <h1 class="h2 text-purple text-center"> <i class="material-icons md-76">color_lens</i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Artístico ou Cultural</h1>
    </div></td>
    <td><div class="card card-body rounded card-title text-center" style="width: 90%;">
    <h1 class="h2 text-purple text-center"> <i class="material-icons md-76">memory</i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Científico ou Técnico</h1>
    </div></td>
    </tr>

    
    <tr>
    <td><div class="card card-body rounded card-title text-center" style="width: 90%;">
    <h1 class="h2 text-purple text-center"> <i class="material-icons md-76">shopping_basket</i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Comercial ou Promocional</h1>
    </div></td>
    <td><div class="card card-body rounded card-title text-center" style="width: 90%;">
    <h1 class="h2 text-purple text-center"> <i class="material-icons md-76">emoji_nature</i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Ecoturismo</h1>
    </div></td>
    </tr>

    <tr>
    <td><div class="card card-body rounded card-title text-center" style="width: 90%;">
    <h1 class="h2 text-purple text-center"> <i class="material-icons md-76">sports_soccer</i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Esportivo</h1>
    </div></td>
    <td><div class="card card-body rounded card-title text-center" style="width: 90%;">
    <h1 class="h2 text-purple text-center"> <i class="material-icons md-76">restaurant_menu</i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Gastronômico</h1>
    </div></td>
    </tr>

    <tr>
    <td><div class="card card-body rounded card-title text-center" style="width: 90%;">
    <h1 class="h2 text-purple text-center"> <i class="material-icons md-76">museum</i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Cívico ou Histórico</h1>
    </div></td>
    <td><div class="card card-body rounded card-title text-center" style="width: 90%;">
    <h1 class="h2 text-purple text-center"> <i class="material-icons md-76">import_contacts</i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Religioso</h1>
    </div></td>
    </tr>  

    <tr>
    <td><div class="card card-body rounded card-title text-center" style="width: 90%;">
    <h1 class="h2 text-purple text-center"> <i class="fa fa-plus-circle fa-lg"></i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Selecionar Todas</h1>
    </div></td>
    </tr> -->


</table>
</center>
</br></br>