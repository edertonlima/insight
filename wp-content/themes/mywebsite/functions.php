<?php
/**
 * @package WordPress
 * @subpackage My Web
 * @since My web Site 1.0
 **
 */

	/* HABILITAR / DESABILITAR */

	// Enable featured images
	add_theme_support( 'post-thumbnails' );

	// Unable the admin bar
	add_filter('show_admin_bar', '__return_false');






	// MENUS
	add_action( 'after_setup_theme', 'register_menu' );
	function register_menu() {
	  register_nav_menu( 'primary', __( 'Primary Menu', 'header' ) );
	}
	
	// Add Excerpt to pages
 	add_post_type_support( 'page', 'excerpt' );





	/* VIDEO *
	// Criar um novo tipo de post, VIDEO
	add_action('init', 'type_post_videos');
	function type_post_videos() {
		$labels = array(
			'name' => _x('Vídeos', 'post type general name'),
			'singular_name' => _x('Vídeos', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Novo Item'),
			'view_item' => __('Ver Item'),
			'search_items' => __('Procurar Itens'),
			'not_found' => __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Vídeos'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_icon' => 'dashicons-format-video',
			'supports' => array('title', 'excerpt', 'thumbnail')
		);

		register_post_type( 'videos' , $args );
		flush_rewrite_rules();
	}
	/* Insere campo do link do VIDEO *
	add_action( 'admin_menu', 'create_videoURL' );
	add_action( 'save_post', 'save_videoURL', 10, 2 );

	function create_videoURL() {
		add_meta_box( 'url-video', 'URL do Vídeo', 'videoURL', 'videos', 'normal', 'high' );
	}

	function videoURL( $object, $box ) { ?>
	    <p>
			<label for="url-video" style="margin-right: 10px;">URL do Vídeo: </label>
			<input name="url-video" id="url-video" style="width: 100%; max-width: 900px;" value="<?php echo wp_specialchars( get_post_meta( $object->ID, 'URL do Vídeo', true ), 1 ); ?>" />
		</p>
	<?php }

	function save_videoURL( $post_id, $post ) {
		$meta_value = get_post_meta( $post_id, 'URL do Vídeo', true );
		$new_meta_value = stripslashes( $_POST['url-video'] );

		if ( $new_meta_value && '' == $meta_value )
			add_post_meta( $post_id, 'URL do Vídeo', $new_meta_value, true );

		elseif ( $new_meta_value != $meta_value )
			update_post_meta( $post_id, 'URL do Vídeo', $new_meta_value );

		elseif ( '' == $new_meta_value && $meta_value )
			delete_post_meta( $post_id, 'URL do Vídeo', $meta_value );
	}






	/* ALBUNS DE FOTOS *
	add_action( 'init', 'create_post_type_fotos' );
	function create_post_type_fotos() {

		$labels = array(
		    'name' => _x('Álbum de Fotos', 'post type general name'),
		    'singular_name' => _x('Álbum de Fotos', 'post type singular name'),
		    'add_new' => _x('Adicionar Novo', 'Álbum de Fotos'),
		    'add_new_item' => __('Add New Álbum de Fotos'),
		    'edit_item' => __('Edit Álbum de Fotos'),
		    'new_item' => __('New Álbum de Fotos'),
		    'all_items' => __('Todos os Álbum'),
		    'view_item' => __('View Álbum de Fotos'),
		    'search_items' => __('Search Álbum de Fotos'),
		    'not_found' =>  __('No Álbum de Fotos found'),
		    'not_found_in_trash' => __('No Álbum de Fotos found in Trash'),
		    'parent_item_colon' => '',
		    'menu_name' => 'Álbum de Fotos'
		);
		$args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true,
		    'show_in_menu' => true,
		    'rewrite' => true,
		    'capability_type' => 'post',
		    'has_archive' => true,
		    'hierarchical' => false,
		    'menu_position' => null,
		    'menu_icon' => 'dashicons-format-gallery',
		    'supports' => array('title','editor','thumbnail','excerpt')
		  );

	    register_post_type( 'fotografias', $args );
	}

	add_action( 'init', 'create_taxonomy_categoria_fotos' );
	function create_taxonomy_categoria_fotos() {

		$labels = array(
		    'name' => _x( 'Categorias de Album', 'taxonomy general name' ),
		    'singular_name' => _x( 'Categorias', 'taxonomy singular name' ),
		    'search_items' =>  __( 'Search Categorias' ),
		    'all_items' => __( 'All Categories' ),
		    'parent_item' => __( 'Parent Categorias' ),
		    'parent_item_colon' => __( 'Parent Categorias:' ),
		    'edit_item' => __( 'Edit Categorias' ),
		    'update_item' => __( 'Update Categorias' ),
		    'add_new_item' => __( 'Add New Categorias' ),
		    'new_item_name' => __( 'New Categorias Name' ),
		    'menu_name' => __( 'Categorias' ),
		);

	    register_taxonomy( 'categoria_fotos', array( 'fotografias' ), array(
	        'hierarchical' => true,
	        'labels' => $labels,
	        'show_ui' => true,
	        'show_in_tag_cloud' => true,
	        'query_var' => true,
			'has_archive' => 'fotografias',
			'rewrite' => array(
			    'slug' => 'fotografias',
			    'with_front' => false,
				),
	        )
	    );
	}





/*

	// Criar um novo tipo de post, ALBUM DE FOTOS
	add_action('init', 'type_post_albumFoto');
	function type_post_albumFoto() {
		$labels = array(
			'name' => _x('Album de Fotos', 'post type general name'),
			'singular_name' => _x('Album de Fotos', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Novo Item'),
			'view_item' => __('Ver Item'),
			'search_items' => __('Procurar Itens'),
			'not_found' => __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Album de Fotos'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_icon' => 'dashicons-format-gallery',
			'taxonomies' => array('category_albumFoto'),
			'supports' => array('title', 'excerpt', 'thumbnail'),
			'show_ui' => true,
			'show_in_menu' => true
		);

		register_post_type( 'albumFoto' , $args );
		flush_rewrite_rules();
	}
	
*/
	







	/*// Insere campo do link do VIDEO
	add_action( 'admin_menu', 'create_videoURL' );
	add_action( 'save_post', 'save_videoURL', 10, 2 );

	function create_videoURL() {
		add_meta_box( 'url-video', 'URL do Vídeo', 'videoURL', 'video', 'normal', 'high' );
	}

	function videoURL( $object, $box ) { ?>
	    <p>
			<label for="url-video" style="margin-right: 10px;">URL do Vídeo: </label>
			<input name="url-video" id="url-video" style="width: 100%; max-width: 900px;" value="<?php echo wp_specialchars( get_post_meta( $object->ID, 'URL do Vídeo', true ), 1 ); ?>" />
		</p>
	<?php }

	function save_videoURL( $post_id, $post ) {
		$meta_value = get_post_meta( $post_id, 'URL do Vídeo', true );
		$new_meta_value = stripslashes( $_POST['url-video'] );

		if ( $new_meta_value && '' == $meta_value )
			add_post_meta( $post_id, 'URL do Vídeo', $new_meta_value, true );

		elseif ( $new_meta_value != $meta_value )
			update_post_meta( $post_id, 'URL do Vídeo', $new_meta_value );

		elseif ( '' == $new_meta_value && $meta_value )
			delete_post_meta( $post_id, 'URL do Vídeo', $meta_value );
	}
*/
  
?>