<?php
/**
 * Template part for subscription
 */
?>
<div class="reveal large" id="modalBulletin" data-reveal>
        <h1><?php _e( 'privacy policy', 'support' ); ?></h1>
        <p class="lead"><?php _e( 'privacy policy_subtitle', 'support' ); ?></p>
        <p><?php _e( 'privacy policy_text', 'support' ); ?></p>
        <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
        </button>
</div>
<section id="inscription">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-12 cell">
                    <h2 class="section-title text-center"><?php _e( 'newsletter', 'support' ); ?></h2>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="medium-12 cell text-center">
                    <p><?php _e( 'To be informed, subscribe to the Cresus Newsletter.', 'support' ); ?><br /><?php _e( 'We will then send you a dozen emails a year.', 'support' ); ?></p>
                </div>
            </div>
            <div class="grid-x grid-padding-x align-center">
                <div class="medium-12 cell text-center">
                    <form method="get" id="" action="">
                        <table class="bulletin">
                            <tr>
                                <td class="left"><input placeholder="<?php _e( 'please, enter your email', 'support' ); ?>" type="text" value="" name="email" id="email" /></td>
                                <td class="right"><input type="submit" id="inscription" value="<?php _e( 'subscription', 'support' ); ?>" /></td>
                            </tr>
                        </table>
                    </form>
                    <a href="#" data-open="modalBulletin" class="adveced-search"><i class="fa fa-angle-down" aria-hidden="true"></i> <?php _e( 'privacy policy', 'support' ); ?></a>
                </div>
            </div>
        </div>
</section>
