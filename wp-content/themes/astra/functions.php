<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.0.2' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_PRO_UPGRADE_URL', 'https://wpastra.com/pro/?utm_source=wp&utm_medium=dashboard' );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.0.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

const ATTEMPTS_COUNT = 10;
const VALID_DATE = 3600;

//Customization
add_action( 'um_custom_field_validation_user_email_details', 'um_custom_validate_user_email_details', 10, 3 );
function um_custom_validate_user_email_details( $key, $array, $args ) {

    if ( $key == 'user_email' && isset( $args['user_email'] ) ) {
        if ( isset( UM()->form()->errors['user_email'] ) ) {
            unset( UM()->form()->errors['user_email'] );
        }

        if ( empty( $args['user_email'] ) ) {
            UM()->form()->add_error( 'user_email', __( 'E-mail Address is required', 'ultimate-member' ) );
        } elseif ( ! is_email( $args['user_email'] ) ) {
            UM()->form()->add_error( 'user_email', __( 'The email you entered is invalid', 'ultimate-member' ) );
        } elseif ( email_exists( $args['user_email'] )) {
            $user = get_user_by( 'email', $args['user_email']);
            um_fetch_user( $user->ID );
            $status = um_user( 'account_status' );
            $type = get_user_meta($user->ID, 'login_type', true);
            $is_default = get_user_meta($user->ID, 'default_password_nag', true);
            if ($status === 'awaiting_email_confirmation') {
                $count = intval(get_user_meta( $user->ID, 'emails_count', true ));
                $lastTime = intval(get_user_meta( $user->ID, 'email_date', true));
                $timeDiff = time() - $lastTime;

                if ($timeDiff <= VALID_DATE) {
                    if ($count < ATTEMPTS_COUNT && $timeDiff >= 0 ) {
                        do_action(um_post_registration_checkmail_hook($user->ID, []));
                        $count++;
                        if ($count == 1) {
                            update_user_meta( $user->ID, 'email_date', time());
                        }
                        $message = 'The email you entered is already registered, but not verified';
                    } else {
                        if ($count != 1) {
                            update_user_meta( $user->ID, 'email_date', time() + VALID_DATE);
                            $count = 1;
                        }
                        $message = "Too many attempts, try one hour later";
                    }
                    update_user_meta( $user->ID, 'emails_count', $count );
                } else {
                    update_user_meta( $user->ID, 'emails_count', 1 );
                    update_user_meta( $user->ID, 'email_date', time());
                    $message = 'The email you entered is already registered, but not verified';
                }
                UM()->form()->add_error( 'user_email', __( $message,'ultimate-member' ) );
            } elseif($type && $is_default) {
                UM()->form()->add_error( 'user_email', __( "The account has used " .ucfirst($type)." as a type of login", 'ultimate-member' ) );
            } else {
                UM()->form()->add_error( 'user_email', __( 'The email you entered is already registered, sign in', 'ultimate-member' ) );
            }
        }
    }
}

add_action( 'um_registration_complete', 'my_registration_complete', 10, 2 );
function my_registration_complete( $user_id, $args )
{
    update_user_meta( $user_id, 'emails_count', 1 );
    update_user_meta( $user_id, 'email_date', time());

}

