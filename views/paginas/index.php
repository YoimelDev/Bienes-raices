<main class="contenedor seccion">
    <h2>Mas Sobre Nosotros</h2>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy" />
            <h3>Seguridad</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque similique est quisquam aut animi quas labore consectetur? Totam, sed
                molestias asperiores laudantium esse veniam nostrum culpa, qui deleniti voluptatem perspiciatis.
            </p>
        </div>

        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
            <h3>Precio</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque similique est quisquam aut animi quas labore consectetur? Totam, sed
                molestias asperiores laudantium esse veniam nostrum culpa, qui deleniti voluptatem perspiciatis.
            </p>
        </div>

        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy" />
            <h3>A Tiempo</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque similique est quisquam aut animi quas labore consectetur? Totam, sed
                molestias asperiores laudantium esse veniam nostrum culpa, qui deleniti voluptatem perspiciatis.
            </p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y Depas en Venta</h2>

    <?php
    include 'listado.php';
    ?>

    <div class="aling-right">
        <a class="boton-verde" href="anuncios">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>LLena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
    <a class="boton-amarillo" href="contacto">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp" />
                    <source srcset="build/img/blog1.jpg" type="image/jpeg" />
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog" />
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada">
                    <h4>Terraza en el techo de tu casa</h4>
                </a>

                <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                <p>Consejos para construir una terraza en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp" />
                    <source srcset="build/img/blog2.jpg" type="image/jpeg" />
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog" />
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada">
                    <h4>Guia para la decoracion de tu hogar</h4>
                </a>

                <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                <p>Maxima el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>- Yoimel Rojas</p>
        </div>
    </section>
</div>