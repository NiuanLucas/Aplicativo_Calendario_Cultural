<!-- Page Content  -->
        <div id="content" class="bg-travel" >
            
            

        </br></br>
        <h1 class="h3 text-purple text-center mt-5 mb-2 font-weight-bold" style="background-color: white; padding: 10px; box-shadow: 0px 0px 25px 50px rgba(255,255,255,0.8) ;">Escolha a Cidade. </h1>


        <form class="form-inline" method="get" action="<?=base_url('cidades/busca');?>">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-warning" id="basic-addon1"> <i class="fa fa-search text-purple"></i></span>
              </div>
              <input type="text" name="cidade" class="form-control" placeholder="Nome do Município" aria-describedby="basic-addon1">
            </div>
            <button style="margin: 0 auto;" class="btn btn-sm bg-warning text-purple font-weight-bold mt-2" type="submit">Pesquisar</button>
        </form>
        
        
  <table class="tabela3 container text-left">


    
    
    <?php $i = 0; foreach($cidades as $obj): ?>
        
    <?php if($i%2 == 0): ?>
        <tr>
    <?php endif; ?>


        <td>

        <div onclick="window.location.href='<?=base_url('cidades/'.$obj->id);?>'" class="card" style="width: 150px;" >
        <img class="card-img-top" src="/CalendarioCultural/fotos/<?=$obj->foto;?>" alt="FOTO">

        <div class="card-body">
        <h1 class="text-purple h6 text-center mt-3 font-weight-bold" ><?= $obj->nome; ?></h1>
        </div>

        </div>


        </td>
        
    <?php if($i%2 == 1):?>
        </tr>
    <?php endif; ?>
        
    <?php $i++; endforeach; ?>
    
    

</table>


</br></br>