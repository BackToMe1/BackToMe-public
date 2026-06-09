<?php
/**
 * BackToMe — intégration WooCommerce / WordPress
 *
 * À coller dans le functions.php de votre thème enfant, ou dans un plugin
 * MU (must-use). Remplacez VOTRE_SITE_ID par l'identifiant de site (data-site)
 * affiché dans le code d'installation de votre tableau de bord
 * backtome.fr/dashboard.
 *
 * Le bouton flottant s'affiche sur vos pages ; sa position, ses couleurs, son
 * libellé et les pages d'affichage (panier, produit, etc.) se règlent depuis
 * le tableau de bord. La langue s'adapte automatiquement à celle du visiteur
 * (FR, EN, DE, ES, NL, IT, PT, PL).
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_head', function () {
    ?>
    <script
        src="https://backtome.fr/widget.js"
        data-site="VOTRE_SITE_ID"
        defer
    ></script>
    <?php
} );
