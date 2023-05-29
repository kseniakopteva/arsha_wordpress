<?php
// Creating the widget
class Arsha_Video_Button extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'arsha_video_button',
            __('Arsha Video Button', 'arsha'),

            ['description' => __('Video button with editable link', 'arsha')]
        );
    }

    public function form($instance)
    {
?>
        <p>
            <label for="<?php echo $this->get_field_id('id-link') ?>">Input video link: </label>
            <textarea type="text" name="<?php echo $this->get_field_name('link') ?>" id="<?php echo $this->get_field_id('id-link') ?>" value="<?php echo $instance['link'] ?>" class="widefat">
                <?php echo $instance['link'] ?>
            </textarea>
        </p>


    <?php
    }
    public function widget($args, $instance)
    {
    ?>
        <a href="<?php echo apply_filters('arsha_video_button', $instance['link']); ?>" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>

<?php

    }
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}

// Register and load the widget
// function arsha_load_widget()
// {
//     register_widget('arsha_video_button');
// }
// add_action('widgets_init', 'arsha_load_widget');
