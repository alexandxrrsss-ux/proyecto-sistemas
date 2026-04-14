<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIMPIEZA DE INTERIOR | The Bros Auto Spa</title>
    <style>
        /* Reset y estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('img/hero-bg.jpg'); /* Asegúrate de tener esta imagen o cambiar la ruta */
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 1.3rem;
            opacity: 0.9;
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #1a1a2e;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: #46d1ff;
            margin: 15px auto 0;
            border-radius: 2px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .service-image {
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .service-card:hover .service-image img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
        }

        .service-content h3 {
            font-size: 1.5rem;
            color: #1a1a2e;
            margin-bottom: 15px;
        }

        .service-content p {
            color: #666;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .service-features {
            list-style: none;
            margin-bottom: 20px;
        }

        .service-features li {
            color: #555;
            padding: 5px 0;
            font-size: 0.9rem;
        }

        .price {
            display: inline-block;
            background: linear-gradient(135deg, #00d4ff 0%, #4fd2de 100%);
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: bold;
            font-size: 1.1rem;
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: white;
            text-align: center;
            padding: 80px 0;
        }

        .btn {
            display: inline-block;
            background: #00aaff;
            color: white;
            padding: 15px 40px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: 0.3s;
        }

        .btn:hover { background: #00d4ff; transform: scale(1.05); }

        footer {
            background: #000;
            color: white;
            text-align: center;
            padding: 30px 0;
        }

        .btn-volver {
            background: #00aaff;
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            transition: 0.3s;
        }
        .btn-volver:hover { background: #00d4ff; }
    </style>
</head>
<body>

    <section class="hero">
        <div class="container">
            <h2>Limpieza Profesional de Interior</h2>
            <p>Transformamos el interior de tu vehículo como nuevo</p>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 class="section-title">Nuestros Servicios de Limpieza</h2>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="img/aspiradprof.png" alt="Aspirado de interiores" onerror="this.src='https://via.placeholder.com/400x250?text=Aspirado'">
                    </div>
                    <div class="service-content">
                        <h3>🧹 Aspirado Profundo</h3>
                        <p>Eliminamos polvo, suciedad y ácaros de cada rincón de tu vehículo con equipos profesionales.</p>
                        <ul class="service-features">
                            <li>✓ Asientos y alfombras</li>
                            <li>✓ Espacios entre costuras</li>
                            <li>✓ Maletero completo</li>
                        </ul>
                        <span class="price">Desde $50</span>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-image">
                        <img src="img/limpiezatabl.png" alt="Limpieza de tableros" onerror="this.src='https://via.placeholder.com/400x250?text=Tableros'">
                    </div>
                    <div class="service-content">
                        <h3>🎛️ Limpieza de Tableros</h3>
                        <p>Restauramos y protegemos el tablero de instrumentos, eliminando manchas.</p>
                        <ul class="service-features">
                            <li>✓ Limpieza profunda</li>
                            <li>✓ Protección UV</li>
                            <li>✓ Acabado mate o brillante</li>
                        </ul>
                        <span class="price">Desde $40</span>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-image">
                        <img src="img/limpvidrios.png" alt="Vidrios impecables" onerror="this.src='https://via.placeholder.com/400x250?text=Vidrios'">
                    </div>
                    <div class="service-content">
                        <h3>🪟 Limpieza de Vidrios</h3>
                        <p>Vidrios cristalinos por dentro y por fuera para una visibilidad perfecta.</p>
                        <ul class="service-features">
                            <li>✓ Interior y exterior</li>
                            <li>✓ Sin rayas ni marcas</li>
                            <li>✓ Tratamiento anti-empañante</li>
                        </ul>
                        <span class="price">Desde $30</span>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-image">
                        <img src="img/trataminetplas.png" alt="Protección de plásticos" onerror="this.src='https://via.placeholder.com/400x250?text=Plasticos'">
                    </div>
                    <div class="service-content">
                        <h3>✨ Tratamiento de Plásticos</h3>
                        <p>Protegemos y revitalizamos todas las superficies plásticas del interior.</p>
                        <ul class="service-features">
                            <li>✓ Puertas y consolas</li>
                            <li>✓ Protección duradera</li>
                            <li>✓ Aspecto como nuevo</li>
                        </ul>
                        <span class="price">Desde $45</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2>¿Listo para renovar el interior de tu vehículo?</h2>
            <p>Reserva tu cita hoy y obtén un 15% de descuento</p>
            <a href="citas.php" class="btn">Reservar Ahora</a>
        </div>
    </section>

    <div style="text-align: center; margin: 40px 0;">
        <a href="index.php" class="btn-volver">Volver al Inicio</a>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2026 The Bros Auto Spa. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>