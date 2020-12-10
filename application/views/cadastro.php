<!-- Page Content  -->
        <div id="content" class="bg-travel" >

            
        <section class=" mt-4">
        
    <form method="post" action="<?=base_url('cadastrar');?>" class="form-login text-center">

        <img class="mb-4" src="images/logo_colorido.png" alt="" width="80%" >

        <h1 class="h1 text-purple text-center"> <i class="fa fa-id-card fa-lg"></i></h1>
        <h1 class="h2 text-purple text-center mt-3 font-weight-bold">Cadastre-se</h1>

          <div class="form-group">
            <input name="email" type="email" class="form-control text-black mt-4" placeholder="Email">
          </div>

           <div class="form-group">
            <input name="nome" type="text" class="form-control text-black" placeholder="Nome">
          </div>

          <div class="form-group">
            <input name="sobrenome" type="text" class="form-control text-black" placeholder="Sobrenome">
          </div>

          <div class="form-group">
            <input name="senha" type="password" class="form-control text-black" placeholder="Senha">
          </div>

          <div class="form-group">
            <input class="form-control text-black" name="nascimento" type="date" onfocus="(this.type='date')" placeholder="Data de Nascimento">
          </div>

            <div class="form-group">
            <select name="genero" class="form-control" id="exampleFormControlSelect1">
              <option disabled selected>Gênero Sexual</option>
              <option>Homem</option>
              <option>Mulher</option>
              <option>Outros</option>
            </select>
           </div>

          <button type="submit" class="btn bg-purple text-white mt-4 mb-3 btn-lg ">Cadastrar</button>
          <label class="justify-content-center mt-4 mb-4"> Você já tem uma conta? </br> <a class="font-weight-bold text-purple" href="login.html"> Fazer Login </a> </label>
        </form>

      </section>

