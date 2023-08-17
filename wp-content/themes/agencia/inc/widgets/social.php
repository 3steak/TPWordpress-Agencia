<?php
class Agencia_Social_Widget extends WP_Widget
{

    // array for labels
    public $fields = [];

    public function __construct()
    {
        parent::__construct('agencia_social_widget', __('Social widget', 'agencia'));
        $this->fields = [
            'title' => __('Title', 'agencia'),
            'twitter' => 'Twitter',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'credits' => __('Credits', 'agencia'),
        ];
    }


    // return html rentré
    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        if (isset($instance['title'])) {
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'] . $title . $args['after_title'];
        }

        $template = locate_template('widgets/social.php');
        if (!empty($template)) {
            include($template);
        }
        echo $args['after_widget'];
    }

    //forme des données 
    public function form($instance)
    {
        foreach ($this->fields as $field => $label) {

            $value = $instance[$field] ?? '';
?>
            <p>
                <label for="<?= $this->get_field_id($field) ?>"><?= $label ?></label>
                <input type="text" class="widefat" name="<?= $this->get_field_name($field) ?>" id="<?= $this->get_field_id($field) ?>" value="<?= esc_attr($value) ?>">
            </p>
<?php
        }
    }

    // traiter les données
    public function update($new_instance, $old_instance)
    {
        $output = [];
        foreach ($this->fields as $field => $label) {
            if (!empty($new_instance[$field])) {
                $output[$field] = $new_instance[$field];
            }
        }
        return $output;
    }
    // end class
}
