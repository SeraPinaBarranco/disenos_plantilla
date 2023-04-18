<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./uis/head.php" ?>
    <link rel="stylesheet" href="./styles/index_style.css">
    <title>Document</title>
</head>
<body>
    <aside class="aside" id="aside"> 
        
        <div class="head">
            <!-- <div class="profile">
                <img src="" alt="logo">
                <p>Sera codex</p>
            </div> -->
            <i class='bx bx-menu' id="menu" ></i>

        </div>
        <div class="options">
            <div>
                <i class='bx bxs-home' onmouseover="over(this)" onmouseleave="leave(this)"></i>
                <span class="option">Inicio</span>
                <dialog open class="">Inicio</dialog>
                <!-- <span class="span-i" >Inicio</span> -->
            </div>

            <div>
                <i class='bx bx-layer' onmouseover="over(this)" onmouseleave="leave(this)"></i>
                <span class="option">Inventario</span> 
                <dialog open class="">Inventario</dialog>               
            </div>

            <div>
                <i class='bx bxs-book'  onmouseover="over(this)" onmouseleave="leave(this)"></i>
                <span class="option">Salida</span>
                <dialog open class="">Salida</dialog> 
            </div>
            <div>
                <i class='bx bx-layer'  onmouseover="over(this)" onmouseleave="leave(this)"></i>
                <span class="option">Historial</span>
                <dialog open class="">Historial</dialog> 
            </div>
            <div>
                <i class='bx bxs-book'  onmouseover="over(this)" onmouseleave="leave(this)"></i>
                <span class="option">Registrar BD Remota</span>
                <dialog open class="">Registrar BD Remota</dialog> 
            </div>
            <div>
                <i class='bx bxs-book'  onmouseover="over(this)" onmouseleave="leave(this)"></i>
                <span class="option">Actualizar webs</span>
                <dialog open class="">Actualizar webs</dialog> 
            </div>
            <div>
                <i class='bx bxs-book'  onmouseover="over(this)" onmouseleave="leave(this)"></i>
                <span class="option">Exportar</span>
                <dialog open class="">Exportar</dialog> 
            </div>
            <div>
                <i class='bx bxs-book'  onmouseover="over(this)" onmouseleave="leave(this)"></i>
                <span class="option">Actualizar a3erp</span>
                <dialog open class="">Actualizar a3erp</dialog> 
            </div>
            
        </div>
    </aside>
    
    <script src="./scripts/scripts.js"></script>
</body>
</html>