<template>
  <LayoutsBaseLayout>
    <!--landing page start-->
    <div class="w-full min-h-screen relative overflow-hidden flex flex-col items-center justify-center py-28"> 
      <div class="absolute w-96 h-96 bg-[#F3A122] rounded-full blur-[120px] opacity-20 z-0 pointer-events-none"></div>

      <div class="relative z-10 w-full flex flex-col items-center sm:mt-0 mt-10">
        <h2 class="hero-animate text-sm font-bold text-center text-[#F3A122] tracking-widest uppercase">
          Dizájn & Fejlesztés
        </h2>

        <p class="hero-animate mx-5 lg:mx-40 text-4xl lg:text-7xl font-extrabold text-center mt-6 leading-tight">
          Digitális lábnyom, 
          <span class="bg-gradient-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
            maradandó
          </span> 
          érték.
        </p>

        <p class="text-gray-400 p-5 text-center mt-6 max-w-2xl mx-auto text-lg hero-animate">
          A Neologic csapata modern és konverzióra fókuszált weboldalakkal segíti vállalkozása növekedését.
        </p>
        
        <div class="hero-animate flex flex-col sm:flex-row justify-center gap-4 mt-10 px-5 w-full sm:w-auto">
          <NuxtLink to="#availability" class="bg-gradient-to-r from-[#F3A122] to-[#EC7C14] text-black px-10 py-3 rounded-md font-bold text-center">
            Ajánlatkérés
          </NuxtLink>
          <NuxtLink to="#aboutus" class="border border-gray-500 px-10 py-3 rounded-md font-semibold text-center hover:bg-white/10">
            Ismerjetek meg minket
          </NuxtLink>
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
    <div id="aboutus" class="w-full border-b border-white/10 py-24 px-6 md:px-12 poppins-medium">
  
      <div class="max-w-6xl mx-auto">
        <div class="mb-16 text-center md:text-left">
          <h2 class="about-animate text-sm font-bold text-[#F3A122] tracking-widest uppercase">
            Csapatunkról
          </h2>
          <p class="about-animate text-3xl md:text-5xl font-extrabold mt-4 leading-tight">
            Akik a projektek mögött
            <span class="bg-gradient-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
              állnak
            </span>
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-items-center md:justify-items-stretch">
          <Card 
            v-for="data in worker" 
            :key="data.name"
            :name="data.name" 
            :title="data.title" 
            :description="data.description" 
            :skills="data.skills"
            class="w-full max-w-xl" 
          />
        </div>
      </div>

    </div>
    <!--about us page end-->

    <!--services page start-->
    <div id="services" class="w-full border-b border-white/10 py-24 px-6 md:px-12 poppins-medium">
  
      <div class="max-w-7xl mx-auto">
        <div class="mb-16">
          <h2 class="about-animate text-sm font-bold text-[#F3A122] tracking-widest uppercase text-center md:text-left">
            Szolgáltatásaink
          </h2>
          <p class="about-animate text-3xl md:text-5xl font-extrabold mt-4 leading-tight text-center md:text-left">
            Amiben 
            <span class="bg-gradient-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
              segítünk
            </span>
          </p>
          <p class="about-animate text-gray-400 mt-6 max-w-2xl text-center md:text-left">
            Teljes körű digitális szolgáltatások a koncepciótól az üzemeltetésig. Minden projektet egyedi igényekre szabunk.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <ServiceCard 
            v-for="data in services" 
            :key="data.name" 
            :name="data.name" 
            :description="data.description" 
            :image="data.image"
          />
        </div>
      </div>
    </div>
    <!--services page end-->

    <!--process page start-->
    <div id="process" class="w-full border-b border-white/10 py-24 poppins-medium bg-black/5">

      <div class="max-w-4xl mx-auto px-6">
        <h2 class="about-animate text-sm text-center font-bold text-[#F3A122] tracking-widest uppercase">
          Folyamat
        </h2>
        <p class="about-animate text-3xl md:text-5xl font-extrabold text-center mt-5 leading-tight">
          Az ötlettől a
          <span class="bg-gradient-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
            stabil rendszerig
          </span>
        </p>

        <p class="about-animate text-gray-400 text-center mt-6 max-w-2xl mx-auto text-lg">
          Nem csak weboldalakat építünk, hanem átlátható, mérnöki precizitással kidolgozott digitális megoldásokat.
        </p>

        <ProcessTimeLine class="mt-20"/>
      </div>

    </div>
    <!--process page end-->

    <!--availability page start-->
    <div id="availability" class="w-full py-12 .poppins-medium ">

      <!--availability label-->
      <h2 class="about-animate text-sm md:text-left md:pl-4 text-center font-bold text-[#F3A122] tracking-widest uppercase .">Kapcsolat</h2>
      
      <p class="about-animate text-2xl font-extrabold md:text-left md:pl-4 text-center mt-5 leading-tight">
        Beszéljünk az 
        <span class="bg-linear-to-r bg-clip-text text-transparent from-[#F3A122] to-[#EC7C14]">
        ötletedről
        </span>
      </p>

      <div class="flex lg:flex-row flex-col justify-between poppins-medium ">
        <div>
          <p class="about-animate text-gray-400 md:text-left md:pl-4 text-center mt-5 leading-tight max ">
            Írd meg, miben segíthetünk — 24 órán belül válaszolunk.
          </p>

          <AvailabilityDatas class="mt-10"/>
        </div>

        <Form/>
      </div>
    </div>
    <!--availability page end-->

  </LayoutsBaseLayout>
