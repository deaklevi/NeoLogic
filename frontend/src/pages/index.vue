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
          A Neologic csapata modern és konverzióra fókuszált weboldalakkal segíti vállalkozása növekedését. A letisztult bemutatkozó oldalaktól a komplex rendszerekig – mi életre keltjük elképzeléseit.
        </p>
    
        <!--buttons-->
        <div class="hero-animate flex flex-col sm:flex-row justify-center gap-4 mt-10 px-5 w-full sm:w-auto">
          <a href="#availability" class="bg-linear-to-r from-[#F3A122] to-[#EC7C14] text-black px-10 py-3 rounded-md hover:scale-105 transition-transform shadow-lg shadow-orange-500/20">
            <button class="font-bold w-full h-full items-center justify-center flex">
              Ajánlatkérés
            </button>
          </a>
          <a href="#aboutus" class="border border-gray-500 px-10 py-3 rounded-md hover:bg-white/10 transition-colors">
            <button class="font-semibold w-full h-full items-center justify-center flex">
              Ismerjetek meg minket
            </button>
          </a>
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
    <!--about us page end-->

    <!--services page start-->
    <div id="services" class="w-full border-b border-white/10 py-12">

      <!--services label-->
      <h2 class="about-animate text-sm md:text-left md:pl-4 text-center font-bold text-[#F3A122] tracking-widest uppercase">Szolgáltatásaink</h2>
      <p class="about-animate text-2xl font-extrabold md:text-left md:pl-4 text-center mt-5 leading-tight">
        Amiben
        <span class="bg-linear-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
          segítünk
        </span>
      </p>
      
      <p class="about-animate text-gray-400 md:text-left md:pl-4 text-center mt-5 leading-tight max ">
        Teljes körű digitális szolgáltatások a koncepciótól az üzemeltetésig.
      </p>
      
      <!--services cards-->
      <div class="flex flex-row flex-wrap justify-center lg:justify-center gap-6 px-4 mt-20 pb-12">
        <BaseServiceCard v-for="data in services" :name="data.name" :description="data.description" :image="data.image"/>
      </div>

    </div>
    <!--services page end-->

    <!--process page start-->
    <div id="process" class="w-full border-b border-white/10 py-12">

      <!--process label-->
      <h2 class="about-animate text-sm text-center font-bold text-[#F3A122] tracking-widest uppercase mx-6">Folyamat</h2>
      <p class="about-animate text-2xl font-extrabold  text-center mt-5 leading-tight mx-6">
        Folyamatunk: Az ötlettől a
        <span class="bg-linear-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
          stabil rendszerig
        </span>
      </p>

      <p class="about-animate text-gray-400 text-center mt-5 leading-tight mx-6 ">
        Nem csak weboldalakat építünk, hanem átlátható, mérnöki precizitással kidolgozott digitális megoldásokat.
      </p>

      <BaseProcessTimeLine  class="mt-10"/>

    </div>
    <!--process page end-->

    <!--availability page start-->
    <div id="availability" class="w-full py-12">

      <!--availability label-->
      <h2 class="about-animate text-sm md:text-left md:pl-4 text-center font-bold text-[#F3A122] tracking-widest uppercase">Kapcsolat</h2>
      
      <p class="about-animate text-2xl font-extrabold md:text-left md:pl-4 text-center mt-5 leading-tight">
        Beszéljünk az 
        <span class="bg-linear-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
        ötletedről
        </span>
      </p>

      <div class="flex lg:flex-row flex-col justify-between">
        <div>
          <p class="about-animate text-gray-400 md:text-left md:pl-4 text-center mt-5 leading-tight max ">
            Írd meg, miben segíthetünk — 24 órán belül válaszolunk.
          </p>

          <BaseAvailabilityDatas class="mt-10"/>
        </div>

        <BaseForm/>
      </div>
    </div>
    <!--availability page end-->

  </BaseLayout>
</template>

<script setup>
import { reactive, ref, onMounted } from 'vue'

