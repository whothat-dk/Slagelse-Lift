
<footer class="row">
    <!-- Grid container -->
    <div class="gc">
        <!-- UPPER PART -->
        <div class="col-12 footer_top footer_facebook">
            <div class="col-6">
                <div class="vc_fa_iconbox_wrap ">
                    <div class="vc_fa_iconbox_container">
                        <a href="https://www.facebook.com/slagelselift/" target="_blank" class="vc_fa_iconbox_link">
                            <i class="fa fa-facebook vc_fa_icon" aria-hidden="true"></i>
                            FØLG MED PÅ FACEBOOK
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="vc_fa_iconbox_wrap ">
                    <div class="vc_fa_iconbox_container">
                        <a href="https://www.facebook.com/slagelselift/" target="_blank" class="vc_fa_iconbox_link">
                            <i class="fa fa-facebook vc_fa_icon" aria-hidden="true"></i>
                            FØLG MED PÅ FACEBOOK
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- MIDDLE PART -->
        <div class="footer_logo">
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                <img src='<?php echo esc_url( get_theme_mod( 'footer_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
            </a>
        </div>
        <!-- LOWER PART -->
        <div class="col-12 footer_bottom">
            <!-- : LEFT -->
            <div class="col-6">
                <!-- SLAGELSE -->
                <div class="col-3">
                    <div class="footer_company_info">
                        <h5>SLAGELSE AFDELING</h5>
                        <p><span class="footer_info"><?= get_theme_mod( 'footer_slagelse_vej' ); ?></span></p>
                        <p><span class="footer_info"><?= get_theme_mod( 'footer_slagelse_by' ); ?></span></p>
                    </div>
                </div>
                <!-- HERLEV -->
                <div class="col-3">
                    <div class="footer_company_info">
                        <h5>HERLEV AFDELING</h5>
                        <p><span class="footer_info"><?= get_theme_mod( 'footer_herlev_vej' ); ?></span></p>
                        <p><span class="footer_info"><?= get_theme_mod( 'footer_herlev_by' ); ?></span></p>
                    </div>
                </div>
                <!-- KONTAKT -->
                <div class="col-3">
                    <div class="footer_company_info">
                        <h5>KONTAKT</h5>
                        <p><a href="mailto:<?= get_theme_mod( 'footer_contact_mail' ); ?>" class="footer_contact_mail"><?= get_theme_mod( 'footer_contact_mail' ); ?></a></p>
                        <p><a href="tel:<?= get_theme_mod( 'footer_contact_tel' ); ?>" class="footer_contact_tel mt30"><?= get_theme_mod( 'footer_contact_tel' ); ?></a></p>
                    </div>
                </div>
            </div>
            <!-- : RIGHT -->
            <div class="col-6">
                <div class="footer_logo_container">
                    <!-- IMAGE #1 -->
                    <div class="footer_logo">
                        <img src='<?php echo esc_url( get_theme_mod( 'footer_logo_1' ) ); ?>'>
                    </div>
                    <!-- IMAGE #2 -->
                    <div class="footer_logo">
                        <img src='<?php echo esc_url( get_theme_mod( 'footer_logo_2' ) ); ?>'>
                    </div>
                    <!-- IMAGE #3 -->
                    <div class="footer_logo">
                        <img src='<?php echo esc_url( get_theme_mod( 'footer_logo_3' ) ); ?>'>
                    </div>
                    <!-- IMAGE #4 -->
                    <div class="footer_logo">
                        <img src='<?php echo esc_url( get_theme_mod( 'footer_logo_4' ) ); ?>'>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <!-- : DISCLAIMER -->
            <div class="footer_disclaimer">
                <span class="footer_disclaimer"><?= get_theme_mod( 'footer_disclaimer' ); ?></span>
            </div>
        </div>
    </div>
</footer>
<? wp_footer(); ?>
</body>
</html>