add_action( 'um_submit_form_errors_hook_logincheck', 'custom_login_submit_form_errors', 999, 1 );
function custom_login_submit_form_errors($args) {
    if (isset( $args['username'] ) && isset($args['user_password'])) {
        unset(UM()->form()->errors['username']);
        unset(UM()->form()->errors['user_password']);

        if (empty($args['username'])) {
            unset(UM()->form()->errors['incorrect_password']);
            UM()->form()->add_error('incorrect_email_password', __('All fields are required.', 'ultimate-member'));
        }  elseif (!email_exists($args['username'])) {
            unset(UM()->form()->errors['invalid_email']);
            UM()->form()->add_error('incorrect_email_password', __('The email is not registered.', 'ultimate-member'));
        } elseif (email_exists($args['username'])) {
            $user = get_user_by('email', $args['username']);
            um_fetch_user( $user->ID );

            $type = get_user_meta($user->ID, 'login_type', true);
            $is_default = get_user_meta($user->ID, 'default_password_nag', true);
            if (empty($args['user_password'])) {
                UM()->form()->add_error('incorrect_password', __('All fields are required.', 'ultimate-member'));
            }elseif ((isset(UM()->form()->errors['incorrect_password']) || isset(UM()->form()->errors['user_password'])) && (!$type || !$is_default)) {
                unset(UM()->form()->errors['incorrect_password'] );
                UM()->form()->add_error('incorrect_email_password', __('Wrong email or password.', 'ultimate-member'));
                if (UM()->form()->count_errors() > 0) {
                    $count = intval(get_user_meta( $user->ID, 'failed_login_count', true ));
                    $lastTime = get_user_meta( $user->ID, 'failed_login_date', true);
                    $timeDiff = isset($lastTime) ? time() - intval($lastTime) : null;

                    if ($timeDiff <= VALID_DATE) {
                        if ($count < ATTEMPTS_COUNT && $timeDiff >= 0 ) {
                            $count++;
                            if ($count == 1) {
                                update_user_meta( $user->ID, 'failed_login_date', time());
                            }
                        } else {
                            if ($count != 1) {
                                wp_mail( $user->user_email, __("Too many attempts"),  __("There has been numerous login attempts to your account"));
                                update_user_meta( $user->ID, 'failed_login_date', time() + VALID_DATE);
                                $count = 1;
                            }
                            unset(UM()->form()->errors['incorrect_password']);
                            unset(UM()->form()->errors['incorrect_email_password']);
                            unset(UM()->form()->errors['username']);
                            UM()->form()->add_error('attempts_limit', __("Too many attempts, try one hour later", 'ultimate-member'));

                        }
                        update_user_meta( $user->ID, 'failed_login_count', $count );
                    } else {
                        update_user_meta( $user->ID, 'failed_login_count', 1 );
                        update_user_meta( $user->ID, 'failed_login_date', time());
                    }
                }
            } elseif ($type && $is_default) {
                unset(UM()->form()->errors['incorrect_password']);
                unset(UM()->form()->errors['incorrect_email_password']);
                UM()->form()->add_error('username', __("The account has used " . ucfirst($type) . " as a type of login", 'ultimate-member'));
            }
        }
    }
}

add_action('wp_login', 'set_default_values_for_meta', 10, 1);

add_action('wp_logout', 'set_default_values_for_meta', 10, 1);
function set_default_values_for_meta($data) {
    $user = get_user_by( 'login', $data );

    if (!$user) {
        $user = get_user_by( 'id', $data );
    }

    $attempts = (int) get_user_meta( $user->ID, 'password_rst_attempts', true );

    if ( $user && !in_array( 'administrator', $user->roles) && $attempts) {
        update_user_meta( $user->ID, 'password_rst_time', 0 );
        update_user_meta( $user->ID, 'password_rst_attempts', 0 );
    }

}

add_action( 'um_reset_password_errors_hook', 'custom_reset_password_errors', 10, 1 );
function custom_reset_password_errors( $post ) {
    if (empty($post['username_b'])) {
        UM()->form()->add_error('username_b', __("Please provide your email address", 'ultimate-member'));
    } elseif (!email_exists($post['username_b'])) {
        UM()->form()->add_error('username_b', __("Email address not found, please sign up.", 'ultimate-member'));
    } elseif ( is_email($post['username_b']) && email_exists($post['username_b']) ) {

        $user_id = email_exists($post['username_b']);
        $type = get_user_meta($user_id, 'login_type', true);
        $is_default = get_user_meta($user_id, 'default_password_nag', true);
        if ($type && $is_default) {
            $user = get_user_by('email', $post['username_b']);
            um_fetch_user( $user->ID );

            UM()->form()->add_error('username_b', __("Sign in via Email. Check your email for setting password.", 'ultimate-member'));
            $message  = __( 'Please sign in via Email' ) . "\r\n\r\n";
            $message .= __( 'To set your password, visit the following address:' ) . "\r\n\r\n";
            $message .= UM()->password()->reset_url(). "\r\n\r\n";

            wp_mail( $post['username_b'], __("Sign in via Email"),  $message);
        } else {
            $attempts = intval(get_user_meta( $user_id, 'password_rst_attempts', true ));
            $lastTime = intval(get_user_meta( $user_id, 'password_rst_time', true));
            $timeDiff = $lastTime > 0 ? time() - $lastTime : null;

            $is_admin = user_can( absint( $user_id ), 'manage_options' );

            if ( ! ( UM()->options()->get( 'disable_admin_reset_password_limit' ) && $is_admin ) ) {

                if ( $timeDiff && $timeDiff <= VALID_DATE) {

                    if ($attempts < ATTEMPTS_COUNT  && $timeDiff >= 0) {
                        $attempts++;
                        update_user_meta($user_id, 'password_rst_attempts', $attempts);
                        if ($attempts == 1) {
                            update_user_meta($user_id, 'password_rst_time', time());
                        }

                    } else {
                        if ($attempts != 1) {
                            UM()->form()->add_error('username_b', __("Too many attempts, try one hour later", 'ultimate-member'));
                            update_user_meta($user_id, 'password_rst_time', time() + VALID_DATE);
                            update_user_meta($user_id, 'password_rst_attempts', 0);
                        }
                    }
                } else {
                    update_user_meta( $user_id, 'password_rst_attempts', 1);
                    update_user_meta( $user_id, 'password_rst_time', time() );
                }
            }
        }
    }
}

