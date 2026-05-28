<?php
/**
 * Template Name: Plantilla Webfusion Digital
 * Description: Plantilla base para la empresa de informática Webfusion Digital SL.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="container header-container">
            <div class="logo">
                <h1>Webfusion <span>Digital</span></h1>
            </div>
            <nav class="main-navigation">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="inicio" class="hero-section">
        <div class="container hero-content">
            <h2>Soluciones Informáticas Inteligentes</h2>
            <p>Impulsamos la transformación digital de tu negocio con soporte técnico, desarrollo a medida y seguridad robusta.</p>
            <a href="#contacto" class="btn-primary">Saber Más</a>
        </div>
    </section>

    <section id="servicios" class="services-section">
        <div class="container">
            <h2 class="section-title">Nuestros Servicios</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Mantenimiento IT</h3>
                    <p>Soporte técnico proactivo para que los sistemas de tu empresa nunca se detengan.</p>
                </div>
                <div class="service-card">
                    <h3>Desarrollo Web & Software</h3>
                    <p>Creamos aplicaciones y sitios web modernos, rápidos y optimizados para SEO.</p>
                </div>
                <div class="service-card">
                    <h3>Ciberseguridad</h3>
                    <p>Protegemos tus datos y los de tus clientes contra cualquier tipo de amenaza digital.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="nosotros" class="about-section">
        <div class="container">
            <h2 class="section-title">Sobre Webfusion Digital SL</h2>
            <p>Somos un equipo de profesionales apasionados por la tecnología. Nos convertimos en el departamento informático externo de tu empresa, ofreciendo soluciones personalizadas y un trato cercano.</p>
        </div>
    </section>

    <section id="contacto" class="contact-section">
        <div class="container">
            <h2 class="section-title">¿Hablamos?</h2>
            <p>Cuéntanos tu proyecto o problema informático. Te responderemos en menos de 24 horas.</p>
            
            <div class="contact-mock-form">
                <p><em>[Formulario de Contacto Interactivo]</em></p>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Webfusion Digital SL. Todos los derechos reservados.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>