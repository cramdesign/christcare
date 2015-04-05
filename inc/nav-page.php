<?php if( $post->post_parent or count( get_pages( 'child_of=' . $post->ID ) ) ) : ?>

	<div class="sectionmenu">
		
		<h4>Section Menu</h4>
	
		<?php
			
			// if the post has a parent, list parent and siblings
			// else list the post and its children
			// http://www.mbwebdesign.co.uk/show-siblings-or-children-of-a-wordpress-page/
			
			if( $post->post_parent ) {
			
				// on a subpage
				echo( '<ul class="menu">' );
			    wp_list_pages('title_li=&include='.$post->post_parent);
			    wp_list_pages('title_li=&child_of='.$post->post_parent);
				echo( "</ul>" );
				
			} elseif( count( get_pages('child_of=' . $post->ID) ) ) {
			
				// on the parent page
				echo( '<ul class="menu">' );
			    wp_list_pages('title_li=&include='.$post->ID);
			    wp_list_pages('title_li=&child_of='.$post->ID);
				echo( '</ul>' );
				
			} 
			
		?>
		
	</div><!-- sectionmenu -->

<?php endif; ?>