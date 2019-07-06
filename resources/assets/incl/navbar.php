<!DOCTYPE html>
<html lang="es">

    <body id="mimin" class="dashboard">

        <!-- start: Header -->
          <nav class="navbar navbar-default header navbar-fixed-top">
            <div class="col-md-12 nav-wrapper">
              <div class="navbar-header" style="width:100%;">
                <div class="opener-left-menu is-open">
                  <span class="top"></span>
                  <span class="middle"></span>
                  <span class="bottom"></span>
                </div>
                  <a href="/revitec/platformAdmin/index.php" class="navbar-brand"> 
                   <b>REVITEC</b>
                  </a>
                <ul class="nav navbar-nav navbar-right user-nav">
                  <li class="user-name"><span><?php echo $_SESSION['username'] ?></span></li>
                    <li class="dropdown avatar-dropdown">
                     <img src="/revitec/asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                     <ul class="dropdown-menu user-dropdown">
                       <li><a href="/revitec/profileUser/profileUser.php"><span class="fa fa-user"></span> Mi perfil</a></li>
                       <li><a href="/revitec/login/logout.php"><span class="fa fa-lock"></span> Cerrar Sesion</a></li>
                       <li role="separator" class="divider"></li>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        <!-- end: Header -->

        <div class="container-fluid mimin-wrapper">
            <!-- start:Left Menu -->
              <div id="left-menu">
                <div class="sub-left-menu scroll">
                  <ul class="nav nav-list">
                      <li><div class="left-bg"></div></li>
                      <li class="time">
                        <h1 class="animated fadeInLeft">21:00</h1>
                        <p class="animated fadeInRight">Sat,October 1st 2029</p>
                      </li>
                      <li class="active ripple">
                        <a href="/revitec/platformAdmin/index.php"><span class="fa-home fa"></span> Inicio                          
                        </a>                        
                      </li>
                      <li class="ripple">
                        <a class="tree-toggle nav-header">
                          <span class="fa fa-cog"></span> Configuración
                          <span class="fa-angle-right fa right-arrow text-right"></span>
                        </a>
                        <ul class="nav nav-list tree">
                          <li><a href="/revitec/empresa/regEmp.php">Empresa</a></li>
                          <li><a href="/revitec/proveedor/regProveedor.php">Proveedor</a></li>
                          <li><a href="/revitec/clase_vehiculo/regTipoVeh.php">Tipos de vehiculo</a></li>
                          <li><a href="/revitec/usuarios/regUsers.php">Usuarios</a></li>
                          <li><a href="/revitec/parametros/regParam.php">Parametros</a></li>
                          <li><a href="/revitec/vehiculo/regVehiculo.php">Vehículos</a></li>
                        </ul>
                      </li>
                      <li class="ripple">
                        <a href="/revitec/reporte_envio/ReporteEnvio.php">
                          <span class="fa fa-clipboard"></span> Reporte de envio
                        </a>
                      </li>
                      <li class="ripple">
                          <a href="/revitec/plantillas/regPlantillaSms.php">
						            <span class="fa-share-square fa"></span> Plantilla SMS</a>
                      </li>                      					  
                      <li class="ripple">
                        <a href="/revitec/auditoria/regAuditoria.php">
                          <span class="fa fa-calendar"></span> Historial de usuarios
                        </a>
                      </li>                      
                    </ul>
                  </div>
              </div>

            <!-- end: Left Menu -->
</html>