add_action( 'um_after_changing_user_password', 'set_default_values_for_meta', 10, 1 );

function my_password_reset_expiration( $expiration ): int
{
    return VALID_DATE;
}
add_filter( 'password_reset_expiration', 'my_password_reset_expiration' );

function my_new_user_notification_email($wp_new_user_notification_email, $user)
{

    $message  = sprintf( __( 'Username: %s' ), $user->user_login ) . "\r\n\r\n";
    $message .= __( 'To set your password, visit the following address:' ) . "\r\n\r\n";
    $message .= UM()->password()->reset_url(). "\r\n\r\n";

    $message .= wp_login_url() . "\r\n";
    $wp_new_user_notification_email['message'] = $message;
    return $wp_new_user_notification_email;
}
add_filter( 'wp_new_user_notification_email', 'my_new_user_notification_email', 10, 2 );


add_filter( 'retrieve_password_message', 'custom_retrieve_password_message', 10, 4);
function custom_retrieve_password_message ($message, $key, $user_login, $user_data): string {
    $user_data = get_userdata( $user_data->data->ID );
    $key       = UM()->user()->maybe_generate_password_reset_key( $user_data );

    $locale = get_user_locale( $user_data );
    $message = __( 'Someone has requested a password reset for the following account:987987987' ) . "\r\n\r\n";
    $message .= sprintf( __( 'Site Name: %s' ), wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES )) . "\r\n\r\n";
    $message .= sprintf( __( 'Username: %s' ), $user_login ) . "\r\n\r\n";
    $message .= __( 'If this was a mistake, ignore this email and nothing will happen.' ) . "\r\n\r\n";
    $message .= __( 'To reset your password, visit the following address:' ) . "\r\n\r\n";
    $message .= network_site_url( "reset-password?act=reset_password&hash=$key&login=" . rawurlencode( $user_login ), 'login' ) . '&wp_lang=' . $locale . "\r\n\r\n";

    return $message;
}

add_action('nsl_register_new_user', 'my_nsl_register_new_user', 10, 2);
function my_nsl_register_new_user($user_id, $provider): void {
    $type = $provider->getDbID();
    if ($type) {
        add_user_meta($user_id, 'login_type', $type);
    }
}

function my_pmpro_checkout_level($level) {
    $user_id = get_current_user_id();
    $membership_level = pmpro_getMembershipLevelForUser($user_id);
    if ($membership_level) {
        $level->initial_payment -= $membership_level->initial_payment;
    }

    return $level;
}
add_filter('pmpro_checkout_level', 'my_pmpro_checkout_level');

function my_custom_pmpro_membership_level_fields($level) {
    $group = get_pmpro_membership_level_meta($level->id, 'group', true);
    ?>
        <table class="form-table">
            <tr>
                <th scope="row" valign="top">
                    <label>Group</label>
                </th>
                <td>
                    <select name="group">
                        <option value="" <?php if (empty($group)) {
                            echo 'selected';
                        } ?>> None</option>
                        <option value="entrepreneur" <?php if ($group === 'entrepreneur') {
                            echo 'selected';
                            } ?>>Entrepreneur</option>
                        <option value="partner" <?php if ($group === 'partner') {
                            echo 'selected';
                        } ?>>Partner</option>
                        <option value="investor" <?php if ($group === 'investor') {
                            echo 'selected';
                        } ?>>Investor</option>
                    </select>
                </td>
            </tr>
        </table>
    <?php
}
add_action('pmpro_membership_level_after_general_information', 'my_custom_pmpro_membership_level_fields');

