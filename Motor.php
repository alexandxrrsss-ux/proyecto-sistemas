<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIMPIEZA DE MOTOR | The Bros Auto Spa</title>
    <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset y estilos base */
        * { margin: 0; padding: 0; box-sizing: border-box; }

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

        /* Hero Section - Imagen de fondo corregida */
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('img/motorlimpio.png'); /* Usando una de tus imágenes de fondo */
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn-cta {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: #ffd700;
            color: #1e3c72;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .btn-cta:hover {
            background: #ffed4a;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
        }

        /* Section Titles */
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #1e3c72;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: #ffd700;
            margin: 1rem auto 0;
            border-radius: 2px;
        }

        /* Process Section */
        .process-section { padding: 5rem 0; background: white; }
        .process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .process-card {
            background: #f9f9f9;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .process-card:hover { transform: translateY(-10px); }

        .image-container { width: 100%; height: 250px; overflow: hidden; }
        .image-container img { width: 100%; height: 100%; object-fit: cover; }

        .card-content { padding: 1.5rem; }
        .card-content h3 { color: #1e3c72; margin-bottom: 0.5rem; }

        /* Benefits Section */
        .benefits-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
        }

        .benefits-section .section-title { color: white; }
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .benefit-item {
            text-align: center;
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .benefit-icon { font-size: 3rem; margin-bottom: 1rem; }

        /* Pricing Section */
        .pricing-section { padding: 5rem 0; }
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .pricing-card {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }

        .pricing-card.featured { border: 3px solid #ffd700; transform: scale(1.05); }

        .badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: #ffd700;
            color: #1e3c72;
            padding: 0.5rem 1.5rem;
            border-radius: 20px;
            font-weight: bold;
        }

        .price { font-size: 2.5rem; color: #1e3c72; font-weight: bold; margin-bottom: 1rem; }
        .pricing-card ul { list-style: none; text-align: left; margin-bottom: 2rem; }
        .pricing-card li { padding: 8px 0; border-bottom: 1px solid #eee; }

        .btn-select {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: #1e3c72;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
        }

        /* Contact & Footer */
        .contact-info-box {
            background: #fff;
            padding: 3rem;
            border-radius: 15px;
            max-width: 800px;
            margin: 0 auto 50px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        footer { background: #1e3c72; color: white; text-align: center; padding: 2rem 0; }
        
        .btn-volver {
            background: #00aaff;
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>

    <section id="limpieza-motor" class="hero-section">
        <div class="hero-content">
            <h2>Limpieza Técnica de Motor</h2>
            <p>Eliminación profesional de grasa y polvo para un motor como nuevo</p>
            <a href="citas.php" class="btn-cta">Reservar Servicio</a>
        </div>
    </section>

    <main class="container">
        <section class="process-section">
            <h2 class="section-title">Nuestro Proceso</h2>
            <div class="process-grid">
                <div class="process-card">
                    <div class="image-container">
                        <img src="img/motorsucio.png" alt="Motor sucio" onerror="this.src='https://via.placeholder.com/400x250?text=Antes'">
                    </div>
                    <div class="card-content">
                        <h3>1. Evaluación</h3>
                        <p>Identificamos áreas críticas con acumulación de grasa y residuos.</p>
                    </div>
                </div>

                <div class="process-card">
                    <div class="image-container">
                        <img src="img/lavadomotor.png" alt="Limpiando motor" onerror="this.src='https://via.placeholder.com/400x250?text=Durante'">
                    </div>
                    <div class="card-content">
                        <h3>2. Limpieza Técnica</h3>
                        <p>Uso de desengrasantes biodegradables y vapor a presión controlado.</p>
                    </div>
                </div>

                <div class="process-card">
                    <div class="image-container">
                        <img src="img/motorlimpio.png" alt="Motor impecable" onerror="this.src='https://via.placeholder.com/400x250?text=Despues'">
                    </div>
                    <div class="card-content">
                        <h3>3. Protección</h3>
                        <p>Aplicamos protectores de mangueras y plásticos para evitar resequedad.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section class="benefits-section">
        <div class="container">
            <h2 class="section-title">Beneficios Clave</h2>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">⚡</div>
                    <h3>Eficiencia</h3>
                    <p>Mejor disipación del calor en el compartimiento.</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">🔍</div>
                    <h3>Detección</h3>
                    <p>Identifica fugas de líquidos rápidamente.</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">💰</div>
                    <h3>Plusvalía</h3>
                    <p>Aumenta el valor estético de tu vehículo.</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">🛡️</div>
                    <h3>Seguridad</h3>
                    <p>Evita riesgos de incendio por grasa acumulada.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section container">
        <h2 class="section-title">Planes de Limpieza</h2>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Básica</h3>
                <div class="price">$49.99</div>
                <ul>
                    <li>✓ Limpieza superficial</li>
                    <li>✓ Aspirado de bahía</li>
                    <li>✓ Secado técnico</li>
                </ul>
                <a href="citas.php" class="btn-select">Seleccionar</a>
            </div>
            <div class="pricing-card featured">
                <div class="badge">Más Popular</div>
                <h3>Técnica Especial</h3>
                <div class="price">$79.99</div>
                <ul>
                    <li>✓ Limpieza profunda con vapor</li>
                    <li>✓ Desengrasado total</li>
                    <li>✓ Detallado de plásticos</li>
                    <li>✓ Brillante final</li>
                </ul>
                <a href="citas.php" class="btn-select">Seleccionar</a>
            </div>
            <div class="pricing-card">
                <h3>Premium Plus</h3>
                <div class="price">$119.99</div>
                <ul>
                    <li>✓ Limpieza Técnica</li>
                    <li>✓ Hidratado de mangueras</li>
                    <li>✓ Protección anticorrosión</li>
                    <li>✓ Garantía The Bros</li>
                </ul>
                <a href="citas.php" class="btn-select">Seleccionar</a>
            </div>
        </div>
    </section>

    <div class="contact-info-box">
        <h3>¿Dudas sobre el servicio?</h3>
        <p>📍 Blvd. Morelos #3123, León, Gto, México.</p>
        <p>📞 +52 479 262 0995</p>
        <p>✉️ thebrosautospa@gmail.com</p>
    </div>

    <div style="text-align: center;">
        <a href="index.php" class="btn-volver">Volver al Inicio</a>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2026 The Bros Auto Spa. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>