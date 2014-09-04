<?php
   /*
   Plugin Name: Smart Bar
   Plugin URI: http://www.ideaboxthemes.com
   Description: A plugin to display smart bar for subscribers on top.
   Version: 1.0
   Author: Saumya Sharma,Purva Jain, Nidarshana Sharma, Nikita Pariyani, Shruti Taldar
   Author URI: http://ideaboxthemes.com
   License: GPL2 or later
   License URI: http://www.gnu.org/licenses/gpl-2.0.html
   */
?>

<?php 

add_action('wp_head','sb_display');

function sb_add_stylesheet(){
        wp_register_style('smartbar-style',plugins_url('style.css',__FILE__));
        wp_enqueue_style('smartbar-style',plugins_url('style.css',__FILE__));
        
        $fonts_url='http://fonts.googleapis.com/css?family=Oxygen:400,300,700';
	if ( !empty($fonts_url)){
		wp_enqueue_style('font-name',esc_url_raw($fonts_url),array(),null);
	}
    }
add_action('wp_enqueue_scripts','sb_add_stylesheet');

function sb_display(){ ?>
<div class="smart-plugin">
    <div class="smartbar-content">
        <div class="smartbar-form">
            <div class="smartbar-bar">
                <div class="smartbar-text col-lg-6">
                    <?php   if ( get_theme_mod('newtheme_smartbar_text') ) { ?>
                        <p><?php echo esc_html_e(get_theme_mod('newtheme_smartbar_text')); ?></p>
                    <?php } else { ?>
                        <p><?php echo esc_html_e('Join our newsletter today for free','newtheme'); ?></p>
                    <?php } ?>
                </div>
                
                <div class="smartbar-input col-lg-6">
                    <input id="smartbar_email_address" 
                           type="text"
                           placeholder="<?php   if ( get_theme_mod('newtheme_smartbar_placeholder') ) { ?>
                                        <?php echo esc_html_e(get_theme_mod('newtheme_smartbar_placeholder')); ?>
                                        <?php } else { ?>
                                        <?php echo esc_html_e('xyz','newtheme'); ?>
                                        <?php } ?>"
                           name="smartbar_email_address" 
                           value="">
                    </input>
                    
                    <button class="smartbar-submit" type="submit">
                        <?php   if ( get_theme_mod('newtheme_smartbar_button_text') ) { ?>
                                        <?php echo esc_html_e(get_theme_mod('newtheme_smartbar_button_text')); ?>
                                        <?php } else { ?>
                                        <?php echo esc_html_e('Subscribe','newtheme'); ?>
                                        <?php } ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php include 'customizer.php'; ?>