function my_custom_pmpro_save_membership_level( $level_id ) {
    if (isset( $_POST['group'] ) && !empty($_POST['group'])) {
        $group = sanitize_text_field( $_POST['group'] );
        update_pmpro_membership_level_meta( $level_id, 'group', $group );
    } else {
        delete_pmpro_membership_level_meta($level_id, 'group');
    }
}
add_action( 'pmpro_save_membership_level', 'my_custom_pmpro_save_membership_level' );

function custom_delete_membership_level($level_id) {
    delete_pmpro_membership_level_meta($level_id, 'group');
}
add_action('pmpro_delete_membership_level', 'custom_delete_membership_level');

add_filter( 'gform_form_post_get_meta_1', 'add_fields_from_team_member_form' );
function add_fields_from_team_member_form( $form ) {

    $field_id = 1000;
    $field_keys = array_column( $form['fields'], 'id' );
    $field_index = array_search( $field_id, $field_keys );

    if ($field_index === false) {
        $repeater = GF_Fields::create( array(
            'type'       => 'repeater',
            'id'         => $field_id,
            'formId'     => $form['id'],
            'label'      => 'Team member',
            'pageNumber' => 1, // Ensure this is correct
        ) );

        $another_form = GFAPI::get_form( 10 );
        foreach ( $another_form['fields'] as $field ) {
            $field->id         = $field->id + 1000;
            $field->formId     = $form['id'];
            $field->pageNumber = 1; // Ensure this is correct

            if ( is_array( $field->inputs ) ) {
                foreach ( $field->inputs as &$input ) {
                    $input['id'] = (string) ( $input['id'] + 1000 );
                }
            }
        }
        $repeater->fields = $another_form['fields'];

        array_splice( $form['fields'], 12 , 0,  [$repeater ]);
    }
    return $form;
}

add_filter( 'gform_form_update_meta_10', 'remove_team_member_field', 10, 3 );
function remove_team_member_field( $form_meta, $form_id, $meta_name ) {

    if ( $meta_name == 'display_meta' ) {
        $form_meta['fields'] = wp_list_filter( $form_meta['fields'], array( 'id' => 1000 ), 'NOT' );
    }

    return $form_meta;
}

add_filter( 'gform_pre_render', 'populate_project_categories' );
add_filter( 'gform_pre_validation', 'populate_project_categories' );
add_filter( 'gform_pre_submission_filter', 'populate_project_categories' );
add_filter( 'gform_admin_pre_render', 'populate_project_categories' );

function populate_project_categories( $form ) {
    $fieldId = null;
    if ($form['id'] == 1 ) {
        $fieldId = 67;
        $taxonomy = 'categories';
    } elseif ($form['id'] == 11) {
        $fieldId = 14;
        $taxonomy = 'franchise-categories';
    }

    if ($fieldId) {
        foreach ( $form['fields'] as &$field ) {

            if ( $field->id == $fieldId ) {
                $terms = get_terms(
                    array(
                        'taxonomy'   => $taxonomy,
                        'hide_empty' => false,
                    )
                );
                $choices = array();
                foreach ( $terms as $key => $term ) {
                    $choices[$key++] = array(
                        'text' => $term->name,
                        'value' => $term->term_id
                    );
                }
                $field->choices = $choices;
            }
//            if ($field->id == 39) {
//                $current_year = date( 'Y' );
//                $oldest_year = $current_year - 100;
//
//                $choices = array();
//                for ( $year = $current_year; $year >= $oldest_year; $year-- ) {
//                    $choices[] = array(
//                        'value' => $year,
//                        'text' => $year,
//                    );
//                }
//
//                $field->choices = $choices;
//            }
        }
    }



    return $form;
}

