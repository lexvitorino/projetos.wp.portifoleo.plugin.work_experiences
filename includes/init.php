<?php 

function ap_work_experiences_init() {
    $labels = array(
        'name' => 'Experiências de Trabalho',
        'singular_name' => 'Experiência',
        'menu_name' => 'Experiências de Trabalho',
        'name_admin_bar' => 'Experiência',
        'add_new' => 'Adicionar Nova',
        'add_new_item' => 'Adicionar Nova Experiência',
        'new_item' => 'Nova Experiência',
        'edit_item' => 'Editar Experiência',
        'view_item' => 'Visualizar Experiência',
        'all_items' => 'Todas as Experiências',
        'search_items' => 'Procurar Experiência',
        'parent_item_colon' => 'Experiências Filhas',
        'not_found' => 'Nenhuma Experiências encontrada',
        'not_found_in_trash' => 'Nenhuma Experiências no Lixo'
    );

    $array = array(
        'labels' => $labels,
        'description' => 'Um tipo de conteúdo para portifóleo',
        'public' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'rewrite' => array('slug' => 'work_experiences'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'suports' => array('title', 'editor', 'comment')
    );

    register_post_type('work_experiences', $array);
}