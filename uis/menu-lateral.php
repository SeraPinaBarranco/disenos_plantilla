 <aside class="aside-menu-icon">
     <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

         <div class="offcanvas-header">
             <h5 class="offcanvas-title" id="offcanvasExampleLabel"><a href="<?php $url = "" ?>">MENÚ</a></h5>
             <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>

         <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
             <div class="offcanvas-body ">

                 <span><i class="fa fa-dashboard me-2" style="color: #fff;"></i>Inventario</span>
                 <ul class="">
                     <li class="" aria-disabled="true"><i class="fa-regular fa-circle me-2" style="color: #fff;"></i><a class="uri" href="./views/vista.php">Registrar</a></li>
                     <li class="" aria-disabled="true"><i class="fa-regular fa-circle me-2" style="color: #fff;"></i><a class="uri" href="./views/vista2.php">Buscar</a></li>

                 </ul>

                 <span><i class="fa-solid fa-right-from-bracket me-2" style="color: #fff;"></i>Salida</span>
                 <ul></ul>

                 <span><i class="fa-solid fa-clock-rotate-left me-2" style="color: #fff;"></i>Historial</span>
                 <ul class="">
                     <li class="" aria-disabled="true"><i class="fa-regular fa-circle me-2" style="color: #fff;"></i>Entrada</li>
                     <li class="" aria-disabled="true"><i class="fa-regular fa-circle me-2" style="color: #fff;"></i>Salida</li>

                 </ul>

                 <span><i class="fa-solid fa-book me-2" style="color: #fff;"></i>Registrar BD Remota</span>
                 <ul></ul>
                 <span><i class="fa-solid fa-book me-2" style="color: #fff;"></i>Actualizar Webs</span>
                 <ul></ul>
                 <span><i class="fa-solid fa-book me-2" style="color: #fff;"></i>Exportar</span>
                 <ul></ul>
                 <span><i class="fa-solid fa-book me-2" style="color: #fff;"></i>Importar</span>
                 <ul></ul>
                 <span><i class="fa-solid fa-book me-2" style="color: #fff;"></i>Actualizar a3erp</span>
                 <ul></ul>



             </div>
         </form>
     </div>
 </aside>