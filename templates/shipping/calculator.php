<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<form id="shipping-calculator" method="post" action="">
    <div class="input">
        <div class="title"><?php _e( 'Estimate Shipping Cost', 'bbalogistics' ); ?></div>
        <select name="country" id="country">
            <option value="AU">Australia</option>
        </select>
        <input type="text" name="postcode" id="postcode" placeholder="<?php _e( 'Postcode', 'bbalogistics' ); ?>" />
        <button type="submit" class="button alt"><?php _e( 'Estimate', 'bbalogistics' ); ?></button>
        <div class="note"><?php _e( 'Price exc Tax', 'bbalogistics' ); ?></div>
    </div>
    <div class="output"></div>
</form>

<style type="text/css">
#shipping-calculator .input,
#shipping-calculator .output { margin: 10px 0; padding: 5px 0; }
.input .title { margin-bottom: 1em; font-weight: bold; }
.input .note { font-size: 12px; }
.input input[type="text"] { max-width: 350px; }
.input button[type="submit"] { margin-top: 1em; }
</style>
