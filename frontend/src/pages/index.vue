<template>
  <BaseLayout>
    <!--landing page start-->
    <div class="w-full min-h-screen relative overflow-hidden flex flex-col items-center justify-center py-28"> 
      
      <!--yellow spot-->
      <div class="absolute w-96 h-96 bg-[#F3A122] rounded-full blur-[120px] opacity-20 z-0 pointer-events-none"></div>

      <!--site content div-->
      <div v-motion-fade-visible-once class="relative z-10 w-full flex flex-col items-center sm:mt-0 mt-10">

        <!--site label-->
        <h2 class="hero-animate text-sm font-bold text-center text-[#F3A122] tracking-widest uppercase">Dizájn & Fejlesztés</h2>
        
        <!--welcome text-->
        <p class="hero-animate mx-5 lg:mx-40 text-4xl lg:text-7xl font-extrabold text-center mt-6 text-white leading-tight">
          Digitális lábnyom, 
          <span class="bg-linear-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
            maradandó
          </span> 
          érték.
        </p>
        
        <p class="text-gray-400 p-5 text-center mt-6 max-w-2xl mx-auto text-lg hero-animate ">
          A Neologic csapata modern, gyors és konverzióra optimalizált weboldalakat készít vállalkozásának.
        </p>
    
        <!--buttons-->
        <div class="hero-animate flex flex-col sm:flex-row justify-center gap-4 mt-10 px-5 w-full sm:w-auto">
          <button class="bg-linear-to-r from-[#F3A122] to-[#EC7C14] text-black font-bold px-10 py-3 rounded-md hover:scale-105 transition-transform shadow-lg shadow-orange-500/20">
            Ajánlatkérés
          </button>
          <button class="border border-gray-500 text-white font-semibold px-10 py-3 rounded-md hover:bg-white/10 transition-colors">
            Ismerjetek meg minket
          </button>
        </div>

        <div 
          ref="statsSection"
          class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-20 mt-20 px-10 w-full max-w-6xl border-t border-white/10 pt-12"
        >
          <div v-for="stat in statsData" :key="stat.label" class="flex flex-col items-center">
            <p class="font-black text-center text-4xl md:text-5xl text-[#F3A122]">
              <span>{{ Math.floor(stat.displayValue) }}</span>{{ stat.suffix }}
            </p>
            <p class="text-gray-400 text-center text-xs md:text-sm uppercase tracking-widest mt-2">{{ stat.label }}</p>
          </div>
        </div>

      </div>
    </div>
    <!--landing page end-->

    
  </BaseLayout>
</template>

<script setup>
import { reactive, ref, onMounted } from 'vue'
import BaseLayout from '@layouts/BaseLayout.vue'
import { useIntersectionObserver } from '@vueuse/core'
import gsap from 'gsap'

// Definition of statistical data
const statsData = reactive([
  { label: 'Csapattag', target: 4, displayValue: 0, suffix: '' },
  { label: 'Projekt', target: 50, displayValue: 0, suffix: '+' },
  { label: 'Év tapasztalat', target: 4, displayValue: 0, suffix: '+' },
  { label: 'Elégedett ügyfél', target: 100, displayValue: 0, suffix: '%' },
])

const statsSection = ref(null)
const hasAnimated = ref(false)

// Start countdown animation AI
const startCounting = () => {
  if (hasAnimated.value) return
  hasAnimated.value = true

  statsData.forEach((stat) => {
    gsap.to(stat, {
      displayValue: stat.target,
      duration: 2,
      ease: "power2.out",
    })
  })
}

onMounted(() => {
  // 3. hero animate class AI
  gsap.fromTo(".hero-animate", 
    { 
      y: 30,         // 30 px starts from below
      opacity: 0     // opacity starts from 0, so it's invisible
    }, 
    { 
      y: 0,          // ends at its original position
      opacity: 1,    // ends fully visible
      duration: 1,   // animation lasts 1 second
      stagger: 0.2,  // each element starts 0.2 seconds after the previous one
      ease: "power3.out" // smooth easing for a nice effect
    }
  );
})

// Only fires when the user scrolls there AI
useIntersectionObserver(
  statsSection,
  ([{ isIntersecting }]) => {
    if (isIntersecting) {
      startCounting()
    }
  },
  { threshold: 0.5 } // Starts when 50% of the section is visible
)
</script>

<style scoped>
/* A little extra refinement to the fonts AI */
span {
  font-variant-numeric: tabular-nums; /* Prevents numbers from jumping during spins AI*/
}
</style>