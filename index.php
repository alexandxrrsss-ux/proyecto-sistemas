<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Bros Auto Spa | Lavado y Detallado Profesional</title>
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Estilo para el botón de acceso de The Bros */
        .btn-auth-bros {
            background-color: #55fcee !important; 
            color: #1a1a2e !important;           
            padding: 6px 15px !important;
            border-radius: 4px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            font-size: 0.8rem;
            transition: 0.3s;
            display: inline-block;
            line-height: normal;
        }
        .btn-auth-bros:hover {
            background-color: #ffffff !important; 
            transform: scale(1.05);
            color: #1a1a2e !important;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">The Bros <span>Auto Spa</span></div>
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
        <nav>
            <ul id="nav-list">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="login.php" class="btn-auth-bros">Iniciar Sesion</a></li>
            </ul>
        </nav>
    </header>

    <section id="inicio" class="hero">
        <h1>Tu auto, como nuevo otra vez</h1>
        <p>Expertos en lavado, encerado y detallado automotriz. Calidad premium para los que aman sus vehículos.</p>
    </section>

    <div style="background: #1a1a2e; color: #55fcee; padding: 20px; text-align: center; border: 2px dashed #55fcee; margin: 20px 0;">
        <h3>¡Promoción para nuevos clientes! 🚗✨</h3>
        <p>Regístrate e inicia sesión para obtener un <strong>10% de descuento</strong> en tu primer Lavado Premium.</p>
        <a href="login.php" class="btn-auth-bros">¡Entrar Ahora!</a>
    </div>

    <section id="servicios" class="services">
        <h2 class="section-title">Nuestros Servicios</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><a href="lavado_premium.php"><i class="fas fa-shower"></i></a></div>
                <h3>Lavado Premium</h3>
                <p>Lavado exterior con espuma activa, limpieza de llantas y secado a mano con microfibra.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><a href="encerado.php"><i class="fas fa-gem"></i></a></div>
                <h3>Encerado Completo</h3>
                <p>Protección de la pintura contra el sol y la lluvia. Brillo espejo garantizado.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><a href="detallado_i.php"><i class="fas fa-couch"></i></a></div>
                <h3>Limpieza Interior</h3>
                <p>Aspirado profundo, limpieza de tableros, vidrios y tratamiento de plásticos.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><a href="motor.php"><i class="fas fa-car-crash"></i></a></div>
                <h3>Detallado de Motor</h3>
                <p>Limpieza técnica del compartimiento del motor para eliminar grasa y polvo.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><a href="Curso.php"><i class="fas fa-tools"></i></a></div>
                <h3>Curso de Lavado</h3>
                <p>Aprende a como lavar y detallar tu auto con nuestros cursos.</p>
            </div>
        </div>
    </section>

    <section id="nosotros" class="about">
        <div class="about-image">
            <img src="https://images.unsplash.com/photo-1552930294-6b595f4c2974?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Lavando auto">
        </div>
        <div class="about-text">
            <h2 class="section-title" style="text-align: left; margin-bottom: 20px;">¿Quiénes somos?</h2>
            <p>En <strong>The Bros Auto Spa</strong>, no solo lavamos autos, cuidamos tu inversión. Somos un equipo de apasionados por los detalles, dedicados a ofrecer el mejor servicio de estética automotriz de la ciudad.</p>
            <br>
            <p>Utilizamos productos de la más alta calidad y técnicas modernas para asegurar que tu vehículo salga brillando más que el día que lo compraste.</p>
            <br>
            <a href="#contacto" class="btn">Conócenos</a>
        </div>
    </section>

    <section id="contacto" class="contact">
        <h2 class="section-title" style="color: white;">Contáctanos</h2>
        <p>¡Agenda tu cita hoy mismo y disfruta de la experiencia The Bros!</p>
        
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <h3>Teléfono</h3>
                <p>+52 479 262 0995</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Ubicación</h3>
                <p>Blvd. Morelos #3123, Leòn, Gto, Mèxico.</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>thebrosautospa@gmail.com</p>
            </div>
        </div>
        
        <div style="margin-top: 40px;">
            <a href="citas.php" class="btn"><i class="fab fa-whatsapp"></i> Enviar WhatsApp</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 The Bros Auto Spa. Todos los derechos reservados.</p>
    </footer>

    <script>
        const menuToggle = document.getElementById('mobile-menu');
        const navList = document.getElementById('nav-list');
        menuToggle.addEventListener('click', () => {
            navList.classList.toggle('active');
        });
    </script>
</body>
</html>