<?php
/**
 * BackToMe — intégration WooCommerce
 *
 * À coller dans le functions.php de votre thème enfant, ou dans un plugin
 * MU (must-use). Remplacez VOTRE_ID_MARCHAND par l'identifiant fourni
 * dans votre tableau de bord app.backtome.fr.
 *
 * Le widget BackToMe se charge sur toutes les pages WooCommerce
 * (boutique, produit, panier, commande) et injecte le bouton de
 * rétractation conforme à l'article L.221-21 du Code de la consommation.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_head', function () {
    // On ne charge le widget que sur les pages e-commerce pour éviter
    // un appel CDN inutile sur le blog ou les pages légales.
    if ( ! function_exists( 'is_woocommerce' ) ) {
        return;
    }
    if ( ! ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) ) {
        return;
    }

    $locale = substr( get_locale(), 0, 2 ); // 'fr', 'en', 'de', etc.
    ?>
    <script
        src="https://cdn.backtome.fr/widget.js"
        data-merchant-id="VOTRE_ID_MARCHAND"
        data-locale="<?php echo esc_attr( $locale ); ?>"
        data-platform="woocommerce"
        data-shop-domain="<?php echo esc_attr( wp_parse_url( home_url(), PHP_URL_HOST ) ); ?>"
        defer
    ></script>
    <?php
} );

/**
 * Optionnel : afficher le bouton à un emplacement précis du panier
 * via le hook 'woocommerce_after_cart'.
 */
add_action( 'woocommerce_after_cart', function () {
    echo '<div data-backtome-button data-context="cart"></div>';
} );