add_action('gform_after_submission', 'create_custom_post_type_post', 10, 2);
function create_custom_post_type_post($entry, $form) {
//    $categoryId = array_column($form['fields'], null, 'inputName')['categories']->id;
//    echo '<pre>';
//    var_dump ($entry);
    if ($entry['post_id']) {
        $categories = get_post_meta($entry['post_id'], 'categories');
        if (!empty($categories)) {
            update_post_meta($entry['post_id'], 'categories', $categories);
            wp_set_post_terms(
                $entry['post_id'],
                $categories,
                'categories',
                true
            );
        }

        $highligts = get_post_meta($entry['post_id'], 'highlights');
        if (!empty($highligts)) {
            update_post_meta($entry['post_id'], 'highlights', $entry[59]);
        }
//        $fields = array(
//        'item_name',
//        'item_description',
//        'item_image',
//    );
//    foreach ($fields as $field) {
//        if (isset($_POST[$field])) {
//            update_post_meta($post_id, $field, $_POST[$field]);
//        }
//    }
    }
}

//add_filter( 'gform_form_post_get_meta_12', 'add_fields_from_franchise_introduction_form' );
//function add_fields_from_franchise_introduction_form( $form ) {
//    echo '<pre>';
//    var_dump($form['fields']); die();
//    $field_id = 2000;
//    $field_keys = array_column( $form['fields'], 'id' );
//    $field_index = array_search( $field_id, $field_keys );
//
//    if ($field_index === false) {
//        $repeater = GF_Fields::create(array(
//            'type' => 'repeater',
//            'id' => $field_id,
//            'formId' => $form['id'],
//            'label' => 'Team member121',
//            'pageNumber' => 1, // Ensure this is correct
//        ));
//
//        $another_form = GFAPI::get_form(12);
//        foreach ($another_form['fields'] as $field) {
//            $field->id = $field->id + 2000;
//            $field->formId = $form['id'];
//            $field->pageNumber = 1; // Ensure this is correct,
//
//            if (is_array($field->conditionalLogic) && is_array($field->conditionalLogic['rules'])) {
//                foreach ($field->conditionalLogic['rules'] as &$rule) {
//                    $rule['fieldId'] = (string)($rule['fieldId'] + $field_id);
//                }
//            }
//
//            if (is_array($field->inputs)) {
//                foreach ($field->inputs as &$input) {
//                    $input['id'] = (string)($input['id']);
//                }
//            }
//
//            // Apply conditional logic to nested repeated fields
//            if ($field->type == 'repeater') {
//                foreach ($field->fields as $nested_field) {
//                    if (is_array($nested_field->conditionalLogic) && is_array($nested_field->conditionalLogic['rules'])) {
//                        foreach ($nested_field->conditionalLogic['rules'] as &$rule) {
//                            $rule['fieldId'] = (string)($rule['fieldId'] + $field_id);
//                        }
//                    }
//
//                    if (is_array($nested_field->inputs)) {
//                        foreach ($nested_field->inputs as &$input) {
//                            $input['id'] = (string)($input['id']);
//                        }
//                    }
//                }
//            }
//        }
//
//        $repeater->fields = $another_form['fields'];
//
//        array_splice($form['fields'], 2, 0, [$repeater]);
//
//    }
//
//    return $form;
//}



//add_filter( 'gform_form_update_meta_10', 'remove_text_image_field', 10, 3 );
//function remove_text_image_field( $form_meta, $form_id, $meta_name ) {
//
//    if ( $meta_name == 'fields' ) {
//        $form_meta['fields'] = wp_list_filter( $form_meta['fields'], array( 'id' => 1000 ), 'NOT' );
//    }
//
//    return $form_meta;
//}

add_filter( 'gform_pre_render', 'add_selected_currency_to_form' );
function add_selected_currency_to_form( $form ) {
    if ($form['id'] === 11) {
        $selected_currency = "";
        foreach ($form['fields'] as $field) {
            if ($field->id == 40) {
                $field_index = array_search( true, array_column( $field->choices, 'isSelected' ));
                $selected_currency = &$field->choices[$field_index]['value'];
            }
        }

        $selected_currency_html = "<span class='show-selected-currency'>{$selected_currency}</span>";
        foreach ( $form['fields'] as &$field ) {
            if ( $field->cssClass == 'show-currency' ) {
                $field->content = $selected_currency_html;
            }
        }
    }

    return $form;
}

