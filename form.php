<?php /**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */

?>


<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }
    </style>
    <p class="meta-options hcf_field">
        <label for="artist">Artist</label>
        <input id="artist"
            type="text"
            name="artist"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'artist', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="album-name">Album/Song name</label>
        <input id="album-name"
            type="text"
            name="album-name"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'album-name', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="url">Embed URL Link</label>
        <input id="url"
            type="text"
            name="url"
           value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'url', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="year">Published Date</label>
        <input id="year"
            type="date"
            name="year"
           value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'year', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="label">Label</label>
        <input id="label"
            type="text"
            name="label"
           value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'label', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="genre">Genre</label>
        <input id="genre"
            type="text"
            name="genre"
           value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'genre', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="Roles">Roles</label>
        <input id="roles"
            type="text"
            name="roles"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'roles', true ) ); ?>">
    </p>

</div>