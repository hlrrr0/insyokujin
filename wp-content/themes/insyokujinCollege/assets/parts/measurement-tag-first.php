<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NC8MJS2');</script>
<!-- End Google Tag Manager -->



<!--もしも-->
<script src="https://r.moshimo.com/af/r/maftag.js" async></script>
<!--ロンバート-->
<script type='text/javascript' src='https://js.felmat.net/fmlp.js' async></script>
<?php
wp_reset_query();
if (is_page(array('thanks', 'trial-thanks', 'tour-thanks', 'request-thanks'))): ?>
    <!-- thanksページのみ -->
    <!-- もしも -->
    <?php
    $m_uri = "https://r.moshimo.com/af/r/result.js";
    $m_p_id = "?p_id=2835";
    $m_pc_id = "&pc_id=6461";
    $m_m_v = "&m_v=" . date("YmdHis");
    $m_src = $m_uri . $m_p_id . $m_pc_id . $m_m_v;
    ?>
    <script src="<?php echo $m_src; ?>" id="msmaf"></script>
    <?php
    $m_n_uri = "https://r.moshimo.com/af/r/result";
    $m_n_p_id = "?p_id=2835";
    $m_n_pc_id = "&pc_id=6461";
    $m_n_m_v = "&m_v=" . date("YmdHis");
    $m_n_src = $m_n_uri . $m_n_p_id . $m_n_pc_id . $m_n_m_v;
    ?>
    <noscript><img src="<?php echo $m_n_src; ?>" width="1" height="1" alt=""></noscript>
    <!-- ロンバート -->
    <?php
    $r_uri = "https://js.felmat.net/fmcv.js";
    $r_ad_id = "?adid=F4566W";
    $r_uqid = "&uqid=" . date("YmdHis");
    $r_src = $r_uri . $r_ad_id . $r_uqid;
    ?>
    <script type='text/javascript' src='<?php echo $r_src; ?>'></script>
<?php endif; ?>