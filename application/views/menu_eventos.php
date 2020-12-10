<!-- Page Content  -->
        <div id="content" >

        </br></br>      
	   <h1 class="h5 text-purple text-center mt-5 mb-2 font-weight-bold"> <i class="fa fa-search"></i>&nbsp; Aqui está o resultado da busca de eventos. </h1>


<div class="mt-4">
<div class="bloco-over" style="height: 450px !important;">


<table class="tabela">
    <tr>
    <?php $i = 0; foreach($eventos as $obj): ?>
      
      
        <td>
            <div class="card" onclick="window.location.href='<?=base_url("eventos/detalhes/{$obj->id}");?>'" style="width: 18rem; height: 100%; ">
              <img class="card-img-top" src="/CalendarioCultural/fotos/<?=$obj->foto;?>">
              <div class="card-body">
                <h5 class="card-title mt-1"><?=ucfirst($obj->frequencia);?></h5>

                <textarea style=" width: 100%; height: 130%; overflow-y: hidden; overflow-y: hidden; border: 0px solid #fff;"><?=$obj->nome;?></textarea></br>
                <center><a href="<?=base_url("eventos/detalhes/{$obj->id}");?>" style=" width: 70%;" class="btn btn-warning font-weight-bold text-purple mt-2 mb-3"> <i class="fa fa-search-plus"></i>&nbsp; Visitar</a></center>

              </div>
            </div>
        </td>
        
          <?php $i++; endforeach;?>
    </tr>

    


<!-- FAZ UM IF QUANDO Ñ TIVER EVENTO MANDA PRA ERRO_EVENTO.PHP -->
<?php
if ($i == 0)
{
    echo "<script >window.location.assign('erro');</script>";
}
?>

</table>
   
</div>

    <h1 class="h4 text-purple text-center mt-2 font-weight-bold"> <i class="fa fa-paper-plane"></i>&nbsp; Encontramos <b> <?php echo $i; ?>  eventos nessa categoria. </h1> 

</div>


<h3 class="text-center font-italic h6 text-purple mt-5 mb-3"> <i class="fa fa-frown fa-lg  h2 mb-2"></i> </br> Não encontrou o que estava procurando? </h3>

<center><a href="<?=base_url();?>" class="btn shadow font-weight-bold pl-4 pr-4 bg-warning text-purple"> Pesquisar outros eventos?  </a></center>

</br></br>