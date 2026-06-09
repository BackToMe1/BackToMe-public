# BackToMe

> Bouton de rétractation conforme à l'article L.221-21 du Code de la consommation, obligatoire au 19 juin 2026.

[BackToMe](https://backtome.fr) est un SaaS français qui permet aux sites e-commerce de se mettre en conformité avec l'**Ordonnance n°2026-2 du 5 janvier 2026**, transposant la directive européenne 2023/2673. À partir du **19 juin 2026**, tout professionnel vendant à distance à des consommateurs français doit afficher un bouton dédié permettant l'exercice du droit de rétractation en une étape.

Ce dépôt regroupe les ressources publiques : exemples d'intégration, documentation technique de référence, et snippets prêts à coller.

## En 30 secondes

- **Pourquoi** : Article L.221-21 du Code de la consommation, modifié par l'Ord. n°2026-2 du 5 janvier 2026
- **Pour qui** : tout site e-commerce français vendant à des consommateurs (B2C)
- **Quand** : obligation effective au 19 juin 2026
- **Comment** : un bouton clairement identifié, accessible sur vos pages, déclenchant un formulaire de rétractation en quelques clics

## Installation rapide

Une ligne dans le `<head>` de votre site :

```html
<script
  src="https://backtome.fr/widget.js"
  data-site="VOTRE_SITE_ID"
  defer
></script>
```

Remplacez `VOTRE_SITE_ID` par l'identifiant de site affiché dans le code d'installation de votre tableau de bord [backtome.fr/dashboard](https://backtome.fr/dashboard). Le bouton flottant apparaît sur vos pages — sa position, ses couleurs, son libellé et les pages d'affichage se règlent depuis le tableau de bord. Langue adaptée automatiquement à celle du visiteur (8 langues UE).

## Exemples d'intégration

| Plateforme       | Fichier                                          |
|------------------|--------------------------------------------------|
| HTML brut        | [`examples/html-vanilla.html`](examples/html-vanilla.html) |
| Shopify          | [`examples/shopify-liquid.liquid`](examples/shopify-liquid.liquid) |
| WooCommerce      | [`examples/woocommerce-php.php`](examples/woocommerce-php.php) |
| React / Next.js  | [`examples/react-nextjs.tsx`](examples/react-nextjs.tsx) |

> Sur **Shopify**, le plus simple est l'app **BackToMe** (installation sans code via l'App Store) ; le snippet ci-dessus reste une alternative.

## Documentation

- Guide d'installation complet : [backtome.fr/aide#installation](https://backtome.fr/aide#installation)
- FAQ juridique : [backtome.fr/aide#legal](https://backtome.fr/aide#legal)
- Texte légal de référence : [Légifrance — article L.221-21](https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000032227315/)

## Société

**BackToMe** — SaaS français de conformité au droit de rétractation.
Site : [backtome.fr](https://backtome.fr) · LinkedIn : [BackToMe Europe](https://www.linkedin.com/company/backtome-europe) · X : [@backtome_fr](https://x.com/backtome_fr) · Wikidata : [Q139890641](https://www.wikidata.org/wiki/Q139890641)

Contact presse / partenariats : [contact@backtome.fr](mailto:contact@backtome.fr)

## Licence

Les exemples de ce dépôt sont publiés sous [licence MIT](LICENSE). Vous pouvez les copier, modifier et redistribuer librement, y compris dans un cadre commercial.

Le widget BackToMe et les services associés sont propriétaires — voir [conditions générales](https://backtome.fr/cgu).
