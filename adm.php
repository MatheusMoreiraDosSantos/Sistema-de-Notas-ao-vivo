<!DOCTYPE html>
<html lang="pt-br">
<?php
    include('verifica_login.php');  

    ?>

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Notas ao Vivo</title>


    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <b class="navbar-brand mr-1">Sistema de Notas ao Vivo</b>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <h5 style="margin-left: 2%; margin-top: 8px" class="text-white bg-dark"><?php echo 'Olá '. $_SESSION['usuario'];?></h5>
      

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Configurações</a>
            <a class="dropdown-item" href="#">Conta</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="adm.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Administrador</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="oeadm.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Ordem de entrada</span>
          </a>
        </li>
        
      </ul>

      <div id="content-wrapper">
        
       
        <center><form method="post" action="cadastraconjunto.php">

          <div class="card-body" style="width: 35rem;">
            <img class="" src="img/cadastrar.jpg" alt="Imagem de capa do card" width="200px" style="margin-top: -50px">
            <div class="card-body" >
             <h5 class="card-title">Cadastrar Conjunto</h5>
                <select class="form-control form-control-lg" name="prova" >
                <option value="0">Selecione a categoria</option>
                <option value="1">Derby Aberta n2 n3 n4</option>
                <option value="2">Derby Aberta n1</option>
                <option value="3">Derby Amador n2 n3 n4</option>
                <option value="4">Derby Amador n1</option>
                <option value="5">Derby Pré futurity Aberta n2 n3 n4</option>
                <option value="6">Derby Pré futurity Amador n2 n3 n4</option>
                <option value="7">Derby Jovem</option>
                <option value="8">Derby Jovem 10</option>

                </select>
                <div class="custom-control-inline custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="nivel1" value="1" id="customCheck1">
                  <label class="custom-control-label" style="margin-right: 10px" for="customCheck1">Nível 1</label>
                </div>
                 <div class="custom-control-inline custom-checkbox">
                   <input type="checkbox" class="custom-control-input" name="nivel2"value="1" id="customCheck2">
                  <label class="custom-control-label" style="margin-right: 10px" for="customCheck2">Nível 2</label>
                </div>
                 <div class="custom-control-inline custom-checkbox">
                   <input type="checkbox" class="custom-control-input" name="nivel3"value="1" id="customCheck3">
                  <label class="custom-control-label" style="margin-right: 10px" for="customCheck3">Nível 3</label>
                </div>
                 <div class="custom-control-inline custom-checkbox">
                   <input type="checkbox" class="custom-control-input" name="nivel4"value="1" id="customCheck4">
                  <label class="custom-control-label" style="margin-right: 10px" for="customCheck4">Nível 4</label>
                </div>
                <div class="form-group" style="margin: 10px">
                    <input type="number" name="oe" class="form-control" placeholder="Ordem de entrada">
                 </div>
                  <div class="form-group" style="margin: 10px">
                      <input type="number" name="exh" class="form-control" placeholder="EXH#">
                  </div>
                   <div class="form-group" style="margin: 10px">
                      <input type="text" name="cavaleiro" class="form-control" placeholder="Cavaleiro/Amazona">
                  </div>
                   <div class="form-group" style="margin: 10px">
                      <input type="text" name="animal" class="form-control" placeholder="animal">
                  </div>
                   <div class="form-group" style="margin: 10px">
                      <input type="text" name="proprietario" class="form-control" placeholder="Proprietário">
                  </div>
                   <div class="form-group" style="margin: 10px">
                      <input type="text" name="cidade" class="form-control" placeholder="Cidade, UF">
                  </div>
                  <button type="submit" class="btn btn-dark">Cadastrar</button>

            </div>
        </div>
        
      </form></center>

          

      
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Sistema de Notas ao Vivo</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "SAIR" abaixo se você estiver pronto para terminar sua sessão atual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCELAR</button>
            <a class="btn btn-primary" href="sair.php">SAIR</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

    <script src="js/percursos.js"></script>

  </body>

</html>