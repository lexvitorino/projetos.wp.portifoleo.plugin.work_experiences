<?php

function ap_work_experiences_options($post)
{
    $work_experiences_data = get_post_meta($post->ID, 'work_experiences_data', true);
    $ap_work_experiences_company = !empty($work_experiences_data['ap_work_experiences_company']) ? $work_experiences_data['ap_work_experiences_company'] : '';
    $ap_work_experiences_start = !empty($work_experiences_data['ap_work_experiences_start']) ? $work_experiences_data['ap_work_experiences_start'] : 0;
    $ap_work_experiences_stop = !empty($work_experiences_data['ap_work_experiences_stop']) ? $work_experiences_data['ap_work_experiences_stop'] : 0;
    $ap_work_experiences_site = !empty($work_experiences_data['ap_work_experiences_site']) ? $work_experiences_data['ap_work_experiences_site'] : '';
?>
    <div class="ap_work_experiences_container">
        <input type="text" name="ap_work_experiences_company" placeholder="Empresa" required value="<?php echo $ap_work_experiences_company; ?>">
    </div>
    <div class="ap_work_experiences_container">
        <input type="number" name="ap_work_experiences_start" placeholder="Ínicio" required value="<?php echo $ap_work_experiences_start; ?>">
        <input type="number" name="ap_work_experiences_stop" placeholder="Fim" required value="<?php echo $ap_work_experiences_stop; ?>">
    </div>
    <div class="ap_work_experiences_container">
        <input type="text" name="ap_work_experiences_site" placeholder="Site" required value="<?php echo $ap_work_experiences_site; ?>">
    </div>
<?php
}
?>