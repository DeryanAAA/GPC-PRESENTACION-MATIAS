﻿<!DOCTYPE html>
<html lang="en">
    
       <?php include "bd.php"; ?>
      <?php $hoy = date("Y-m-d") ?>
      
    
    <?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['rolcobr'] == '3' ){

} else {

   header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion


exit;
}




?>
    
    
    

  <head>
      
      
      
<style>
        #barra{
            
            height: 10px;
        }  
      
         #aviso{
            
            color: red;
            font-size: 10px;
            text-align: center;
            
        }
        
        #separadormiles{
            
            background-color: black!important;
        }
        
           .imgtb{
            
            height: 15px;
            width: 15px;
            background-image: url(img/edit.png);
            background-size: cover;
             float: left;
             margin-right: 10px;
        }
        
        
             .dtl{
            
            height: 15px;
            width: 15px;
            background-image: url(img/ojo.png);
            background-size: cover;
             float: left;
             margin-right: 10px;
        }
          
          
        #tmlet{
            
            font-size: 10px!important;
            
        }
        
        
        
        .table-bordered{
            
            font-size: 1px!important;
            
            
        }
          
          .btn-default{
              
              padding: 0px!important;
          }
        
        .btn-success{
            
            font-size: 10px!important;
        }
        
        .table-bordered{
            
            margin: 0px!important;
            padding: 0px!important;
        }
    
        .tuclase {
text-align: left; 
font-family: Arial Black; 
font-weight: bold; font-size: 30px; 
background: #0F4CB8; 
-webkit-background-clip: text; 
-moz-background-clip: text; 
background-clip: text; 
color: transparent; 
text-shadow: 0px 3px 3px rgba(255,255,255,0.4),0px -1px 1px rgba(0,0,0,0.3);
}

