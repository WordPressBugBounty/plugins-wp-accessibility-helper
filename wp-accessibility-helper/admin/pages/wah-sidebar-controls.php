<?php $wah_list = wah_get_admin_widgets_list(); ?>
<div class="wrap">
    <div class="element_row">
        <h1 style="background: #236478;color: #FFF;padding: 10px;line-height: 1;">
            <?php _e("Sidebar widgets order","wp-accessibility-helper"); ?>
        </h1>
        <?php render_wah_header_notice(); ?>
        <div id="fountainG">
            <?php for($i=1;$i<=8;$i++): ?>
                <div id="fountainG_<?php echo $i; ?>" class="fountainG"></div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="element_row">
        <div class="wah-main-admin-row">
            <?php wah_render_admin_sidebar(); ?>
            <div class="wah-main-admin-form element_container">
                <p>
                    <ol>
                        <li>Drag and drop widget</li>
                        <li><span class="active_widget"></span>Active widget</li>
                        <li><span class="inactive_widget"></span>Inactive widget</li>
                    </ol>
                </p>
                <div class="wahpro-placeholder">
                    <div class="pro-label">WAH PRO feture - Reset widgets order</div>
                    <img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/resetOrder.png" alt="Reset widgets order">
                </div>
                <hr />
                <ul id="sortable-wah-widget" data-nonce="<?php echo esc_html(wp_create_nonce( 'wah_widgets_order_nonce' ));?>">
                    <?php foreach($wah_list as $id=>$item) { ?>
                        <li data-status="<?php echo $item['active']; ?>" id="<?php echo $id; ?>" class="ui-state-default wah-button-widget <?php echo $item['class']; ?>">
                            <span class="dashicons dashicons-menu"></span> <?php echo $item['html']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>