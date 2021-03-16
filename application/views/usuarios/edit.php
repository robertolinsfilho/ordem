

<?php $this->load->view('layout/sidebar');?>
     

            <!-- Main Content -->
            <div id="content">

           <?php $this->load->view('layout/navbar.php') ;?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

               
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('usuarios');?>">Usuários</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
                </ol>
                </nav>

               

                

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="<?php echo base_url('usuarios') ?>" title="Voltar"class="btn btn-success btn-sm float-right" ><i class="fas fa-arrow-left"></i>&nbsp; Voltar</a>
                        </div>
                        <div class="card-body">
                        <form>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Nome :</label>
                                <input type="text" class="form-control" name="first_name" placeholder="seu nome" value="<?php echo $usuario->first_name; ?>" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="col-md-4">
                                <label>Sobrenome :</label>
                                <input type="text" class="form-control" name="last_name" placeholder="seu Sobrenome" value="<?php echo $usuario->last_name; ?>" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="col-md-4">
                                <label>E-mail&nbsp;(Login) :</label>
                                <input type="email" class="form-control" name="email" placeholder="seu email" value="<?php echo $usuario->email; ?>" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-md-4">
                                <label>Ativo :</label>
                                <select class="form-control" name="active">
                                <option value="2" <?php echo ($usuario->active == 2) ? 'selected' : '' ?>>Não</option>
                                <option value="1" <?php echo ($usuario->active == 1) ? 'selected' : '' ?>>Sim</option>
                                </select>
                                
                            </div>
                            <div class="col-md-4">
                                <label>Perfil Acesso :</label>
                                <select class="form-control" name="perfil_usuario">
                                <option value="2" <?php echo ($perfil_usuario->id == 2) ? 'selected' : '' ?>>Vendedor</option>
                                <option value="1" <?php echo ($perfil_usuario->id == 1) ? 'selected' : '' ?>>Administrador</option>
                                </select>
                                
                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

       