.subtitulo {
text-align: left; 
font-family: Arial; 
font-weight: bold; font-size: 24px; 
background: #166AFF; 
-webkit-background-clip: text; 
-moz-background-clip: text; 
background-clip: text; 
color: transparent; 
text-shadow: 0px 3px 3px rgba(255,255,255,0.4),0px -1px 1px rgba(0,0,0,0.3);
}
        
    </style>
      


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema Gestor de Proyectos y Cobranza</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="./assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="./assets/vendors/datatables.net-fixedcolumns-bs4/fixedColumns.bootstrap4.min.css">
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="./img/olimini.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
         <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="principalcobranza.php">
            <img src="./img/olitel_lg.png" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="principalcobranza.php">
            <img src="./img/olimini.png" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span><label class="tuclase"> &nbsp;&nbsp; Sistema Gestión de Proyectos y Finanzas </label>
          </button>
      
         <!-- <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>-->
          <ul class="navbar-nav ml-auto">
           
   
              <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="./img/usuario.png" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                    
                <?php 
                     $usuario = "SELECT * FROM PERSONAS WHERE RUT = '".$_SESSION['username']."'";
    
                        $resultadousuario = $conexion->query($usuario);
                    
                        while ( $USERSITO = $resultadousuario->fetch_array() )    
                {
   
    
                         
                        
                       $nombreuser = $USERSITO['NOM_PERSONAS'];
        
            
                }
      
                
                 $rol = "SELECT * FROM rol, personas WHERE rol.ID_ROL = personas.ID_ROL and RUT = '".$_SESSION['username']."'";
    
                        $resultadorol = $conexion->query($rol);
                
      
                            while ( $rolsito = $resultadorol->fetch_array() )    
                {
   
    
                         
                        
                       $nombrerol= $rolsito['NOM_ROL'];
        
            
                }
      
                ?>      
                    
                    
                    
                  <p class="mb-1 mt-3 font-weight-semibold"><?php echo $nombreuser;?></p>
                  
                </div>
                
                
                <a href="./cerrarsession.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Cerrar Sesión</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
      
        <div class="theme-setting-wrapper">
         
        </div>
        
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $nombreuser;?></p>
                    
                    
                    
                  <p class="designation"><?php echo "Usuario: ".$nombrerol;?></p>
                </div>
              </a>
            </li>
             <li class="nav-item nav-category">Menú Principal</li><li class='nav-item'><a class='nav-link' href='./principalcobranza.php'><i class='menu-icon fa fa-th'></i><span class='menu-title'>Inicio</span></a></li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon typcn typcn-chevron-right"></i>
                <span class="menu-title">Formularios</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="formagrproyectocobranza.php">Agregar Proyectos</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarfactura.php">Agregar Factura</a></li>
          			<li class="nav-item"><a class="nav-link" href="formagregarInformeP.php">Agregar Informe de Pago</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarAgrupacion.php">Agregar Agrupación</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarCC.php">Agregar Centro de Costo</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarCiudad.php">Agregar Ciudad</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarCliente.php">Agregar Cliente</a></li>
          <li class="nav-item"><a class="nav-link" href="formagregarCoordinador.php">Agregar Coordinador</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarDetalle.php">Agregar Detalle</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarEstadoC.php">Agregar Estado Cobranza</a></li>
                    <li class="nav-item"><a class="nav-link" href="formagregarestadoproyecto.php">Agregar Estado de Proyecto</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarJefeE.php">Agregar Jefe Externo</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarLinea.php">Agregar Línea Negocio</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarRegion.php">Agregar Región</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarSupE.php">Agregar Supervisor Externo</a></li>
          <li class="nav-item"><a class="nav-link" href="formagregarSupI.php">Agregar Supervisor Interno</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarTipoI.php">Agregar Tipo Informe</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarTipo.php">Agregar Tipo Proyecto</a></li>
				</ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon typcn typcn-chevron-right"></i>
                <span class="menu-title">Listados</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="listadoip.php">Reportes Cobranza</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoproyectoscobranza.php">Proyectos</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoservicios.php">Servicios Fijos</a></li> 
					<li class="nav-item"><a class="nav-link" href="detallesServiciosFijos.php">Detalles Servicios Fijos</a></li> 
					<li class="nav-item"><a class="nav-link" href="listadoInformePago.php">Informes de Pago</a></li>
					<li class="nav-item"><a class="nav-link" href="listadofacturascobranza.php">Facturas</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoAgrupacion.php">Agrupación</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoCC.php">Centro de Costo</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoCiudad.php">Ciudad</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoCliente.php">Cliente</a></li>
          <li class="nav-item"><a class="nav-link" href="listadoCoordinador.php">Coordinador</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoDetalle.php">Detalle</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoEstadoC.php">Estado de Cobranza</a></li>
                    <li class="nav-item"><a class="nav-link" href="listadoEstadoProyecto.php">Estado de Proyecto</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoJefeE.php">Jefe Externo</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoLinea.php">Línea Negocio</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoRegion.php">Región</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoSupE.php">Supervisor Externo</a></li>
          <li class="nav-item"><a class="nav-link" href="listadoSupI.php">Supervisor Interno</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoTipoI.php">Tipo Informe</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoTipo.php">Tipo Proyecto</a></li>
				</ul>
              </div>
            </li>
          
      <?php
          
      require("bd.php");    
          $conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
      
      //Validar conexión.
			if(mysqli_connect_errno()){
				echo "Error al conectar.";
				exit();
			}
		
			//Validar que exista la base de datos
			mysqli_select_db($conexion, $base_datos) or die("No se encuentra la base de datos.");
			mysqli_set_charset($conexion, "utf8");
		
			$consulta = "SELECT f.ID_FACT, f.ID_IP ,f.ID_CL, f.NFACT, f.VALOR_FACTURA, f.F_FACTURA, f.Valor_Facturado, f.POR_FACTURAR, c.ID_CL, c.NOM_CL
      FROM factura f
      INNER JOIN cliente c ON f.ID_CL = c.ID_CL";
			$resultado = mysqli_query($conexion, $consulta);
      
     ?>    

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#reportes" aria-expanded="false" aria-controls="reportes">
                <i class="menu-icon typcn typcn-chevron-right"></i>
                <span class="menu-title">Reportes</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="reportes">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="desempeñoReporte.php">Desempeño Proyectos F.O</a>
                  </li>  <li class="nav-item">
                    <a class="nav-link" href="desempeñoReporteAR.php">Desempeño Proy. Andrés Retamal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="desempeñoReporteRanco.php">Desempeño Proyectos Ranco</a>
                  </li>
                  <!--
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a>
                  </li>-->
                </ul>
              </div>
            </li>  

            
              
     
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
			<div class="">
				<div class="card-body">
					<div class="d-flex justify-content-between border-bottom">
						<h2 class="subtitulo">Facturas</h2>
							  
					</div>
				</div>
			</div>
            <div class="row">
			<div class="col-md-6 grid-margin stretch-card">
