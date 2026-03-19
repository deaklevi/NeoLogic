<template>
  <header :class="isDark ? 'bg-[#101013]/50 text-white' : 'bg-[#F5F5F5]/50 text-black'" class="w-full fixed top-0 left-0 z-50 backdrop-blur-md border-b border-white/5">
    <nav class="flex justify-between items-center p-4 max-w-7xl mx-auto">
      <h1 class="text-2xl font-bold">
        <span class="text-[#F3A122]">Neo</span>Logic
      </h1>
      
      <ul class="hidden md:flex justify-between items-center gap-8" :class="isDark ? 'text-gray-400' : 'text-gray-600'">
        <li><a href="#aboutus">Rólunk</a></li>
        <li><a href="#services">Szolgáltatások</a></li>
        <li><a href="#process">Folyamat</a></li>
        <li><a href="#availability">Kapcsolat</a></li>
      </ul>

      <div class="flex justify-center items-center gap-4">
        
        <img 
          v-if="isDark" 
          src="../../assets/lightbulbwhite.png" 
          class="w-6 h-6 cursor-pointer" 
          @click="toggleMode"
        />
        
        <img 
          v-else 
          src="../../assets/lightbulbblack.png" 
          class="w-6 h-6 cursor-pointer" 
          @click="toggleMode"
        />
        
        <button type="button" class="bg-[#F3A122] text-black font-semibold px-6 py-2 rounded-md">
          Ajánlatkérés
        </button>
      </div>
    </nav>
  </header>
</template>

<script setup>
import { ref } from 'vue'

// this is a simple dark/light mode toggle implementation.
const isDark = ref(true)

const toggleMode = () => {
  isDark.value = !isDark.value // toggle the mode

  if (isDark.value) {
    // SÖTÉT MÓD
    document.documentElement.style.backgroundColor = "#101013";
    document.documentElement.style.color = "#ffffff";
  } else {
    // VILÁGOS MÓD
    document.documentElement.style.backgroundColor = "#F5F5F5";
    document.documentElement.style.color = "#000000";
  }
}
</script>