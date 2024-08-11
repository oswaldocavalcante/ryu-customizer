<?php
// Aqui você pode carregar as opções salvas e criar uma div para cada uma
$customizations = get_post_meta(get_the_ID(), '_customization_options', true);

if (!empty($customizations) && is_array($customizations)) :
    foreach ($customizations as $key => $customization) :
        ?>
        <div class="woocommerce_variation wc-metabox closed">
            <h3>
                <a href="#" class="remove_row delete"><?php _e('Remove', 'pcw'); ?></a>
                <div class="handlediv" aria-label="Click to toggle"><br></div>
                <strong><?php echo esc_html($customization['name']); ?></strong>
            </h3>
            <div class="wc-metabox-content hidden">
                <div class="data">
                    <p class="upload_image">
                        <input type="hidden" class="option_image" name="customization_image[]" id="customization_image_<?php echo $key; ?>" value="<?php echo esc_attr($customization['image']); ?>" />
                        <a class="upload_image_button button">
                            <?php if ($customization['image']) : ?>
                                <img src="<?php echo esc_url($customization['image']); ?>" style="max-width: 100px;">
                            <?php else: _e('Upload Image', 'pcw');
                            endif; ?>
                        </a>
                    </p>
                    <p class="options_inputs">
                        <input type="text" class="option_name" name="customization_name[]" id="customization_name_<?php echo $key; ?>" value="<?php echo esc_attr($customization['name']); ?>" placeholder="<?php _e('Option Name', 'pcw'); ?>" />
                        <input type="text" class="option_name" name="customization_cost[]" id="customization_cost_<?php echo $key; ?>" value="<?php echo esc_attr($customization['cost']); ?>" placeholder="<?php _e('Option Cost', 'pcw'); ?>" />
                    </p>
                </div>
            </div>
        </div>
    <?php
    endforeach;
endif; ?>