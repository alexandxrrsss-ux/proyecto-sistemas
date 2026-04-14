<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Curso de Lavado Profesional | The Bros Auto Spa</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    *{margin:0;padding:0;box-sizing:border-box;}

    body{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg,#1a1a2e,#16213e);
        color:#fff;
        min-height: 100vh;
    }

    .container{
        max-width:1200px;
        margin:auto;
        padding:40px;
    }

    header{
        text-align:center;
        margin-bottom:50px;
    }

    header h1{
        color:#00d4ff;
        font-size:2.8rem;
    }

    .services-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
        gap:30px;
    }

    .service-card{
        background:rgba(255,255,255,0.05);
        border-radius:15px;
        overflow:hidden;
        cursor:pointer;
        transition:0.3s;
        border:1px solid rgba(0,212,255,0.2);
    }

    .service-card:hover{
        transform:translateY(-8px);
        background:rgba(255,255,255,0.1);
    }

    .service-image{
        width:100%;
        height:220px;
        object-fit:cover;
    }

    .service-info{
        padding:20px;
    }

    .service-icon{
        font-size:2rem;
        margin-bottom:10px;
        color: #00d4ff;
    }

    .features{
        list-style:none;
        margin-top:10px;
    }

    .features li::before{
        content:"✓ ";
        color:#00d4ff;
    }

    .price{
        background:#00d4ff;
        color: #1a1a2e;
        padding: 5px 15px;
        border-radius: 15px;
        display: inline-block;
        margin-top: 10px;
        font-weight: bold;
    }

    /* BOTÓN VOLVER */
    .btn-volver {
        display: inline-block;
        background: #00aaff;
        color: white;
        padding: 15px 30px;
        border-radius: 5px;
        text-decoration: none;
        transition: 0.3s;
        font-weight: bold;
    }
    
    .btn-volver:hover {
        background: #00d4ff;
        transform: scale(1.05);
    }

    /* MODAL */
    .modal{
        display:none;
        position:fixed;
        top:0;left:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.85);
        justify-content:center;
        align-items:center;
        z-index: 1000;
    }

    .modal-content{
        background:#1a1a2e;
        padding:40px;
        border-radius:15px;
        max-width:450px;
        text-align:center;
        border: 2px solid #00d4ff;
    }

    .close{
        margin-top:20px;
        cursor:pointer;
        color:#00d4ff;
        font-weight: bold;
        text-transform: uppercase;
    }
</style>
</head>

<body>

<div class="container">

    <header>
        <h1>🧼 Curso de Lavado Profesional</h1>
        <p>Selecciona un módulo para ver más detalles</p>
    </header>

    <div class="services-grid">

        <div class="service-card" onclick="abrirModal('Lavado Exterior','Aprenderás técnicas profesionales como el método de dos cubetas, uso de espuma activa y cómo evitar rayones.')">
            <img src="https://images.unsplash.com/photo-1607860108855-64acf2078ed9" class="service-image">
            <div class="service-info">
                <div class="service-icon"><i class="fas fa-soap"></i></div>
                <h3>Lavado Exterior</h3>
                <ul class="features">
                    <li>Espuma activa</li>
                    <li>Guantes de microfibra</li>
                    <li>Shampoo automotriz</li>
                    <li>Técnica profesional</li>
                </ul>
                <span class="price">$200 MXN</span>
            </div>
        </div>

        <div class="service-card" onclick="abrirModal('Llantas y Rines','Aprenderás a eliminar suciedad difícil, grasa y aplicar brillo protector.')">
            <img src="img/limpiezaint.png" class="service-image" onerror="this.src='https://via.placeholder.com/300x200?text=Llantas+y+Rines'">
            <div class="service-info">
                <div class="service-icon"><i class="fas fa-brush"></i></div>
                <h3>Llantas y Rines</h3>
                <ul class="features">
                    <li>Desengrasante</li>
                    <li>Cepillos especiales</li>
                    <li>Protección UV</li>
                    <li>Acabado brillante</li>
                </ul>
                <span class="price">$150 MXN</span>
            </div>
        </div>

        <div class="service-card" onclick="abrirModal('Secado Profesional','Aprenderás a secar sin dejar marcas usando microfibra premium.')">
            <img src="img/secadoint.png" class="service-image" onerror="this.src='https://via.placeholder.com/300x200?text=Secado+Profesional'">
            <div class="service-info">
                <div class="service-icon"><i class="fas fa-hand-sparkles"></i></div>
                <h3>Secado</h3>
                <ul class="features">
                    <li>Toallas microfibra</li>
                    <li>Secado sin rayones</li>
                    <li>Sin marcas de agua</li>
                    <li>Acabado espejo</li>
                </ul>
                <span class="price">$120 MXN</span>
            </div>
        </div>

        <div class="service-card" onclick="abrirModal('Limpieza Interior','Aprenderás limpieza profunda, desinfección y eliminación de olores.')">
            <img src="img/rinint.png" class="service-image" onerror="this.src='https://via.placeholder.com/300x200?text=Interior'">
            <div class="service-info">
                <div class="service-icon"><i class="fas fa-spray-can"></i></div>
                <h3>Interior</h3>
                <ul class="features">
                    <li>Limpiadores multiusos</li>
                    <li>Desinfección</li>
                    <li>Aromatización</li>
                    <li>Cuidado de materiales</li>
                </ul>
                <span class="price">$180 MXN</span>
            </div>
        </div>

    </div>

    <div style="text-align: center; margin: 50px 0;">
        <a href="index.php" class="btn-volver">
            <i class="fas fa-arrow-left"></i> Volver al Inicio
        </a>
    </div>

</div>

<div class="modal" id="modal">
    <div class="modal-content">
        <h2 id="titulo" style="color: #00d4ff; margin-bottom: 15px;"></h2>
        <p id="descripcion" style="line-height: 1.6;"></p>
        <div class="close" onclick="cerrarModal()">Cerrar</div>
    </div>
</div>

<script>
    function abrirModal(titulo, descripcion){
        document.getElementById("modal").style.display="flex";
        document.getElementById("titulo").innerText=titulo;
        document.getElementById("descripcion").innerText=descripcion;
    }

    function cerrarModal(){
        document.getElementById("modal").style.display="none";
    }

    // Cerrar modal si se hace clic fuera de la caja
    window.onclick = function(event) {
        if (event.target == document.getElementById("modal")) {
            cerrarModal();
        }
    }
</script>

</body>
</html>