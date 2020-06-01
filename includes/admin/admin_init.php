 <?php
    include 'metaboxes_ap_work_experiences_options.php';
    include 'enqueue.php';

    function ap_work_experiences_admin_init()
    {
        add_action('add_meta_boxes_work_experiences', 'ap_work_experiences_metaboxes');
        add_action('admin_enqueue_scripts', 'ap_work_experiences_admin_enqueue');
    }

    function ap_work_experiences_metaboxes()
    {
        add_meta_box(
            'ap_work_experiences_options',
            'Informações Adicionais',
            'ap_work_experiences_options',
            'work_experiences',
            'normal',
            'high'
        );
    }

    function ap_work_experiences_save_post_admin($post_id, $post, $update)
    {
        if (!$update) {
            return;
        }
        $work_experiences_data = array(
            "ap_work_experiences_company" => $_POST['ap_work_experiences_company'],
            "ap_work_experiences_start" => $_POST['ap_work_experiences_start'],
            "ap_work_experiences_stop" => $_POST['ap_work_experiences_stop'],
            "ap_work_experiences_site" => $_POST['ap_work_experiences_site'],
        );
        update_post_meta($post_id, 'work_experiences_data', $work_experiences_data);
    }
