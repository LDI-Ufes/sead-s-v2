<?php

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
    <h3><?php _e("Outras informações", "blank"); ?></h3>

    <table class="form-table">
    <tr>
        <th><label for="cargo"><?php _e("Cargo"); ?></label></th>
        <td>
            <input type="text" name="cargo" id="cargo" value="<?php echo esc_attr( get_the_author_meta( 'cargo', $user->ID ) ); ?>" class="regular-text" /><br />
<!--            <span class="description"><//?php _e("Please enter your cargo."); ?></span>-->
        </td>
    </tr>
    </table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'cargo', $_POST['cargo'] );
}