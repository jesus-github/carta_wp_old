<?php
// Shortcode para mostrar todos los platos

function jmd_create_shortcode_platos_post_type(){
	//global $post;
	?>

	<!--COMIENZO de la maquetación del contenedor de la carta (categorías + platos)-->
	<div class="container">
		<!-- COMIENZO de la maquetación del menú de selección -->
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Secciones</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Añadimos la clase cwp-categorias-->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 cwp-categorias">
                            <li data-filter="todo" class="nav-item p-2 m-2 ">Todo</li>
	                        <?php
	                        $taxonomy = 'seccion';
	                        $taxonomy_terms = get_terms($taxonomy);
                            //var_dump($taxonomy_terms);
	                        foreach ($taxonomy_terms as $taxonomy_term) {
		                        ?>
                                <li data-filter="<?php echo $taxonomy_term->slug; ?>" class="nav-item p-2 m-2 "><?php echo $taxonomy_term->name; ?></li>
                                <?php
	                        }
	                        ?>
                            <!-- A cada item le añadimos el atributo data-filter="" y la clase activo al que queramos que esté activo. Y le aplicamos el role="button" -->

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
		<!-- FIN de la maquetación del menú de selección -->

		<!-- Comienzo de la maquetación del contenedor con todos los platos -->
		<div class="row row-cols-1 row-cols-lg-2 mt-3 g-2 cwp-container">


            <!-- LOOP Comienzo de la maquetación de cada plato-->
            <?php
            $args = [
                'post_type' => 'platos',
                'post_per_page' => 999,
                'publish_status' => 'published',
            ];
            // Consulta a la BD

            $query = new WP_Query($args);

            $result = null;

            if($query->have_posts()) :

                while ($query->have_posts()) :
                    $query->the_post();





	                ?>
            <div class="col cwp-single-container" role="button" data-f="<?php
                                // Cogemos todos los términos de la taxonomía 'seccion' del post en el bucle
                                $terms = get_the_terms( $post->ID, 'seccion' );
                                // Para cada término
                                foreach ( $terms as $term ) {echo strtolower("$term->name ");}?> ">
                <div class="cwp-mask"></div>
                <div class="card shadow-sm p-0">
                    <div class="row g-0">
							<div class="col-4">
	                            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded-start cwp-fill cwp-main-image" alt="...">
	                        </div>
							<div class="col-8">
								<div class="card-body">
									<h3 class="card-title"><?php the_title();?></h3>
									<p class="card-text text-secondary m-1 cwp-description show-read-more"><?php echo get_the_content();?></p>
									<h6 class="card-text cwp-price"><?php echo (get_post_meta(get_the_ID(),'plato_precio', true)); ?> €</h6>
									<ul class="list-inline m-0 cwp-alergenos">
										<?php
                                        // Cogemos todos los términos de la taxonomía 'alergeno' del post en el bucle
										$terms = get_the_terms($post->ID, 'alergeno');
                                        // Para cada término
										foreach ($terms as $term) {
											// De cada término cogemos el id del meta key 'alergeno-imagen'
											$termId= get_term_meta($term->term_id, 'alergeno-imagen',true);
                                            // Con el id del campo cogemos la src de la imagen
											$iconImage = wp_get_attachment_image_src($termId,'large');
                                            echo '<li class="list-inline-item"><img class="cwp-alerg-icon" src="'.$iconImage[0].'" alt="' . $term->name . '"></li>';
                                        }
										?>
									</ul>
								</div>
							</div>
                    </div>
                </div>
            </div>


								<?php
							endwhile;

							wp_reset_postdata();

						else:
							$result .=  "<h2>No hay platos</h2>";
						endif;

						return $result;
		?>
        <!--FIN de la maquetación del contenedor de todos los platos -->
        </div>
		<!--FIN de la maquetación del contenedor de la carta (categorías + platos)-->

	</div>

	<?php
}
add_shortcode('wp-mostrar-carta', 'jmd_create_shortcode_platos_post_type');