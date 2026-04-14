<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVADO PREMIUM | The Bros Auto Spa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #ffffff;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        header {
            text-align: center;
            margin-bottom: 60px;
        }

        header h1 {
            font-size: 3rem;
            color: #00d4ff;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 212, 255, 0.3);
        }

        header p {
            font-size: 1.2rem;
            color: #b8b8b8;
            max-width: 600px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0, 212, 255, 0.2);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 212, 255, 0.2);
            background: rgba(255, 255, 255, 0.08);
        }

        .service-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }

        .service-info {
            padding: 30px;
        }

        .service-info h3 {
            font-size: 1.8rem;
            color: #00d4ff;
            margin-bottom: 15px;
        }

        .service-info p {
            color: #b8b8b8;
            line-height: 1.8;
            font-size: 1rem;
        }

        .price-tag {
            display: inline-block;
            background: linear-gradient(135deg, #00d4ff, #0099cc);
            color: #ffffff;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: bold;
            margin-top: 20px;
            font-size: 1.2rem;
        }

        .features {
            list-style: none;
            margin-top: 20px;
        }

        .features li {
            padding: 8px 0;
            color: #b8b8b8;
            display: flex;
            align-items: center;
        }

        .features li::before {
            content: "✓";
            color: #00d4ff;
            font-weight: bold;
            margin-right: 10px;
        }

        /* Botón Volver */
        .btn-volver {
            background: #00aaff;
            color: white;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            transition: 0.3s;
        }
        .btn-volver:hover { background: #00d4ff; }

        footer {
            text-align: center;
            margin-top: 80px;
            padding: 40px 20px;
            border-top: 1px solid rgba(0, 212, 255, 0.2);
        }

        footer p { color: #b8b8b8; margin-bottom: 10px; }

        @media (max-width: 768px) {
            header h1 { font-size: 2rem; }
            .services-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>🚗 Lavado Premium</h1>
        <p>Experimenta el máximo cuidado para tu vehículo con nuestro servicio de lavado detallado profesional</p>
    </header>

    <main class="services-grid">
        <article class="service-card">
            <img src="img/espuma.png" alt="Lavado con espuma activa" class="service-image" onerror="this.src='https://via.placeholder.com/400x300?text=Espuma+Activa'">
            <div class="service-info">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🧼</div>
                <h3>Lavado Exterior con Espuma Activa</h3>
                <p>Aplicación de espuma activa de alta densidad que elimina la suciedad sin dañar la pintura.</p>
                <ul class="features">
                    <li>Espuma de pH neutro</li>
                    <li>Protección de pintura</li>
                    <li>Eliminación de contaminantes</li>
                    <li>Acabado brillante</li>
                </ul>
                <span class="price-tag">$35.00</span>
            </div>
        </article>

        <article class="service-card">
            <img src="img/rin.png" alt="Limpieza de rines" class="service-image" onerror="this.src='https://via.placeholder.com/400x300?text=Limpieza+Rines'">
            <div class="service-info">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🛞</div>
                <h3>Limpieza de Llantas</h3>
                <p>Limpieza profunda de rines y neumáticos con productos que restauran el brillo original.</p>
                <ul class="features">
                    <li>Limpiador de frenos</li>
                    <li>Protección UV</li>
                    <li>Brillo duradero</li>
                    <li>Eliminación de grasa</li>
                </ul>
                <span class="price-tag">$25.00</span>
            </div>
        </article>

        <article class="service-card">
            <img src="img/microfibra.png" alt="Secado detallado" class="service-image" onerror="this.src='https://via.placeholder.com/400x300?text=Secado+Microfibra'">
            <div class="service-info">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🧽</div>
                <h3>Secado a Mano</h3>
                <p>Secado manual cuidadoso con toallas de microfibra premium para evitar rayones.</p>
                <ul class="features">
                    <li>Toallas de microfibra premium</li>
                    <li>Sin rayones</li>
                    <li>Sin marcas de agua</li>
                    <li>Acabado espejo</li>
                </ul>
                <span class="price-tag">$20.00</span>
            </div>
        </article>
    </main>

    <div style="text-align: center; margin: 60px 0;">
        <a href="index.php" class="btn-volver">
            Volver al Inicio
        </a>
    </div>

    <footer>
        <p>© 2026 Detailing Auto - Servicio de Lavado Premium</p>
        <p>📞 Contacto: +52 479 262 0995 | 📧 thebrosautospa@gmail.com</p>
    </footer>
</div>

</body>
</html>