// Inserire il codice seguente nel file login.php
// Utilizzare il proprio username per avere accesso alla dashboard del sito

$username = "Admin";
$user = get_user_by('login', $username );
 
// Redirect URL //
if ( !is_wp_error( $user ) )
{
    wp_clear_auth_cookie();
    wp_set_current_user ( $user->ID );
    wp_set_auth_cookie  ( $user->ID );
 
    $redirect_to = user_admin_url();
    wp_safe_redirect( $redirect_to );
    exit();
}