import { useIntersectionObserver } from '@vueuse/core'
import gsap from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

// components
import BaseLayout from '@layouts/BaseLayout.vue'
import BaseCard from '@components/BaseCard.vue'
import BaseServiceCard from '@components/BaseServiceCard.vue'
import BaseProcessTimeLine from '@components/BaseProcessTimeLine.vue'
import BaseAvailabilityDatas from '@components/BaseAvailabilityDatas.vue'
import BaseForm from '@components/BaseForm.vue'

gsap.registerPlugin(ScrollTrigger)

// worker json data
const worker = [
  {
    name: 'Deák Levente',
    title: 'Backend Engineer & API Specialist',
    description: 'A rendszerek motorjának építője. Robusztus architektúrákat és villámgyors interfészeket épít a biztonság jegyében.',
    skills: ['PHP', 'Laravel', 'MySQL', 'Rest API']
  },
  {
    name: 'Szűcs Marcell',
    title: 'Full Stack Architect & UI Design',
    description: 'Az esztétika és a logika metszéspontján alkot: pixelpontos látványterveket vált át tiszta, skálázható kódra.',
    skills: ['Figma', 'Vue.js', 'Tailwind CSS', 'Node.js']
  },
  {
    name: 'Barna Bence',
    title: 'QA Engineer & DevOps Strategist',
    description: 'precizitás nagykövete. Automatizált tesztekkel és optimalizált CI/CD folyamatokkal garantálja a hibátlan működést.',
    skills: ['PHPUnit', 'Cypress', 'CI/CD', 'Node.js']
  },
  {
    name: 'Horváth Gergő',
    title: 'Frontend Developer & Nuxt Expert',
    description: 'A felhasználói élmény felelőse, aki a Nuxt.js erejével hoz létre villámgyors és keresőoptimalizált alkalmazásokat.',
    skills: ['Nuxt.js', 'Vue.js', 'TypeScript', 'Tailwind CSS']
  },
]

// services json data
const services = [
  {
    name: 'Tervezés',
    description: 'Egyedi, felhasználóbarát felületek tervezése egyeztetés szerint Figmába alapokon.',
    image: 'design.png'
  },
  {
    name: 'Webfejlesztés',
    description: 'A jóváhagyott tervekből reszponzív, gyors és interaktív weboldalt építünk. A kód, ami életre kelti a designt.',
    image: 'web-programming.png'
  },
  {
    name: 'Backend',
    description: 'Egyedi adatbázisok, a háttérrendszerek stabilitása és az egyedi funkciók motorja.',
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
    { y: 30, opacity: 0 }, 
    { y: 0, opacity: 1, duration: 1, stagger: 0.2, ease: "power3.out" }
  );

  ScrollTrigger.create({
    trigger: statsSection.value,
    start: "top 85%", // when the top of the section hits 85% of the viewport height
    onEnter: () => {
      statsData.forEach((stat) => {
        gsap.to(stat, {
          displayValue: stat.target,
          duration: 2,
          ease: "power2.out",
        })
      });
    },
    once: true // just trigger once when it enters the viewport
  });

  const sections = ['#aboutus', '#services', '#process', '#availability'];

  // about animate class AI
  sections.forEach(section => {
    gsap.fromTo(`${section} .about-animate`, 
      { y: 40, opacity: 0 }, 
      { 
        y: 0, 
        opacity: 1, 
        duration: 0.8, 
        stagger: 0.15, 
        ease: "power2.out",
        scrollTrigger: {
          trigger: section,
          start: "top 75%", // like the hero animation but a bit earlier
          toggleActions: "play none none none"
        }
      }
    );
  });

  ScrollTrigger.refresh();

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
.hero-animate, .about-animate, .stat-item {
  opacity: 0;
  will-change: transform, opacity;
}

/* A little extra refinement to the fonts AI */
span {
  font-variant-numeric: tabular-nums; /* Prevents numbers from jumping during spins AI*/
}
</style>