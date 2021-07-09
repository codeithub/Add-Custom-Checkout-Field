add_action( 'woocommerce_before_order_notes', 'codeithub_add_custom_checkout_field' );
  
function codeithub_add_custom_checkout_field( $checkout ) { 
   $current_user = wp_get_current_user();
   $saved_license_no = $current_user->license_no;
   woocommerce_form_field( 'license_no', array(        
      'type' => 'text',        
      'class' => array( 'form-row-wide' ),        
      'label' => 'License Number',        
      'placeholder' => 'CA12345678',        
      'required' => true,        
      'default' => $saved_license_no,        
   ), $checkout->get_value( 'license_no' ) ); 
}
