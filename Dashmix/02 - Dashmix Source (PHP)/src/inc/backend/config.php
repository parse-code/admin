<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/backend/views/inc_header.php';
$dm->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'narrow';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'si si-cursor',
        'badge' => array(5, 'success'),
        'url'   => 'be_pages_dashboard.php'
    ),
    array(
        'name'  => 'Base',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Blocks',
        'icon'  => 'si si-grid',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_blocks_styles.php'
            ),
            array(
                'name'  => 'Options',
                'url'   => 'be_blocks_options.php'
            ),
            array(
                'name'  => 'Forms',
                'url'   => 'be_blocks_forms.php'
            ),
            array(
                'name'  => 'Themed',
                'url'   => 'be_blocks_themed.php'
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_blocks_api.php'
            )
        )
    ),
    array(
        'name'  => 'Widgets',
        'icon'  => 'si si-puzzle',
        'sub'   => array(
            array(
                'name'  => 'Tiles',
                'url'   => 'be_widgets_tiles.php'
            ),
            array(
                'name'  => 'Statistics',
                'url'   => 'be_widgets_stats.php'
            ),
            array(
                'name'  => 'Media',
                'url'   => 'be_widgets_media.php'
            ),
            array(
                'name'  => 'Users',
                'url'   => 'be_widgets_users.php'
            )
        )
    ),
    array(
        'name'  => 'Layout',
        'icon'  => 'si si-star',
        'sub'   => array(
            array(
                'name'  => 'Page',
                'sub'   => array(
                    array(
                        'name'  => 'Default',
                        'url'   => 'be_layout_page_default.php'
                    ),
                    array(
                        'name'  => 'Flipped',
                        'url'   => 'be_layout_page_flipped.php'
                    ),
                    array(
                        'name'  => 'Native Scrolling',
                        'url'   => 'be_layout_page_native_scrolling.php'
                    )
                )
            ),
            array(
                'name'  => 'Main Content',
                'sub'   => array(
                    array(
                        'name'  => 'Full Width',
                        'url'   => 'be_layout_content_main_full_width.php'
                    ),
                    array(
                        'name'  => 'Narrow',
                        'url'   => 'be_layout_content_main_narrow.php'
                    ),
                    array(
                        'name'  => 'Boxed',
                        'url'   => 'be_layout_content_main_boxed.php'
                    )
                )
            ),
            array(
                'name'  => 'Side Content',
                'sub'   => array(
                    array(
                        'name'  => 'Left',
                        'url'   => 'be_layout_content_side_left.php'
                    ),
                    array(
                        'name'  => 'Right',
                        'url'   => 'be_layout_content_side_right.php'
                    )
                )
            ),
            array(
                'name'  => 'Hero',
                'sub'   => array(
                    array(
                        'name'  => 'Color',
                        'sub'   => array(
                            array(
                                'name'  => 'Dark',
                                'url'   => 'be_layout_hero_color_dark.php'
                            ),
                            array(
                                'name'  => 'Light',
                                'url'   => 'be_layout_hero_color_light.php'
                            )
                        )
                    ),
                    array(
                        'name'  => 'Image',
                        'sub'   => array(
                            array(
                                'name'  => 'Dark',
                                'url'   => 'be_layout_hero_image_dark.php'
                            ),
                            array(
                                'name'  => 'Light',
                                'url'   => 'be_layout_hero_image_light.php'
                            )
                        )
                    ),
                    array(
                        'name'  => 'Video',
                        'sub'   => array(
                            array(
                                'name'  => 'Dark',
                                'url'   => 'be_layout_hero_video_dark.php'
                            ),
                            array(
                                'name'  => 'Light',
                                'url'   => 'be_layout_hero_video_light.php'
                            )
                        )
                    )
                )
            ),
            array(
                'name'  => 'Header',
                'sub'   => array(
                    array(
                        'name'  => 'Fixed',
                        'sub'   => array(
                            array(
                                'name'  => 'Light',
                                'url'   => 'be_layout_header_fixed_light.php'
                            ),
                            array(
                                'name'  => 'Light Glass',
                                'url'   => 'be_layout_header_fixed_light_glass.php'
                            ),
                            array(
                                'name'  => 'Dark',
                                'url'   => 'be_layout_header_fixed_dark.php'
                            ),
                            array(
                                'name'  => 'Dark Glass',
                                'url'   => 'be_layout_header_fixed_dark_glass.php'
                            )
                        )
                    ),
                    array(
                        'name'  => 'Static',
                        'sub'   => array(
                            array(
                                'name'  => 'Light',
                                'url'   => 'be_layout_header_static_light.php'
                            ),
                            array(
                                'name'  => 'Light Glass',
                                'url'   => 'be_layout_header_static_light_glass.php'
                            ),
                            array(
                                'name'  => 'Dark',
                                'url'   => 'be_layout_header_static_dark.php'
                            ),
                            array(
                                'name'  => 'Dark Glass',
                                'url'   => 'be_layout_header_static_dark_glass.php'
                            )
                        )
                    ),
                )
            ),
            array(
                'name'  => 'Footer',
                'sub'   => array(
                    array(
                        'name'  => 'Static',
                        'url'   => 'be_layout_footer_static.php'
                    ),
                    array(
                        'name'  => 'Fixed',
                        'url'   => 'be_layout_footer_fixed.php'
                    )
                )
            ),
            array(
                'name'  => 'Sidebar',
                'sub'   => array(
                    array(
                        'name'  => 'Mini',
                        'url'   => 'be_layout_sidebar_mini.php'
                    ),
                    array(
                        'name'  => 'Light',
                        'url'   => 'be_layout_sidebar_light.php'
                    ),
                    array(
                        'name'  => 'Dark',
                        'url'   => 'be_layout_sidebar_dark.php'
                    ),
                    array(
                        'name'  => 'Hidden',
                        'url'   => 'be_layout_sidebar_hidden.php'
                    )
                )
            ),
            array(
                'name'  => 'Side Overlay',
                'sub'   => array(
                    array(
                        'name'  => 'Visible',
                        'url'   => 'be_layout_side_overlay_visible.php'
                    ),
                    array(
                        'name'  => 'Hover Mode',
                        'url'   => 'be_layout_side_overlay_mode_hover.php'
                    ),
                    array(
                        'name'  => 'No Page Overlay',
                        'url'   => 'be_layout_side_overlay_no_page_overlay.php'
                    )
                )
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_layout_api.php'
            )
        )
    ),
    array(
        'name'  => 'Interface',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Elements',
        'icon'  => 'si si-chemistry',
        'sub'   => array(
            array(
                'name'  => 'Icon Packs',
                'badge' => array('New', 'success'),
                'url'   => 'be_ui_icons.php'
            ),
            array(
                'name'  => 'Flexbox Grid',
                'url'   => 'be_ui_grid.php'
            ),
            array(
                'name'  => 'Typography',
                'url'   => 'be_ui_typography.php'
            ),
            array(
                'name'  => 'Navigation',
                'url'   => 'be_ui_navigation.php'
            ),
            array(
                'name'  => 'Horizontal Nav',
                'badge' => array('New', 'success'),
                'url'   => 'be_ui_navigation_horizontal.php'
            ),
            array(
                'name'  => 'Tabs',
                'url'   => 'be_ui_tabs.php'
            ),
            array(
                'name'  => 'Buttons',
                'url'   => 'be_ui_buttons.php'
            ),
            array(
                'name'  => 'Button Groups',
                'url'   => 'be_ui_buttons_groups.php'
            ),
            array(
                'name'  => 'Dropdowns',
                'url'   => 'be_ui_dropdowns.php'
            ),
            array(
                'name'  => 'Progress',
                'url'   => 'be_ui_progress.php'
            ),
            array(
                'name'  => 'Alerts',
                'url'   => 'be_ui_alerts.php'
            ),
            array(
                'name'  => 'Tooltips',
                'url'   => 'be_ui_tooltips.php'
            ),
            array(
                'name'  => 'Popovers',
                'url'   => 'be_ui_popovers.php'
            ),
            array(
                'name'  => 'Accordion',
                'url'   => 'be_ui_accordion.php'
            ),
            array(
                'name'  => 'Modals',
                'url'   => 'be_ui_modals.php'
            ),
            array(
                'name'  => 'Images Overlay',
                'url'   => 'be_ui_images.php'
            ),
            array(
                'name'  => 'Timeline',
                'url'   => 'be_ui_timeline.php'
            ),
            array(
                'name'  => 'Ribbons',
                'url'   => 'be_ui_ribbons.php'
            ),
            array(
                'name'  => 'Animations',
                'url'   => 'be_ui_animations.php'
            ),
            array(
                'name'  => 'Color Themes',
                'url'   => 'be_ui_color_themes.php'
            )
        )
    ),
    array(
        'name'  => 'Tables',
        'icon'  => 'si si-cup',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_tables_styles.php'
            ),
            array(
                'name'  => 'Responsive',
                'url'   => 'be_tables_responsive.php'
            ),
            array(
                'name'  => 'Helpers',
                'url'   => 'be_tables_helpers.php'
            ),
            array(
                'name'  => 'Pricing',
                'url'   => 'be_tables_pricing.php'
            ),
            array(
                'name'  => 'DataTables',
                'url'   => 'be_tables_datatables.php'
            )
        )
    ),
    array(
        'name'  => 'Forms',
        'icon'  => 'si si-notebook',
        'sub'   => array(
            array(
                'name'  => 'Elements',
                'url'   => 'be_forms_elements.php'
            ),
            array(
                'name'  => 'Custom Controls',
                'badge' => array('New', 'success'),
                'url'   => 'be_forms_custom_controls.php'
            ),
            array(
                'name'  => 'Layouts',
                'url'   => 'be_forms_layouts.php'
            ),
            array(
                'name'  => 'Input Groups',
                'url'   => 'be_forms_input_groups.php'
            ),
            array(
                'name'  => 'Plugins',
                'url'   => 'be_forms_plugins.php'
            ),
            array(
                'name'  => 'Editors',
                'url'   => 'be_forms_editors.php'
            ),
            array(
                'name'  => 'Validation',
                'url'   => 'be_forms_validation.php'
            ),
            array(
                'name'  => 'Wizard',
                'url'   => 'be_forms_wizard.php'
            )
        )
    ),
    array(
        'name'  => 'Extend',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Components',
        'icon'  => 'si si-wrench',
        'sub'   => array(
            array(
                'name'  => 'Chat',
                'badge' => array('New', 'success'),
                'url'   => 'be_comp_chat.php'
            ),
            array(
                'name'  => 'Onboarding',
                'url'   => 'be_comp_onboarding.php'
            ),
            array(
                'name'  => 'Dialogs',
                'url'   => 'be_comp_dialogs.php'
            ),
            array(
                'name'  => 'Notifications',
                'url'   => 'be_comp_notifications.php'
            ),
            array(
                'name'  => 'Loaders',
                'url'   => 'be_comp_loaders.php'
            ),
            array(
                'name'  => 'Charts',
                'url'   => 'be_comp_charts.php'
            ),
            array(
                'name'  => 'Gallery',
                'url'   => 'be_comp_gallery.php'
            ),
            array(
                'name'  => 'Sliders',
                'url'   => 'be_comp_sliders.php'
            ),
            array(
                'name'  => 'Rating',
                'url'   => 'be_comp_rating.php'
            ),
            array(
                'name'  => 'Appear',
                'url'   => 'be_comp_appear.php'
            ),
            array(
                'name'  => 'Calendar',
                'url'   => 'be_comp_calendar.php'
            ),
            array(
                'name'  => 'Image Cropper',
                'url'   => 'be_comp_image_cropper.php'
            ),
            array(
                'name'  => 'Google Maps',
                'url'   => 'be_comp_maps_google.php'
            ),
            array(
                'name'  => 'Vector Maps',
                'url'   => 'be_comp_maps_vector.php'
            ),
            array(
                'name'  => 'Syntax Highlighting',
                'url'   => 'be_comp_syntax_highlighting.php'
            )
        )
    ),
    array(
        'name'  => 'Main Menu',
        'icon'  => 'si si-settings',
        'sub'   => array(
            array(
                'name'  => '1.1 Item',
                'icon'  => 'si si-drawer',
                'url'   => '#'
            ),
            array(
                'name'  => '1.2 Item',
                'icon'  => 'si si-fire',
                'url'   => '#'
            ),
            array(
                'name'  => '1.3 Item',
                'icon'  => 'si si-graph',
                'url'   => '#'
            ),
            array(
                'name'  => 'Sub Level 2',
                'badge' => 3,
                'sub'   => array(
                    array(
                        'name'  => '2.1 Item',
                        'icon'  => 'si si-tag',
                        'badge' => array(2, 'info'),
                        'url'   => '#'
                    ),
                    array(
                        'name'  => '2.2 Item',
                        'icon'  => 'si si-pie-chart',
                        'badge' => array(2, 'danger'),
                        'url'   => '#'
                    ),
                    array(
                        'name'  => '2.3 Item',
                        'icon'  => 'si si-note',
                        'badge' => array(3, 'warning'),
                        'url'   => '#'
                    ),
                    array(
                        'name'  => 'Sub Level 3',
                        'sub'   => array(
                            array(
                                'name'  => '3.1 Item',
                                'icon'  => 'si si-map',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => '3.2 Item',
                                'icon'  => 'si si-cup',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => '3.3 Item',
                                'icon'  => 'si si-user-female',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => 'Sub Level 4',
                                'sub'   => array(
                                    array(
                                        'name'  => '4.1 Item',
                                        'icon'  => 'si si-heart',
                                        'url'   => '#'
                                    ),
                                    array(
                                        'name'  => '4.2 Item',
                                        'icon'  => 'si si-magnifier',
                                        'url'   => '#'
                                    ),
                                    array(
                                        'name'  => '4.3 Item',
                                        'icon'  => 'si si-microphone',
                                        'url'   => '#'
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )
    ),
    array(
        'name'  => 'Pages',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Page Kits',
        'icon'  => 'si si-docs',
        'sub'   => array(
            array(
                'name'  => 'Generic',
                'sub'   => array(
                    array(
                        'name'  => 'Blank',
                        'url'   => 'be_pages_generic_blank.php'
                    ),
                    array(
                        'name'  => 'Blank (Block)',
                        'url'   => 'be_pages_generic_blank_block.php'
                    ),
                    array(
                        'name'  => 'Search',
                        'url'   => 'be_pages_generic_search.php'
                    ),
                    array(
                        'name'  => 'Profile',
                        'url'   => 'be_pages_generic_profile.php'
                    ),
                    array(
                        'name'  => 'Inbox',
                        'url'   => 'be_pages_generic_inbox.php'
                    ),
                    array(
                        'name'  => 'Invoice',
                        'url'   => 'be_pages_generic_invoice.php'
                    ),
                    array(
                        'name'  => 'FAQ',
                        'url'   => 'be_pages_generic_faq.php'
                    ),
                    array(
                        'name'  => 'Upgrade Plan',
                        'url'   => 'be_pages_generic_upgrade_plan.php'
                    )
                )
            ),
            array(
                'name'  => 'Projects',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'be_pages_projects_dashboard.php'
                    ),
                    array(
                        'name'  => 'Project Tasks',
                        'url'   => 'be_pages_projects_tasks.php'
                    ),
                    array(
                        'name'  => 'Create',
                        'url'   => 'be_pages_projects_create.php'
                    ),
                    array(
                        'name'  => 'Edit',
                        'url'   => 'be_pages_projects_edit.php'
                    )
                )
            ),
            array(
                'name'  => 'Education',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'be_pages_education_dashboard.php'
                    ),
                    array(
                        'name'  => 'Course',
                        'url'   => 'be_pages_education_course.php'
                    ),
                    array(
                        'name'  => 'Authors',
                        'url'   => 'be_pages_education_authors.php'
                    )
                )
            ),
            array(
                'name'  => 'Forum',
                'sub'   => array(
                    array(
                        'name'  => 'Categories',
                        'url'   => 'be_pages_forum_categories.php'
                    ),
                    array(
                        'name'  => 'Topics',
                        'url'   => 'be_pages_forum_topics.php'
                    ),
                    array(
                        'name'  => 'Discussion',
                        'url'   => 'be_pages_forum_discussion.php'
                    )
                )
            ),
            array(
                'name'  => 'Special',
                'sub'   => array(
                    array(
                        'name'  => 'Maintenance',
                        'url'   => 'op_maintenance.php'
                    ),
                    array(
                        'name'  => 'Status',
                        'url'   => 'op_status.php'
                    ),
                    array(
                        'name'  => 'Coming Soon',
                        'url'   => 'op_coming_soon.php'
                    ),
                    array(
                        'name'  => 'Coming Soon 2',
                        'url'   => 'op_coming_soon_2.php'
                    )
                )
            )
        )
    ),

    array(
        'name'  => 'Dashboards',
        'icon'  => 'si si-cup',
        'sub'    => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_dashboard_all.php'
            ),
            array(
                'name'  => 'Social',
                'url'   => 'db_social.php'
            ),
            array(
                'name'  => 'Messages',
                'url'   => 'db_messages.php'
            ),
            array(
                'name'  => 'Dark',
                'url'   => 'db_dark.php'
            ),
            array(
                'name'  => 'Minimal',
                'url'   => 'db_minimal.php'
            ),
            array(
                'name'  => 'Modern',
                'url'   => 'db_modern.php'
            ),
            array(
                'name'  => 'Classic Boxed',
                'url'   => 'db_classic_boxed.php'
            ),
            array(
                'name'  => 'Banking',
                'url'   => 'db_banking.php'
            ),
            array(
                'name'  => 'Crypto',
                'url'   => 'db_crypto.php'
            ),
            array(
                'name'  => 'Hosting',
                'url'   => 'db_hosting.php'
            ),
            array(
                'name'  => 'Booking',
                'url'   => 'db_booking.php'
            ),
            array(
                'name'  => 'Gaming',
                'url'   => 'db_gaming.php'
            ),
            array(
                'name'  => 'Tasks',
                'url'   => 'db_tasks.php'
            ),
            array(
                'name'  => 'Medical',
                'url'   => 'db_medical.php'
            ),
            array(
                'name'  => 'Travel',
                'url'   => 'db_travel.php'
            ),
            array(
                'name'  => 'Social Compact',
                'badge' => array('New', 'success'),
                'url'   => 'db_social_compact.php'
            ),
            array(
                'name'  => 'Chat',
                'badge' => array('New', 'success'),
                'url'   => 'db_chat.php'
            ),
            array(
                'name'  => 'Analytics',
                'badge' => array('New', 'success'),
                'url'   => 'db_analytics.php'
            )
        )
    ),
    array(
        'name'  => 'Auth',
        'icon'  => 'si si-users',
        'sub'   => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_auth_all.php'
            ),
            array(
                'name'  => 'Sign In',
                'url'   => 'op_auth_signin.php'
            ),
            array(
                'name'  => 'Sign In Box',
                'url'   => 'op_auth_signin_box.php'
            ),
            array(
                'name'  => 'Sign In Box Alt',
                'badge' => array('New', 'success'),
                'url'   => 'op_auth_signin_box_alt.php'
            ),
            array(
                'name'  => 'Sign Up',
                'url'   => 'op_auth_signup.php'
            ),
            array(
                'name'  => 'Sign Up Box',
                'url'   => 'op_auth_signup_box.php'
            ),
            array(
                'name'  => 'Sign Up Box Alt',
                'badge' => array('New', 'success'),
                'url'   => 'op_auth_signup_box_alt.php'
            ),
            array(
                'name'  => 'Lock Screen',
                'url'   => 'op_auth_lock.php'
            ),
            array(
                'name'  => 'Lock Screen Box',
                'url'   => 'op_auth_lock_box.php'
            ),
            array(
                'name'  => 'Lock Screen Box Alt',
                'badge' => array('New', 'success'),
                'url'   => 'op_auth_lock_box_alt.php'
            ),
            array(
                'name'  => 'Pass Reminder',
                'url'   => 'op_auth_reminder.php'
            ),
            array(
                'name'  => 'Pass Reminder Box',
                'url'   => 'op_auth_reminder_box.php'
            ),
            array(
                'name'  => 'Pass Reminder Box Alt',
                'badge' => array('New', 'success'),
                'url'   => 'op_auth_reminder_box_alt.php'
            )
        )
    ),
    array(
        'name'  => 'Error',
        'icon'  => 'si si-ghost',
        'sub'    => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_error_all.php'
            ),
            array(
                'name'  => '400',
                'url'   => 'op_error_400.php'
            ),
            array(
                'name'  => '401',
                'url'   => 'op_error_401.php'
            ),
            array(
                'name'  => '403',
                'url'   => 'op_error_403.php'
            ),
            array(
                'name'  => '404',
                'url'   => 'op_error_404.php'
            ),
            array(
                'name'  => '500',
                'url'   => 'op_error_500.php'
            ),
            array(
                'name'  => '503',
                'url'   => 'op_error_503.php'
            )
        )
    )
);
