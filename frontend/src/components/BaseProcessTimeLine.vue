<template>
  <div class="about-animate max-w-4xl mx-auto p-6">
    <div class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-linear-to-b before:from-transparent before:via-[#858593] before:to-transparent">
      
      <div v-for="(step, index) in steps" :key="index" class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
        
        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-[#858593] bg-[#222226] text-[#F3A122] font-bold shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 transition-colors duration-300 group-hover:border-[#F3A122] group-hover:shadow-[0_0_15px_rgba(243,161,34,0.4)]">
          {{ step.id }}
        </div>

        <div class="w-[calc(100%-4rem)] md:w-[45%] p-6 rounded-md border border-[#858593] bg-[#17171C] transition-all duration-300 hover:border-[#F3A122] hover:-translate-y-1 cursor-default">
          <div class="flex items-center justify-between mb-1">
            <h3 class="text-xl font-bold text-white">{{ step.title }}</h3>
          </div>
          <p class="text-gray-400 leading-relaxed text-sm md:text-base">
            {{ step.description }}
          </p>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      steps: [
        { id: '01', title: 'Stratégiai Konzultáció & Tervezés', description: 'Minden sikeres projekt egy mély merüléssel kezdődik. Nem csak a funkciókat listázzuk, hanem megértjük az üzleti céljaidat.' },
        { id: '02', title: 'UI/UX Design (Figma)', description: 'Az esztétika nálunk nem öncélú: a felhasználói élményt (UX) és a modern arculatot (UI) ötvözzük.' },
        { id: '03', title: 'Agilis Fejlesztés (Vue.js & Laravel)', description: 'Itt történik a varázslat: a design életre kel. A legmodernebb stack-et használjuk (Nuxt.js, Laravel), hogy a rendszer gyors, biztonságos és skálázható legyen.' },
        { id: '04', title: 'QA & Automatizált Tesztelés', description: 'Az elegancia számunkra a hibátlan működést is jelenti. Nem az élesítés után keressük a hibákat.' },
        { id: '05', title: 'Bevezetés & Hosszú távú Támogatás', description: 'Az átadás nem a búcsút jelenti. Gondoskodunk róla, hogy az indulás zökkenőmentes legyen, és te magabiztosan kezeld az új eszközödet.' }
      ]
    }
  }
}
</script>