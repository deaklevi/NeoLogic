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
        <p class="hero-animate mx-5 lg:mx-40 text-4xl lg:text-7xl font-extrabold text-center mt-6  leading-tight">
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
          <button class="border border-gray-500 font-semibold px-10 py-3 rounded-md hover:bg-white/10 transition-colors">
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

    <!--about us page start-->
    <div id="aboutus" class="w-full border-b border-white/10 py-12">

      <!--site label-->
      <h2 class="about-animate text-sm md:text-left md:pl-4 text-center font-bold text-[#F3A122] tracking-widest uppercase">Csapatunkról</h2>
      <p class="about-animate text-2xl font-extrabold md:text-left md:pl-4 text-center mt-5 leading-tight">
        Akik mögötte
        <span class="bg-linear-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
          állnak
        </span>
      </p>
      
      <!--worker cards-->
      <div class="flex flex-row flex-wrap justify-center lg:justify-center gap-6 px-4 mt-20">
        <BaseCard v-for="data in worker" :name="data.name" :title="data.title" :description="data.description" :skills="data.skills"/>
      </div>

    </div>
    <!--about us page start-->

    <!--services page start-->
    <div id="services" class="w-full border-b border-white/10 py-12">

      <!--services label-->
      <h2 class="about-animate text-sm md:text-left md:pl-4 text-center font-bold text-[#F3A122] tracking-widest uppercase">Csapatunkról</h2>
      <p class="about-animate text-2xl font-extrabold md:text-left md:pl-4 text-center mt-5 leading-tight">
        Akik mögötte
        <span class="bg-linear-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
          állnak
        </span>
      </p>
      
      <!--services cards-->
      <div class="flex flex-row flex-wrap justify-center lg:justify-center gap-6 px-4 mt-20 pb-12">
        <BaseServiceCard v-for="data in services" :name="data.name" :description="data.description" :image="data.image"/>
      </div>

    </div>
    <!--services page start-->

  </BaseLayout>
</template>

<script setup>
import { reactive, ref, onMounted } from 'vue'
import BaseLayout from '@layouts/BaseLayout.vue'
import BaseCard from '@components/BaseCard.vue'
import BaseServiceCard from '@components/BaseServiceCard.vue'
import { useIntersectionObserver } from '@vueuse/core'
import gsap from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

gsap.registerPlugin(ScrollTrigger)

// worker json data
const worker = [
  {
    name: 'Deák Levente',
    title: 'Backend Engineer & API Specialist',
    description: 'A rendszerek motorjának építője; robusztus adatbázisokat és villámgyors interfészeket tervez a biztonság jegyében.',
    skills: ['PHP', 'Laravel', 'MySQL', 'Rest API']
  },
  {
    name: 'Szűcs Marcel',
    title: 'Full Stack Architect & UI Design',
    description: 'Az esztétika és a logika metszéspontján alkot: pixelpontos Figma terveket vált át tiszta, skálázható kódra.',
    skills: ['Figma', 'Vue.js', 'Tailwind CSS', 'Node.js']
  },
  {
    name: 'Barna Bence',
    title: 'QA Engineer & DevOps Strategist',
    description: 'A minőség megszállottja; automatizált tesztekkel és stabil szerverkörnyezettel garantálja a hibátlan működést.',
    skills: ['PHP unit', 'Cypress', 'CI/CD', 'Node.js']
  },
  {
    name: 'Horváth Gergő',
    title: 'Frontend Developer & Nuxt Expert',
    description: 'A felhasználói élmény felelőse, aki a Nuxt.js erejével hoz létre villámgyors és SEO-barát webes alkalmazásokat.',
    skills: ['Nuxt.js', 'Vue.js', 'TypeScript', 'Tailwind CSS']
  },
]

// services json data
const services = [
  {
    name: 'Tervezés',
    description: 'Egyedi, felhasználóbarát felületek tervezése egyeztetés szerint figmába.',
    image: 'design.png'
  },
  {
    name: 'Webfejlesztés',
    description: 'A jóváhagyott tervekből reszponzív, gyors és interaktív weboldalt építünk. A kód, ami életre kelti a designt.',
    image: 'web-programming.png'
  },
  {
    name: 'Backend',
    description: 'Egyedi adatbázisok, API-k fejlesztése, hogy a weboldalad pontosan azt tudja, amire szükséged van.',
    image: 'backend.png'
  },
  {
    name: 'SEO & Teljesítmény',
    description: 'SEO beállításokkal és a optimalizálással biztosítjuk, hogy weboldalad előkelő helyre kerüljön a Google találatok között.',
    image: 'seo.png'
  },
  {
    name: 'Landing page',
    description: 'Olyan landing page-et készítünk, ami hatékonyan alakítja a látogatókat ügyfelekké.',
    image: 'startup.png'
  },
  {
    name: 'Karbantartás',
    description: 'Gondoskodunk a biztonsági frissítésekről és a hibamentes működésről, hogy weboldalad mindig naprakész és gyors legyen.',
    image: 'settings.png'
  },
]

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
  // hero animate class AI
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
  // about animate class AI
  gsap.fromTo(".about-animate", 
    { 
      y: 50, 
      opacity: 0 
    }, 
    { 
      y: 0, 
      opacity: 1, 
      duration: 1, 
      stagger: 0.2, 
      ease: "power3.out",
      scrollTrigger: {
        trigger: "#aboutus", // when the about us section enters the viewport
        start: "top 80%",    // start the animation when the top of the section is 80% from the top of the viewport
        toggleActions: "play none none none" // only play the animation once
      }
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