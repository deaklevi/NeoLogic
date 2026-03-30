<template>
  <header 
    :class="isDark ? 'bg-[#101013]/50 text-white' : 'bg-[#F5F5F5]/50 text-black'" 
    class="w-full fixed top-0 left-0 z-50 backdrop-blur-md border-b border-white/5 transition-colors duration-300"
  >
    <nav class="flex justify-between items-center p-4 max-w-7xl mx-auto">
      <h1 class="text-2xl font-bold">
        <span class="text-[#F3A122]">Neo</span>Logic
      </h1>
      
      <ul class="hidden md:flex justify-between items-center gap-8" :class="isDark ? 'text-gray-400' : 'text-gray-600'">
        <li><a href="#" class="hover:text-[#F3A122] transition-colors">Rólunk</a></li>
        <li><a href="#" class="hover:text-[#F3A122] transition-colors">Szolgáltatások</a></li>
        <li><a href="#" class="hover:text-[#F3A122] transition-colors">Folyamat</a></li>
        <li><a href="#" class="hover:text-[#F3A122] transition-colors">Kapcsolat</a></li>
      </ul>

      <div class="flex justify-center items-center gap-4">
        
        <ClientOnly>
          <button 
            @click="toggleMode" 
            class="p-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 transition-colors"
            aria-label="Theme toggle"
          >
            <svg v-if="isDark" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F3A122" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg>
            
            <svg v-else xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#EC7C14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="5"></circle>
              <line x1="12" y1="1" x2="12" y2="3"></line>
              <line x1="12" y1="21" x2="12" y2="23"></line>
              <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
              <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
              <line x1="1" y1="12" x2="3" y2="12"></line>
              <line x1="21" y1="12" x2="23" y2="12"></line>
              <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
              <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </svg>
          </button>
          
          <template #fallback>
            <div class="w-10 h-10"></div>
          </template>
        </ClientOnly>
        
        <NuxtLink 
          to="#availability" 
          class="bg-[#F3A122] text-black px-6 py-2 rounded-md font-semibold hover:bg-[#ec7c14] transition-all active:scale-95"
        >
          Ajánlatkérés
        </NuxtLink>
      </div>
    </nav>
  </header>
</template>

<script setup>
import { ref, onMounted } from 'vue'

// Alapértelmezetten false (világos mód)
const isDark = ref(false)

onMounted(() => {
  // Opcionális: Rendszerbeállítás figyelembe vétele
  // if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
  //   isDark.value = true
  // }
  
  updateBodyStyles()
})

const toggleMode = () => {
  isDark.value = !isDark.value
  updateBodyStyles()
}

const updateBodyStyles = () => {
  if (process.client) {
    const bgColor = isDark.value ? "#101013" : "#F5F5F5"
    const textColor = isDark.value ? "#ffffff" : "#000000"
    
    document.documentElement.style.backgroundColor = bgColor
    document.documentElement.style.color = textColor
    
    // Tailwind sötét mód osztály hozzáadása/eltávolítása (ha használsz class-based dark módot)
    if (isDark.value) {
      document.documentElement.classList.add('dark')
    } else {
      document.documentElement.classList.remove('dark')
    }
  }
}
</script>