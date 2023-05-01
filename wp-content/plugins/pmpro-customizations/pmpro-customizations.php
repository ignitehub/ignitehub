<?php
/*
Plugin Name: PMPro Customizations
Plugin URI: https://www.paidmembershipspro.com/wp/pmpro-customizations/
Description: Customizations for my Paid Memberships Pro Setup
Version: .1
Author: Paid Memberships Pro
Author URI: https://www.paidmembershipspro.com
*/

//Now start placing your customization code below this line

global $pmpro_level_groups, $wpdb;
$pmpro_level_groups = $wpdb->get_col("SELECT id FROM $wpdb->pmpro_membership_levels WHERE name LIKE '%Entrepreneur%' ");
$pmpro_level_groups = [$pmpro_level_groups];

function pmpro_level_groups_checkout_boxes() {

    global $pmpro_level_groups, $pmpro_level, $discount_code, $wpdb;
    if (empty($pmpro_level_groups) || empty($pmpro_level)) {
        return;
    }

    if (!empty($discount_code)) {
        $discount_code_id = $wpdb->get_var("SELECT id FROM $wpdb->pmpro_discounts_codes WHERE code = ".$discount_code." LIMIT 1");
    }
    foreach ($pmpro_level_groups as $group) {
        if (in_array($pmpro_level->id, $group)) {
            ?>
            <div id="pmpro_level_options" class="pmpro_checkout">
                <h3>
                    <span class="pmpro_checkout-h3-name">
                        <?php esc_attr_e('Select a payment plan.','paid-membership-pro'); ?>
                    </span>
                </h3>
                <div class="pmpro_checkout-fields">
                    <div class="pmpro_checkout-field pmpro_checkout-field-radio">
                        <?php
                        foreach ($group as $level_id) {
                            $level = pmpro_getLevel($level_id);
                            if (!empty($discount_code)) {
                                $code_check = pmpro_checkDiscountCode($discount_code, $level_id, true);
                                if ($code_check[0] != false) {
                                    $sqlQuery = "SELECT l.id, el.*, l.name, l.description, l.allow_signups FROM $wpdb->pmpro_discount_codes_levels cl LEFT JOIN $wpdb->pmpro_membership_levels l ON el.level_id = l.id LEFT JOIN $wpdb->pmpro_discount_codes dc ON dc.id = el.code_id WHERE dc.code = " . $discount_code . "AND el.level_id = " . (int)$level_id . "LIMIT 1";
                                    $level = $wpdb->get_row($sqlQuery);
                                    if(empty($level)) {
                                        $level = $wpdb->get_row("SELECT * FROM $wpdb->pmpro_membership_levels WHERE id = " . $level_id);
                                    }
                                    $level->code_id = $discount_code_id;
                                    $level = apply_filters('pmpro_discount_code_level', $level, $discount_code_id);
                                }
                            }
                            $level = apply_filters('pmpro_checkout_level', $level);?>

                        <div class="pmpro_checkout-field-radio-item">
                            <input type="radio" id="pmpro_level_ <?php echo $level_id;?>" name="level" value="<?php echo $level_id; ?>" <?php checked($pmpro_level->id);?>>
                            <label class="pmpro_label-inline" for="pmpro_level<?php echo $level_id?>"> <?php echo pmpro_getLevelCost($level, false, true); ?></label>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
<?php
        }
    }


}
add_action('pmpro_checkout_boxes', 'pmpro_level_groups_checkout_boxes');