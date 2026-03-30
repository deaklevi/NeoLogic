// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: false },
  modules: ['@nuxtjs/tailwindcss'],
  runtimeConfig: {
    public: {
      // Itt CSAK az alapértelmezett értéket add meg. 
      // A Nuxt automatikusan keresni fogja a NUXT_PUBLIC_API_BASE-t a .env-ben!
      apiBase: 'http://localhost:8000'
    }
  },
  app: {
    head: {
      title: 'NeoLogic | Modern Szoftvermegoldások és Innováció',
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1',
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/NeoLogic logo.ico' }
      ],
      meta: [
        { name: 'description', content: 'A NeoLogic valóra váltja céged digitális transzformációját. Kifinomult web fejlesztés, logikusan felépített design.' },
        { name: 'keywords', content: 'szoftverfejlesztés, Vue.js, NeoLogic, digitális megoldások, weboldal készítés' },
        { name: 'author', content: 'NeoLogic Team' },
        // Open Graph
        { property: 'og:type', content: 'website' },
        { property: 'og:title', content: 'NeoLogic | Modern Szoftvermegoldások' },
        { property: 'og:description', content: 'Egyedi szoftverfejlesztés és modern webes megoldások. Nézd meg, miben segíthetünk!' },
        { property: 'og:image', content: 'https://neologicdemo.saavatar.xyz/NeoLogic-logo.ico' },
      ],
    }
  }
})