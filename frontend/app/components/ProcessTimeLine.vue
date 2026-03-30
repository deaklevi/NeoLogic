<template>
  <div class="about-animate max-w-5xl mx-auto p-6">
    <div class="space-y-12 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-[#858593]/30 before:to-transparent">
      
      <div v-for="(step, index) in steps" :key="index" 
           class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
        
        <div class="flex items-center justify-center w-12 h-12 rounded-full border border-[#858593]/50 bg-[#17171C] text-[#F3A122] font-black z-10 shrink-0 
                    md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 
                    transition-all duration-500 shadow-[0_0_0_4px_rgba(23,23,28,1)]
                    group-hover:border-[#F3A122] group-hover:bg-[#F3A122] group-hover:text-black group-hover:shadow-[0_0_20px_rgba(243,161,34,0.6)]">
          {{ step.id }}
        </div>

        <div class="w-[calc(100%-4rem)] md:w-[42%] p-8 rounded-xl border border-[#858593]/20 bg-[#17171C] 
                    transition-all duration-300 ease-out cursor-default
                    hover:border-[#F3A122]/50 hover:shadow-[0_10px_30px_rgba(0,0,0,0.5)] hover:-translate-y-1">
          
          <div class="flex items-center justify-between mb-3">
            <h3 class="text-xl font-bold text-white group-hover:text-[#F3A122] transition-colors duration-300">
                {{ step.title }}
            </h3>
          </div>
          
          <p class="text-gray-400 leading-relaxed text-sm md:text-base group-hover:text-gray-300 transition-colors">
            {{ step.description }}
          </p>
          
          <div class="mt-4 flex justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F3A122" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"/>
            </svg>
          </div>
        </div>
      </div>

    </div>
  </div>
</template>

<script setup>
const steps = [
  { id: '01', title: 'Konzultáció & Tervezés', description: 'Minden sikeres projekt egy mély merüléssel kezdődik. Nem csak funkciókat listázunk, hanem megértjük az üzleti céljaidat.' },
  { id: '02', title: 'UI/UX Design', description: 'Az esztétika nálunk nem öncélú: a felhasználói élményt (UX) és a modern arculatot (UI) ötvözzük.' },
  { id: '03', title: 'Agilis Fejlesztés', description: 'A legmodernebb stack-et használjuk , hogy a rendszer gyors, biztonságos és skálázható legyen.' },
  { id: '04', title: 'QA & Tesztelés', description: 'Az elegancia számunkra a hibátlan működést is jelenti. Automatizált tesztekkel garantáljuk a minőséget.' },
  { id: '05', title: 'Átadás & Támogatás', description: 'Gondoskodunk róla, hogy az indulás zökkenőmentes legyen, és hosszú távon is számíthasson ránk.' }
]
</script>