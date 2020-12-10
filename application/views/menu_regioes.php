 <!-- Page Content  -->
        <div id="content" class="bg-travel" >

        </br></br>
        <h1 class="h3 text-purple text-center mt-5 mb-2 font-weight-bold text-top"> Escolha a Região. </h1>

<center>
  <table class="tabela3 container">

      
      <?php $i = 0; foreach($regioes as $obj): ?>
      
      <?php if($i%2 == 0): ?>
        <tr> 
      <?php endif; ?>
      
        <td><div onclick="window.location.href='<?=base_url($prefix.$obj->id);?>'" class="card card-body rounded-top card-title text-center" style="width: 85%; padding-top: 20px !important;">
                <img class="card-img-top" width="640px" height="360px" src="/CalendarioCultural/fotos/<?=$obj->foto;?>" alt="FOTO">
        <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 70%;" >Região <?= $obj->nome;?></h1>
        </div>
        </td>
        
        <?php if($i%2 == 1):?>
          </tr>
        <?php endif; ?>
      <?php $i++; endforeach; ?>
      
    <!--  
    <tr>
    <td><div onclick="window.location.href='select-2.html'" class="card card-body rounded-top card-title text-center" style="width: 85%; padding-top: 20px !important;">
    <h1 class="h2 text-purple text-center"> <i class="fa fa-building fa-lg"></i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Região Metropolitana</h1>
    </div></td>
    <td><div class="card card-body rounded-top card-title text-center" style="width: 100%; padding-top: 20px !important;">
    <h1 class="h2 text-purple text-center"> <i class="fa fa-tree fa-lg"></i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Região Vale do Paraíba</h1>
    </div></td>
    </tr>

    <tr>
    <td><div class="card card-body rounded-top card-title text-center" style="width: 85%; padding-top: 20px !important;">
    <h1 class="h2 text-purple text-center"> <i class="fa fa-road fa-lg"></i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Região Centro Sul Fluminense</h1>
    </div></td>
    <td><div class="card card-body rounded-top card-title text-center" style="width: 100%; padding-top: 20px !important;">
    <h1 class="h2 text-purple text-center"> <i class="fa fa-snowflake fa-lg"></i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Região Serrana</h1>
    </div></td>
    </tr>

    <tr>
    <td><div class="card card-body rounded-top card-title text-center" style="width: 85%; padding-top: 20px !important;">
    <h1 class="h2 text-purple text-center"> <i class="fa fa-anchor fa-lg"></i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Região das Baixadas Litorâneas</h1>
    </div></td>
    <td><div class="card card-body rounded-top card-title text-center" style="width: 100%; padding-top: 20px !important;">
    <h1 class="h2 text-purple text-center"> <i class="fa fa-industry fa-lg"></i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Região Norte Fluminense</h1>
    </div></td>
    </tr>

    <tr>
    <td><div class="card card-body rounded-top card-title text-center" style="width: 85%; padding-top: 20px !important;">
    <h1 class="h2 text-purple text-center"> <i class="fa fa-university fa-lg"></i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Região Noroeste Fluminense</h1>
    </div></td>
    <td><div class="card card-body rounded-top card-title text-center" style="width: 100%; padding-top: 20px !important;">
    <h1 class="h2 text-purple text-center"> <i class="fa fa-leaf fa-lg"></i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Região da Costa Verde</h1>
    </div></td>
    </tr>  

    <tr>
    <td><div class="card card-body rounded-top card-title text-center" style="width: 85%; padding-top: 20px !important;">
    <h1 class="h2 text-purple text-center"> <i class="fa fa-plus-circle fa-lg"></i></h1>
    <h1 class="text-purple text-center mt-3 font-weight-bold" style="font-size: 90%;" >Selecionar Todas</h1>
    </div></td>
    </tr> -->

</table>
</center>
</br></br>