</div>
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Listado de Facturas</h4>
                     
                      <p class="text-right">   
							<!--<a href="generar_excel.php">
								<button type="button" class="btn btn-inverse-secondary"><img src="img/microsoft-excel.png" width="16px" height="16px"> Generar Excel</button>
							</a>-->
							<a title= "Agregar Factura" href="formagregarfactura.php">
								<button  type="button" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Agregar una Factura</button>
							</a>
						</p>  
                    <div class="table-responsive">
                        
                                              
                        
                      <table id="order-listing" class="table table-striped" style="text-align:center;">
                          

                        <thead style="text-align:center;">
                        <tr>
                          <th> ID FACTURA </th>
                          <th> N° FACTURA </th>
                          <th>FECHA</th>
                          <th> VALOR DE FACTURA</th>  
                          <th> VALOR ASOCIADO</th>
                          <th> POR FACTURAR</th>
                          <th> CLIENTE </th>
                          <th> IP ASOC </th>
                          <th>ACCIONES</th>
                        </tr>
                      </thead>
                        <tbody>
                            
                            <?php     
                              ?>
                             <?php  while($fila = mysqli_fetch_array($resultado)){ ?>
                           
                          <tr>
                            <td style="text-align:center;"><?php  echo $fila['ID_FACT']; ?></td>
                            <td style="text-align:center;"><?php  echo $fila['NFACT']; //$fila['NFACT']; ?></td>
                            <td style="text-align:center;"><?php  echo $fila['F_FACTURA']; ?></td>
                            <td style="text-align:center;"><?php  echo "$".number_format($fila['VALOR_FACTURA'], 0, ",", "."); ?></td>
                            <td style="text-align:center;">
                            <?php // echo $fila['VALOR_IP']; ?>
                            <?php
                            $consultaVIP = "SELECT f.ID_FACT, SUM(fip.VALOR_FACTURADOIP) AS vip , fip.ID_FACT
                            FROM factura f
                            INNER JOIN facturaaip fip ON fip.ID_FACT = f.ID_FACT
                            WHERE fip.ID_FACT =".$fila['ID_FACT'];
			                      $resultadoVIP = mysqli_query($conexion, $consultaVIP);

                            while($fila4 = mysqli_fetch_array($resultadoVIP)){
                              echo "$".number_format($fila4['vip'], 0, ",", ".");
                                }    
                            ?>
                            </td>

                            <td style="text-align:center;"><?php 
                           // $queryPF = "SELECT SUM(facturaaip.POR_FACTURAR) AS pf, facturaaip.SALDO_FAVOR FROM facturaaip WHERE ID_FACT =".$fila['ID_FACT'];
                            //$resultPF = mysqli_query($conexion, $queryPF);
                           // $rowPF = mysqli_fetch_array($resultPF);

                           //$consultaFact = "SELECT f.ID_FACT, f.POR_FACTURAR, fip.ID_FACT
                          // FROM factura f
                          // INNER JOIN facturaaip fip ON fip.ID_FACT = f.ID_FACT
                          // WHERE fip.ID_FACT =".$fila['ID_FACT'];
                          // $resultadoFact = mysqli_query($conexion, $consultaFact);

                          // while($fila5 = mysqli_fetch_array($resultadoFact)){
                            // echo "$".number_format($fila5['POR_FACTURAR'], 0, ",", ".");
                           //  $porfacturar = $fila5['POR_FACTURAR'];
                            //   }    
                          
                            echo $fila['POR_FACTURAR'];
                             $porfacturar = $fila['POR_FACTURAR'];


                            //echo  "$".number_format($fila['POR_FACTURAR'], 0, ",", ".");//$fila['POR_FACTURAR']; ?> </td>

                          
                            <td style="text-align:center;"><?php echo $fila['NOM_CL']; ?></td>

                          <td style="text-align:center;">
                          <?php
                            $consultaIP = "SELECT ip.ID_IP, fip.ID_FACT, fip.ID_IP 
                            FROM informe_de_pago ip
                            INNER JOIN facturaaip fip ON fip.ID_IP = ip.ID_IP
                            WHERE fip.ID_FACT =".$fila['ID_FACT'];
			                      $resultadoIP = mysqli_query($conexion, $consultaIP);

                            while($fila3 = mysqli_fetch_array($resultadoIP)){
                              echo $fila3['ID_IP']." , ";
                                }
                                  
                            ?>
                             
                          </td>
                           
                              <?PHP
                              //echo $fila['NOM_CL'];
                              // $cliente = "SELECT * FROM CLIENTE, factura WHERE CLIENTE.ID_CL = FACTURA.ID_CL AND factura.ID_FACT = ".$fila['ID_FACT'];
                        // $resultadooo = mysqli_query($conexion, $cliente);
                            
                       //     while($cl = mysqli_fetch_array($resultadooo)){ 
                         //    echo  ucfirst($cl['NOM_CL']);;
                            
                            //}
                              ?>
                                <?php
                                //echo $fila['ID_IP'];
                              //$consulta2 = "SELECT * FROM pago_fact, informe_de_pago where pago_fact.ID_IP = informe_de_pago.ID_IP and pago_fact.ID_FACT =".$fila['ID_FACT'];
			             //$resultado2 = mysqli_query($conexion, $consulta2);
                            
                           // while($fila2 = mysqli_fetch_array($resultado2)){
                           // echo $fila2['NIP']." <br> ";
                            
                           // } ?>
   
                            <td>
                             
                                <a href='formeditfact.php?ID_FACT=<?php echo $fila['ID_FACT']; ?>'><section class='imgtb'></section></a> 
                                
                                <a href='form_fac_a_ips.php?nfactura=<?php echo $fila['NFACT']?>&idfactura=<?php echo $fila['ID_FACT']?>&vfact=<?php echo $fila['VALOR_FACTURA']?>&porfa=<?php echo $porfacturar?>'><button type='button' class='btn btn-warning'> Asociar un IP </button></a>
                                
                                <a href= 'formagregaroc.php?idfactura=<?php echo $fila['ID_FACT']; ?>'><button type='button' class='btn btn-danger'> OC </button></a>
                            </td>
                          </tr>
                         
                         
                         
                      
                        <?php    } ?>
                       
                        
                         
                   
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 grid-margin">
            
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              
              <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Olitel © 2021 - Creado por MP
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      
       
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
      
 
    <script src="./assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="./assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="./assets/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/shared/off-canvas.js"></script>
    <script src="./assets/js/shared/hoverable-collapse.js"></script>
    <script src="./assets/js/shared/misc.js"></script>
    <script src="./assets/js/shared/settings.js"></script>
    <script src="./assets/js/shared/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
      
        <script>
        $(document).ready(function() {
            $('#order-listing').DataTable({
                "order": [
                    [0, "desc"]
                ],
                "language": {
                    "url": "lib/Spanish.json" 
                }

            });
        });
    </script>
      
        
      
     
      

    <!-- End custom js for this page -->
  </body>
</html>