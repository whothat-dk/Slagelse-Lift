<footer class="row">
    <!-- Grid container -->
    <div class="gc">
        <!-- UPPER PART -->
        <div class="col-12 footer_top">
            <div class="footer_social">
                <!-- facebook -->
                <a href="<?= get_theme_mod( 'footer_social_url_facebook' ); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
                    FØLG MED PÅ FACEBOOK
                </a>
                <!-- linkedin -->
                <!--<a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>-->
                <a href="<?= get_theme_mod( 'footer_social_url_linkedin' ); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>
                    FIND OS PÅ LINKEDIN
                </a>
            </div>
        </div>
        <!-- MIDDLE PART -->
        <div class="col-12">
            <div class="footer_logo">
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                    <img src='<?php echo esc_url( get_theme_mod( 'footer_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                </a>
            </div>
        </div>
        <!-- LOWER PART -->
        <div class="col-12">
            <!-- : LEFT -->
            <div class="col-7 footer_bottom">
                <!-- SLAGELSE -->
                <div class="footer_company_info">
                    <h5>SLAGELSE AFDELING</h5>
                    <p><span class="footer_info"><?= get_theme_mod( 'footer_slagelse_vej' ); ?></span></p>
                    <p><span class="footer_info"><?= get_theme_mod( 'footer_slagelse_by' ); ?></span></p>
                </div>
                <!-- HERLEV -->
                <div class="footer_company_info">
                    <h5>HERLEV AFDELING</h5>
                    <p><span class="footer_info"><?= get_theme_mod( 'footer_herlev_vej' ); ?></span></p>
                    <p><span class="footer_info"><?= get_theme_mod( 'footer_herlev_by' ); ?></span></p>
                </div>
                <!-- KONTAKT -->
                <div class="footer_company_info">
                    <h5>KONTAKT</h5>
                    <p><a href="mailto:<?= get_theme_mod( 'footer_contact_mail' ); ?>" class="footer_contact_mail"><?= get_theme_mod( 'footer_contact_mail' ); ?></a></p>
                    <p><a href="tel:<?= get_theme_mod( 'footer_contact_tel' ); ?>" class="footer_contact_tel mt30"><?= get_theme_mod( 'footer_contact_tel' ); ?></a></p>
                </div>
            </div>
            <!-- : RIGHT -->
            <div class="col-5 footer_bottom">
                <!-- IMAGE #1 -->
                <div class="footer_images">
                    <img src='<?php echo esc_url( get_theme_mod( 'footer_logo_4' ) ); ?>'>
                </div>
                <!-- IMAGE #2 -->
                <div class="footer_images">
                    <img src='<?php echo esc_url( get_theme_mod( 'footer_logo_3' ) ); ?>'>
                </div>
                <!-- IMAGE #3 -->
                <div class="footer_images">
                    <img src='<?php echo esc_url( get_theme_mod( 'footer_logo_2' ) ); ?>'>
                </div>
                <!-- IMAGE #4 -->
                <div class="footer_images">
                    <img src='<?php echo esc_url( get_theme_mod( 'footer_logo_1' ) ); ?>'>
                </div>
            </div>
        </div>
        <!-- : DISCLAIMER -->
        <div class="col-12 footer_disclaimer">
            <p><span class="footer_disclaimer"><?= get_theme_mod( 'footer_disclaimer' ); ?></span></p>
        </div>
    </div>
</footer>
<? wp_footer(); ?>
</body>
</html>