<?php
// auto-generated by sfDefineEnvironmentConfigHandler
// date: 2011/02/11 18:26:51
sfConfig::add(array(
  'app_sf_admin_dash_web_dir' => '/sfAdminDashPlugin',
  'app_sf_admin_dash_image_dir' => '/sfAdminDashPlugin/images/icons/',
  'app_sf_admin_dash_default_image' => 'config.png',
  'app_sf_admin_dash_resize_mode' => 'thumbnail',
  'app_sf_admin_dash_logout' => true,
  'app_sf_admin_dash_site' => 'ptsf',
  'app_sf_admin_dash_include_path' => true,
  'app_sf_admin_dash_include_jquery_no_conflict' => false,
  'app_sf_admin_dash_login_route' => '@sf_guard_signin',
  'app_sf_admin_dash_logout_route' => '@sf_guard_signout',
  'app_sf_admin_dash_categories' => array (
  'Utilisateurs' => 
  array (
    'items' => 
    array (
      'utilisateurs' => 
      array (
        'url' => 'guard_user',
      ),
      'groupes' => 
      array (
        'url' => 'sf_guard_group',
      ),
    ),
  ),
),
));
