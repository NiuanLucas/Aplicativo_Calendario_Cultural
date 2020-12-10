<!-- Page Content  -->
        <div id="content" class="" >

            <div>
            <img src="/CalendarioCultural/images/bg3.jpg" class="mt-3 all-space"
             alt="Responsive image" >
            <center>
            
            <a href="<?=base_url('cidades');?>" style="margin-top: -40%;" class="btn btn-lg shadow font-weight-bold bg-warning text-purple"> <i class="fa fa-compass fa-lg fa-spin"></i>&nbsp; Encontrar Eventos?</a>
            
            </center>
            </div>


  <div class="row mt-4">
    <div class="col-8"> <h2 class="text-up"> <i class="fa fa-star"></i> Principais Eventos </h2> </div>
    <div class="col-4"> <a href="<?=base_url("tipos");?>" class="btn btn-sm font-weight-bold bg-warning text-purple"> Ver Todos </a> </div>
  </div>

<div class="mt-4">
<div class="bloco-over" style="height: 400px !important;">




<table class="tabela">
        <tr>

    <?php $i = 0; foreach($eventos as $obj): ?>
        <td>
            <div onclick="window.location.href='<?=base_url("eventos/detalhes/{$obj->id}");?>'" class="card"  style="width: 230px; height: 200px;">
                <img class="card-img-top" src="/CalendarioCultural/fotos/<?=$obj->foto;?>">
                  <div  class="card-body shadow" style="background-color: white;">
                     <textarea class=" h5 card-title mt-2" style=" width: 100%; height:35%; overflow-y: hidden; overflow-y: hidden; 
                    border: 0px solid #fff;">  <?=$obj->nome;?> </textarea></br>       
                     <textarea style=" width: 100%;  overflow-y: hidden; overflow-y: hidden; border: 0px solid #fff;"> <?=ucfirst($obj->periodo);?> </textarea></br>
                  </div>
            </div> 
        </td>
    <?php $i++; endforeach; ?>
          </tr>
</table>
   
</div>
</div>
            <div class="bg-travel-warning all-space mt-4">
            </br>
            <h2 class="text-purple bg-warning text-center p-4 font-weight-bold"> História do Rio </h2>

            <p class="text-purple bg-warning  font-weight-bold bg-warning-off text-right pr-4 pt-5" style="margin-top: -12.5%; font-size: 15px; padding-left: 10% !important;">A região que ocupa atualmente a cidade do Rio de Janeiro foi descoberta no dia 1º de janeiro de 1502. Uma expedição portuguesa comandada por Gaspar de Lemos.</p>

            <p class="text-purple bg-warning  font-weight-bold bg-warning-off text-right pr-4 pt-5" style="margin-top: -12.5%; font-size: 15px; padding-left: 40% !important;">Acreditando ter chegado à desembocadura de um grande rio, assim, batizou a baía com o nome de Rio de Janeiro.</p>

            <img class="p-2" src="/CalendarioCultural/images/elemento.png" style="width: 100%; margin-top: -30%; margin-bottom: -5%; margin-left: 0%;">

            </div>

<div class="row mt-4">
    <div class="col-8"> <h2 class="text-up mt-4"> <i class="fa fa-star"></i> Filtrar Eventos por Regiões  </h2> </div>
    <div class="col-4"> <a href="<?=base_url("regioes");?>" class="btn mt-4 btn-sm font-weight-bold bg-warning text-purple"> Ver Todos </a> </div>
  </div>

<div class="mt-4">
<div class="bloco-over"  style="height: 300px !important;">

<table class="tabela">
<tr>
    
    <?php $i = 0; foreach($regioes as $obj): ?>      
       <!-- <td>
            <div onclick="window.location.href='<?=base_url("regioes/{$obj->id}");?>'" class="card"  style="width: 230px; height: 165px;">
                <img class="card-img-top" src="/CalendarioCultural/fotos/<?=$obj->foto;?>">
                  <div  class="card-body shadow" style="background-color: white;">
                   <h5 class="card-title mt-2" > Região <?=$obj->nome;?> </h5>        
                  </div>
            </div> 
        </td> -->


        <td>
            <div onclick="window.location.href='<?=base_url("regioes/{$obj->id}");?>'" class="card"  style="width: 230px; height: 165px;">
                <img class="card-img-top" src="/CalendarioCultural/fotos/<?=$obj->foto;?>">
                  <div class="card-body shadow" style="background-color: white;">
                    <textarea class=" h5 card-title mt-2" style=" width: 100%; height:35%; overflow-y: hidden; overflow-y: hidden; 
                    border: 0px solid #fff;">Região <?=ucfirst($obj->nome);?></textarea></br> 
                  </div>
            </div> 
        </td>


    <?php $i++; endforeach; ?>

</tr>
</table>
   

</div>
</div>


</br>
<div class="row">
    <div class="col-8"> <h2 class="text-up"> <i class="fa fa-star"></i> Filtrar Eventos por Cidades </h2> </div>
    <div class="col-4"> <a href="<?=base_url("cidades");?>" class="btn btn-sm font-weight-bold bg-warning text-purple"> Ver Todos </a> </div>
  </div>

<div class="mt-4">
<div class="bloco-over"  style="height: 350px !important;">

<table class="tabela">
    <tr>
    <?php $i = 0; foreach($cidades as $obj): ?>
        <td>
            <div onclick="window.location.href='<?=base_url("cidades/{$obj->id}");?>'" class="card"  style="width: 230px; height: 165px;">
                <img class="card-img-top" src="/CalendarioCultural/fotos/<?=$obj->foto;?>">
                  <div class="card-body shadow" style="background-color: white;">

                    <textarea class=" h5 card-title mt-2" style=" width: 100%; height:35%; overflow-y: hidden; overflow-y: hidden; 
                    border: 0px solid #fff;"><?=ucfirst($obj->nome);?></textarea></br> 

                    <textarea style=" width: 100%; height:35%; overflow-y: hidden; overflow-y: hidden; 
                    border: 0px solid #fff;">Região <?=$obj->regiao->nome;?></textarea></br> 
                  </div>
            </div> 
        </td>
    <?php $i++; endforeach; ?>

</tr> 
</table>
   

</div>
</div>
