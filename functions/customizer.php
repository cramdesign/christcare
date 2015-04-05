<?php

/* http://code.tutsplus.com/articles/custom-controls-in-the-theme-customizer--wp-34556 */

function cram_customize_register( $wp_customize ) {

	if (class_exists('WP_Customize_Control')) {
	    class WP_Customize_Category_Control extends WP_Customize_Control {

	        // Render the control's content.
	        public function render_content() {
	            $dropdown = wp_dropdown_categories(
	                array(
	                    'name'              => '_customize-dropdown-categories-' . $this->id,
	                    'echo'              => 0,
	                    'show_option_none'  => __( '&mdash; Select &mdash;' ),
	                    'option_none_value' => '0',
	                    'selected'          => $this->value(),
	                )
	            );
	 
	            // Hackily add in the data link parameter.
	            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
	 
	            printf(
	                '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
	                $this->label,
	                $dropdown
	            );
	        }
	    }
	}
	
	/*-----------------------------------------------------------*
	 * Home Template Settings section
	 *-----------------------------------------------------------*/
	 
	$wp_customize->add_section( 'home_template_section', array(
	    'title'     => 'Home Template Settings',
	    'priority'  => 202
	));
	
	// Category
	$wp_customize->add_setting( 'updates_category', array(
	    'default'     => 1 
	));
	
	$wp_customize->add_control( new WP_Customize_Category_Control( $wp_customize, 'tcx_category', array(
	    'label'    => 'Category for updates',
	    'section'  => 'home_template_section',
	    'settings' => 'updates_category'
	)));	
	
}
add_action( 'customize_register', 'cram_customize_register' );