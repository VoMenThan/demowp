<?php
/**
 * Created by PhpStorm.
 * User: Vo Men Than
 * Date: 11/16/2017
 * Time: 10:09 PM
 */

?>
<div class="wrap">

    <h2>My menu demo men than!</h2>
    <p>Đây là phần setting demo của thân</p>
    <form method="post" action="options.php" id="menthan-mp-setting" enctype="multipart/form-data">

        <?php echo settings_fields('menthan_mp_setting_group');?>
        <?php echo do_settings_sections($this->_slug_menu_page);?>

        <p class="submit">
            <input type="submit" name="submit" value="Save change" class="button button-primary">
        </p>

    </form>

</div>