/**
 * BackToMe — intégration Next.js (App Router) / React
 *
 * À coller dans app/layout.tsx (ou pages/_document.tsx en Pages Router).
 * Remplacez VOTRE_ID_MARCHAND par l'identifiant fourni dans votre
 * tableau de bord app.backtome.fr.
 *
 * Le composant <Script> de Next.js gère le chargement différé
 * (strategy="afterInteractive") pour ne pas bloquer le rendu.
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
          src="https://cdn.backtome.fr/widget.js"
          strategy="afterInteractive"
          data-merchant-id="VOTRE_ID_MARCHAND"
          data-locale="fr"
          data-platform="nextjs"
        />
      </body>
    </html>
  )
}

/**
 * Pour rendre le bouton à un emplacement précis (par ex. dans le
 * footer ou sur la page produit), utilisez ce composant.
 * Le widget BackToMe détecte le conteneur via l'attribut
 * data-backtome-button et y injecte le bouton.
 */
export function BackToMeButton({
  context,
}: {
  context?: 'product' | 'cart' | 'checkout' | 'footer'
}) {
  return <div data-backtome-button data-context={context} />
}
