<?php

function Rayium_meta_box() {
    
    add_meta_box('Rayium_meta_boxs', 'اطلاعات اسلایدر', 'Rayium_Slider', 'slider', 'normal', 'high');
    add_meta_box('Rayium_meta_boxs', 'اطلاعات تبلیغات اسلایدر', 'Rayium_Sliderads', 'sliderads', 'normal', 'high');
    add_meta_box('Rayium_meta_boxs', 'اطلاعات پشتیبانی', 'Rayium_Supports', 'supports', 'normal', 'high');
    add_meta_box('Rayium_meta_boxs', 'اطلاعات تبلیغات', 'Rayium_Adss', 'adss', 'normal', 'high');
}
add_action('add_meta_boxes', 'Rayium_meta_box');

function Rayium_Slider($post){
    wp_nonce_field(basename(__FILE__), 'Rayium_security_nonce');

    ?>
    <table width="100%">
        <tbody>
            <tr>
                <td>
                    <label for="input1">پیوند</lable>
                    <input type="text" id="input1" name="urlOne" size="60" value="<?php echo get_post_meta($post->ID, 'urlOne', true); ?>">
                </td>
            </tr>
        </tbody>
    </table>
    <?php
}
function Rayium_Sliderads($post){
    wp_nonce_field(basename(__FILE__), 'Rayium_security_nonce');

    ?>
    <table width="100%">
        <tbody>
            <tr>
                <td>
                    <label for="input2">پیوند</lable>
                    <input type="text" id="input2" name="urlTwo" size="60" value="<?php echo get_post_meta($post->ID, 'urlTwo', true); ?>">
                </td>
            </tr>
        </tbody>
    </table>
    <?php
}
function Rayium_Supports($post){
    wp_nonce_field(basename(__FILE__), 'Rayium_security_nonce');

    ?>
    <table width="100%">
        <tbody>
            <tr>
                <td>
                    <label for="input3">کلاس آیکون</lable>
                    <input type="text" id="input3" name="urlThree" size="60" value="<?php echo get_post_meta($post->ID, 'urlThree', true); ?>">
                </td>
            </tr>
        </tbody>
    </table>
    <?php
}
function Rayium_Adss($post){
    wp_nonce_field(basename(__FILE__), 'Rayium_security_nonce');

    ?>
    <table width="100%">
        <tbody>
            <tr>
                <td>
                    <label for="input4">پیوند</lable>
                    <input type="text" id="input4" name="urlFour" size="60" value="<?php echo get_post_meta($post->ID, 'urlFour', true); ?>">
                </td>
            </tr>
        </tbody>
    </table>
    <?php
}

function Rayium_save($post_id){

    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);

    $is_valid_nonce = (isset($_POST['Rayium_security_nonce']) 
    && wp_verify_nonce($_POST['Rayium_security_nonce'], 
    basename(__FILE__))) ? 'true' : 'false';

    if($is_autosave || $is_revision || !$is_valid_nonce){
        return;
    }

    if(isset($_POST['urlOne'])){
        update_post_meta($post_id, 'urlOne', $_POST['urlOne']);
    }

    if(isset($_POST['urlTwo'])){
        update_post_meta($post_id, 'urlTwo', $_POST['urlTwo']);
    }

    if(isset($_POST['urlThree'])){
        update_post_meta($post_id, 'urlThree', $_POST['urlThree']);
    }

    if(isset($_POST['urlFour'])){
        update_post_meta($post_id, 'urlFour', $_POST['urlFour']);
    }
}
add_action('save_post', 'Rayium_save');