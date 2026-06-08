<?php
$fecha = date('d \d\e F \d\e Y');
$hora = date('H:i');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reino Federal de Darcandrid</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <div class="header-inner">
            <div class="flag">
                <img src="images/Darcandrid_Flag.png" alt="Bandera de Darcandrid">
            </div>
            <div class="header-text">
                <h1>Reino Federal de Darcandrid</h1>
                <p class="subtitulo">Portal Oficial del Reino de Minecraft creado por Xavier Fernández Zúñiga</p>
            </div>
        </div>
    </header>

    <nav>
        <a href="#origen">Origen</a>
        <a href="#gobierno">Gobierno</a>
        <a href="#economia">Inicios</a>
        <a href="#galeria">Galería</a>
        <a href="#mapa">Mapa</a>
        <a href="#info">Información</a>
    </nav>

    <main>

        <section class="hero">
            <h2>Bienvenido al Reino Federal de Darcandrid</h2>
            <p>Una nación construida bloque a bloque, con su propia constitución, parlamento y horas de historia.</p>
        </section>

        <section id="origen" class="seccion">
            <h3>Origen del Reino</h3>
            <p>Darcandrid es un mundo ficticio creado en Minecraft por Xavier Fernández Zúñiga el <strong>27 de mayo de 2019</strong>. Desde entonces ha sido desarrollado de forma continua, aprovechando ratos libres y períodos de ocio creativo.</p>
            <p>Es el único mundo de desarrollo continuoque Xavier ha mantenido de forma constante en Minecraft desde 2019 y ha evolucionado desde sus primeras estructuras hasta convertirse en una nación con identidad propia: bandera, constitución, instituciones y territorio definido dentro del juego.</p>
        </section>

        <section id="gobierno" class="seccion alt">
            <h3>Sistema de Gobierno</h3>
            <p>Darcandrid opera bajo una Monarquía Constitucional, figura que en el contexto de Darcandrid se sitúa por encima de los tres poderes del Estado y actúa como garante del equilibrio institucional sin intervenir en la gestión ordinaria del gobierno. Darcandrid fue una república (forma de gobierno más efectiva hasta el momento a criterio de Xavier), peero en un momento se obsesionó con Game of Thrones y decidió implementar un sistema monárquico tras construir dos castillos; sistema similar a países nórdicos que de hecho, ocupan los primeros lugares en índices de democracia plena.</p>
            <p>El poder legislativo recae en un <strong>Parlamento Bicameral</strong> compuesto por:</p>
            <ul>
                <li>El <strong>Senado</strong>, cámara alta con 70 senadores</li>
                <li>La <strong>Asamblea Nacional</strong>, cámara baja con 195 miembros</li>
            </ul>
            <p>La constitución del reino consta de <strong>313 artículos</strong> organizados en 9 títulos, inspirados en los sistemas institucionales de Noruega, Dinamarca, Costa Rica, Japón, Canadá, Estados Unidos y Suiza. Continua en revision y recibiendo mejoras periódicamente, de la mano con los derechos humanos y en pro de la libertad individual. Sea o no ficción, Xavier considera que nuestros valores personales pueden hablar en todo lo que creamos, y por supuesto representa una forma divertida de aprender sobre el tema.</p>
        </section>

        <section id="economia" class="seccion">
            <h3>Inicios del mundo</h3>
            <p>Xavier ha preferido la versión de Minecraft Bedrock para el desarrollo de Darcandrid desde su teléfono celular para mayor comodidad y accesibilidad. A principios del mundo, fue migrando entre varios teléfonos mediante copias de seguridad propias de un niño 🐀, hasta terminar en el increíble S24 Ultra que utiliza hoy. Xavier tuvo que aplanar grandes áreas de terreno, principalmente en la zona del distrito federal y crear la cuadrícula con autopistas para mayor orden, lo que fue facilitado con el uso de comandos en la terminal del juego y bloques de estructuras.</p>
        </section>

        <section id="galeria" class="seccion alt">
            <h3>Galería del Reino</h3>
            <div class="galeria">
                <img src="images/Capitolio1.jpg" alt="Capitolio de Darcandrid">
                <img src="images/Capitolio2.jpg" alt="Vista exterior del Capitolio">
                <img src="images/Senado.jpg" alt="Sede del Senado">
                <img src="images/Trono.jpg" alt="Sala del Trono">
                <img src="images/Castillo2.jpg" alt="Castillo Real">
                <img src="images/CastilloHabitacion2.jpg" alt="Interior del Castillo">
                <img src="images/Palacio.jpg" alt="Palacio de Gobierno">
                <img src="images/Casa.jpg" alt="Vivienda típica">
                <img src="images/Iglesia.jpg" alt="Iglesia Nacional">
                <img src="images/Parque.jpg" alt="Parque Nacional">
                <img src="images/Lago.jpg" alt="Lago del Distrito Federal">
                <img src="images/Puente.jpg" alt="Puente Nacional">
                <img src="images/City1.jpg" alt="Ciudad de Darcandrid">
                <img src="images/City2.jpg" alt="Zona urbana">
                <img src="images/City3.jpg" alt="Distrito comercial">
            </div>
        </section>

        <section id="mapa" class="seccion">
            <h3>Mapa del Distrito Federal en 2025</h3>
            <img src="images/Mapa.jpg" alt="Mapa del Distrito Federal de Darcandrid" style="width:100%; border-radius:8px; border:2px solid #2d4a1e;">
        </section>

        <section id="info" class="seccion alt">
            <h3>Información Académica</h3>
            <ul>
                <li><strong>Estudiante:</strong> Xavier Fernández Zúñiga</li>
                <li><strong>Curso:</strong> ISW-811 Aplicaciones Web Usando Software Libre</li>
                <li><strong>Taller:</strong> Workshop 02</li>
                <li><strong>Docente:</strong> Misael Matamoros Soto</li>
            </ul>
        </section>

    </main>

    <footer>
        <p>Reino Federal de Darcandrid <?= date('Y') ?> · Universidad Técnica Nacional · ISW-811</p>
    </footer>
</body>
</html>