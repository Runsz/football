    <footer id="footer">
        <?php 
        //social_link
            $social_links = [];
            $social_links_name_map = [
                'facebook' => 'FB',
                'instagram' => 'IG',
                'twitter' => 'TW',
                'youtube' => 'YT',
            ];

            foreach ( $social_links_name_map as $social_link_name => $social_link_name_value ){
                $setting_id = sprintf('sos_%s_link', $social_link_name);
                $social_link = get_theme_mod($setting_id) ;

                if ($social_link) {
                    array_push(
                        $social_links,
                        [
                            'socialLinkName' => esc_attr($social_link_name_value),
                            'socialLinkUrl' => esc_url($social_link)
                        ]
                    );
                }

            } ?>
            <?php if (!empty ($social_links) && is_array($social_links)) { ?>
                    <nav id="social_link">
                        <?php
                            foreach ($social_links as $social_link){
                                printf('<a target="_blank" href="%1$s">%2$s</a>', $social_link['socialLinkUrl'], $social_link['socialLinkName']);
                            }
                        ?>
                    </nav>
            <?php } ?>

        <?php echo bloginfo('name');?> Copyright &copy; <?php echo ' '. date('Y') ." - All rights reserved" ?>
    </footer>
<?php wp_footer(); ?>
</body>
</html>