<?php

add_action( 'show_user_profile', 'crf_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'crf_show_extra_profile_fields' );

function crf_show_extra_profile_fields( $user ) {
	$cargo = get_the_author_meta( 'cargo', $user->ID );
	?>
	<h3><?php esc_html_e( 'Outras informações', 'crf' ); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="cargo"><?php esc_html_e( 'Cargo', 'crf' ); ?></label></th>
			<td>
				<input type="text"
			       maxlength="80"
			       id="cargo"
			       name="cargo"
			       value="<?php echo esc_attr( $cargo ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
	</table>
	<?php
}


add_action( 'personal_options_update', 'crf_update_profile_fields' );
add_action( 'edit_user_profile_update', 'crf_update_profile_fields' );

function crf_update_profile_fields( $user_id ) {
	if ( ! current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}
}