</template>

<script setup>
import { reactive, ref, onMounted, nextTick } from 'vue'
import { useIntersectionObserver } from '@vueuse/core'
import gsap from 'gsap'

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

// Statisztikai adatok
const statsData = reactive([
  { label: 'Csapattag', target: 4, displayValue: 0, suffix: '' },
  { label: 'Projekt', target: 50, displayValue: 0, suffix: '+' },
  { label: 'Év tapasztalat', target: 4, displayValue: 0, suffix: '+' },
  { label: 'Elégedett ügyfél', target: 100, displayValue: 0, suffix: '%' },
])

const statsSection = ref(null)
const hasAnimated = ref(false)

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

onMounted(async () => {
  // Megvárjuk, amíg a DOM teljesen felépül
  await nextTick()

  // Csak kliens oldalon futtatjuk a GSAP-et
  if (process.client) {
    const { ScrollTrigger } = await import('gsap/ScrollTrigger')
    gsap.registerPlugin(ScrollTrigger)

    // Hero animáció
    gsap.fromTo(".hero-animate", 
      { y: 30, opacity: 0 }, 
      { y: 0, opacity: 1, duration: 1, stagger: 0.2, ease: "power3.out" }
    )

    // Számláló ScrollTrigger
    if (statsSection.value) {
      ScrollTrigger.create({
        trigger: statsSection.value,
        start: "top 85%",
        onEnter: startCounting,
        once: true
      })
    }

    // Szekciók animációja (CSAK ha léteznek)
    const sections = ['#aboutus', '#services', '#process', '#availability']
    sections.forEach(id => {
      const el = document.querySelector(id)
      if (el) {
        gsap.fromTo(`${id} .about-animate`, 
          { y: 40, opacity: 0 }, 
          { 
            y: 0, opacity: 1, duration: 0.8, stagger: 0.15,
            scrollTrigger: {
              trigger: id,
              start: "top 75%",
              toggleActions: "play none none none"
            }
          }
        )
      }
    })
  }
})

// Observer biztonsági mentésként
useIntersectionObserver(statsSection, ([{ isIntersecting }]) => {
  if (isIntersecting) startCounting()
}, { threshold: 0.5 })
</script>

<style scoped>
.hero-animate, .about-animate {
  opacity: 0;
}
</style>