/**
 * BackToMe — intégration Next.js (App Router) / React
 *
 * À coller dans app/layout.tsx (ou pages/_document.tsx en Pages Router).
 * Remplacez VOTRE_SITE_ID par l'identifiant de site (data-site) affiché dans
 * le code d'installation de votre tableau de bord backtome.fr/dashboard.
 *
 * Le composant <Script> de Next.js gère le chargement différé
 * (strategy="afterInteractive") pour ne pas bloquer le rendu. Le bouton
 * flottant s'affiche sur vos pages ; position, couleurs, libellé et pages
 * d'affichage se règlent depuis le tableau de bord. La langue s'adapte
 * automatiquement à celle du visiteur.
 */

import Script from 'next/script'

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="fr">
      <body>
        {children}

        <Script
          src="https://backtome.fr/widget.js"
          strategy="afterInteractive"
          data-site="VOTRE_SITE_ID"
        />
      </body>
    </html>
  )
}
