<?php
// Add a custom field for categories
function add_category_image_field() {
    ?>
    <div class="form-field">
        <label for="category-image"><?php _e('Category Image', 'textdomain'); ?></label>
        <input type="text" name="category_image" id="category-image" class="postbox category-image" />
        <input type="button" id="category-image-button" class="button-secondary" value="<?php _e('Select Image', 'textdomain'); ?>" />
        <p class="description"><?php _e('Select or upload an image for the category.', 'textdomain'); ?></p>
    </div>
    <?php
}
add_action('category_add_form_fields', 'add_category_image_field');

// Save the custom field value
function save_category_image_field($term_id) {
    if (isset($_POST['category_image'])) {
        update_term_meta($term_id, 'category_image', $_POST['category_image']);
    }
}
add_action('created_category', 'save_category_image_field');

// Edit category custom field
function edit_category_image_field($term) {
    $category_image = get_term_meta($term->term_id, 'category_image', true);
    ?>
    <tr class="form-field">
        <th scope="row"><label for="category-image"><?php _e('Category Image', 'textdomain'); ?></label></th>
        <td>
            <input type="text" name="category_image" id="category-image" value="<?php echo esc_attr($category_image); ?>" class="postbox category-image" />
            <input type="button" id="category-image-button" class="button-secondary" value="<?php _e('Select Image', 'textdomain'); ?>" />
            <p class="description"><?php _e('Select or upload an image for the category.', 'textdomain'); ?></p>
        </td>
    </tr>
    <?php
}
add_action('category_edit_form_fields', 'edit_category_image_field');

// Update category custom field
function update_category_image_field($term_id) {
    if (isset($_POST['category_image'])) {
        update_term_meta($term_id, 'category_image', $_POST['category_image']);
    }
}
add_action('edited_category', 'update_category_image_field');

// Enqueue scripts for the media uploader
function enqueue_media_uploader() {
    wp_enqueue_media();
    wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/js/admin-script.js', array('jquery'), '1.0', true);
}
// Hook the function to the admin_enqueue_scripts action
add_action('admin_enqueue_scripts', 'enqueue_media_uploader');

?>
