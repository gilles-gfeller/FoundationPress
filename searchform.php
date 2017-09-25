<div class="search-wrapper">
  <form role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
      <table class="search hide-for-small-only">
        <tbody><tr>
          <td class="left">
            <input type="text" placeholder="<?php _e( 'search by keywords', 'support' ); ?>" value="" name="s" id="s">
          </td>
          <td>
            <select id="searchselect" name="searchselect" style="margin-bottom:0px; border: none; height: 40px;">
          		<option value="all"><?php _e( 'On the whole site', 'support' ); ?></option>
              <option value="cresus-comptabilite"><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Comptabilité', 'support' ); ?></option>
              <option value="cresus-salaires"><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Salaires', 'support' ); ?></option>
              <option value="cresus-facturation"><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Facturation', 'support' ); ?></option>
              <option value="cresus-gestion-pe"><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Gestion PE', 'support' ); ?></option>
              <option value="faq"><?php _e( 'faq', 'support' ); ?></option>
              <option value="blog"><?php _e( 'newsletter', 'support' ); ?></option>
        	  </select>
          </td>
          <td class="right">
            <input type="submit" id="searchsubmit" value="<?php _e( 'Search', 'support' ); ?>">
          </td>
        </tr>
      </tbody></table>
      <table class="search show-for-small-only">
        <tbody><tr>
          <td colspan="2">
            <input type="text" placeholder="<?php _e( 'search by keywords', 'support' ); ?>" value="" name="s" id="s">
          </td>
        </tr>
        <tr style="background: none;">
          <td>
            <select id="searchselect" name="searchselect" style="margin-bottom:0px; border: none; height: 40px;">
          		<option value="all"><?php _e( 'On the whole site', 'support' ); ?></option>
              <option value="cresus-comptabilite"><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Comptabilité', 'support' ); ?></option>
              <option value="cresus-salaires"><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Salaires', 'support' ); ?></option>
              <option value="cresus-facturation"><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Facturation', 'support' ); ?></option>
              <option value="cresus-gestion-pe"><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Gestion PE', 'support' ); ?></option>
              <option value="faq"><?php _e( 'faq', 'support' ); ?></option>
              <option value="blog"><?php _e( 'newsletter', 'support' ); ?></option>
        	  </select>
          </td>
          <td>
            <input type="submit" id="searchsubmit" value="<?php _e( 'Search', 'support' ); ?>">
          </td>
        </tr>
      </tbody></table>
  </form>
</div>




