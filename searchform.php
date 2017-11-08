<div class="search-wrapper">
  <form role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
      <table class="search hide-for-small-only">
        <tbody><tr>
          <td class="left">
            <input type="text" placeholder="<?php _e( 'search by keywords', 'support' ); ?>" value="<?php echo $_GET['s']; ?>" name="s" id="s">
          </td>
          <td>
            <select id="searchselect" name="searchselect">
          	  <option value="all"><?php _e( 'On the whole site', 'support' ); ?></option>
              <option value="cresus-comptabilite" <?php if($_GET['searchselect']=="cresus-comptabilite") echo "selected"; ?>><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Comptabilité', 'support' ); ?></option>
              <option value="cresus-salaires" <?php if($_GET['searchselect']=="cresus-salaires") echo "selected"; ?>><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Salaires', 'support' ); ?></option>
              <option value="cresus-facturation" <?php if($_GET['searchselect']=="cresus-facturation") echo "selected"; ?>><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Facturation', 'support' ); ?></option>
              <option value="cresus-gestion-pe" <?php if($_GET['searchselect']=="cresus-gestion-pe") echo "selected"; ?>><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Gestion PE', 'support' ); ?></option>
              <option value="faq" <?php if($_GET['searchselect']=="faq") echo "selected"; ?>><?php _e( 'faq', 'support' ); ?></option>
              <option value="blog" <?php if($_GET['searchselect']=="blog") echo "selected"; ?>><?php _e( 'newsletter', 'support' ); ?></option>
        	</select>
          </td>
          <td class="right">
            <input type="submit" id="searchsubmit" value="<?php _e( 'Search', 'support' ); ?>">
          </td>
        </tr>
      </tbody></table>
  </form>
  <form role="search" method="get" id="searchform-mobile" action="<?php bloginfo('home'); ?>/">
      <table class="search show-for-small-only">
        <tbody><tr>
          <td colspan="2">
            <input type="text" placeholder="<?php _e( 'search by keywords', 'support' ); ?>" value="<?php echo $_GET['s']; ?>" name="s" id="s">
          </td>
        </tr>
        <tr style="background: none;">
          <td>
            <select id="searchselect" name="searchselect" style="margin-bottom:0px; border: none; height: 40px;">
          	  <option value="all"><?php _e( 'On the whole site', 'support' ); ?></option>
              <option value="cresus-comptabilite" <?php if($_GET['searchselect']=="cresus-comptabilite") echo "selected"; ?>><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Comptabilité', 'support' ); ?></option>
              <option value="cresus-salaires" <?php if($_GET['searchselect']=="cresus-salaires") echo "selected"; ?>><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Salaires', 'support' ); ?></option>
              <option value="cresus-facturation" <?php if($_GET['searchselect']=="cresus-facturation") echo "selected"; ?>><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Facturation', 'support' ); ?></option>
              <option value="cresus-gestion-pe" <?php if($_GET['searchselect']=="cresus-gestion-pe") echo "selected"; ?>><?php _e( 'manual', 'support' ); ?> <?php _e( 'Crésus Gestion PE', 'support' ); ?></option>
              <option value="faq" <?php if($_GET['searchselect']=="faq") echo "selected"; ?>><?php _e( 'faq', 'support' ); ?></option>
              <option value="blog" <?php if($_GET['searchselect']=="blog") echo "selected"; ?>><?php _e( 'newsletter', 'support' ); ?></option>
        	</select>
          </td>
          <td>
            <input type="submit" id="searchsubmit" value="<?php _e( 'Search', 'support' ); ?>">
          </td>
        </tr>
      </tbody></table>
  </form>
</div>
