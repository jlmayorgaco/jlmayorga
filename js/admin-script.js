jQuery(document).ready(function($) {
    $('#category-image-button').click(function(e) {

        console.log( '')
        console.log( ' GIVE ME THE SHOT')
        console.log( '')
        console.log( '')

        e.preventDefault();
        var image = wp.media({
            title: 'Select or Upload Image',
            multiple: false
        }).open().on('select', function(e) {
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            $('.category-image').val(image_url);
        });
    });
});