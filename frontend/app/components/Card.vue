<template>
  <div class="about-animate bg-[#17171C] w-full p-6 rounded-xl border border-[#858593]/20 
              transition-all duration-300 ease-out cursor-pointer group
              hover:border-[#F3A122] hover:shadow-[0_10px_40px_rgba(243,161,34,0.15)] 
              hover:-translate-y-2 flex flex-col h-full">
    
    <div class="flex items-start mb-4">
      <div class="bg-[#222226] p-4 rounded-lg flex items-center justify-center mr-5 shrink-0
                  transition-all duration-300 border border-white/5
                  group-hover:bg-[#F3A122] group-hover:scale-110">
        <svg 
          xmlns="http://www.w3.org/2000/svg" 
          width="24" 
          height="24" 
          viewBox="0 0 24 24" 
          fill="none" 
          stroke="#F3A122" 
          stroke-width="2" 
          stroke-linecap="round" 
          stroke-linejoin="round" 
          class="w-6 h-6 transition-colors duration-300 group-hover:stroke-[#17171C]"
        >
          <polyline points="16 18 22 12 16 6"></polyline>
          <polyline points="8 6 2 12 8 18"></polyline>
        </svg>
      </div>

      <div>
        <h3 class="text-xl font-bold text-white group-hover:text-[#F3A122] transition-colors duration-300">
          {{ name }}
        </h3>
        <p class="text-sm text-[#F3A122] font-medium opacity-90">{{ title }}</p>
      </div>
    </div>
    
    <p class="text-gray-400 leading-relaxed flex-grow group-hover:text-gray-300 transition-colors">
      {{ description }}
    </p>
    
    <div class="flex flex-wrap mt-6 gap-2">
      <span 
        v-for="skill in skills" 
        :key="skill" 
        class="bg-[#222226] text-gray-300 px-3 py-1 rounded-md text-xs font-medium border border-white/5
               transition-all duration-300 group-hover:bg-[#2a2a30] group-hover:text-white"
      >
        {{ skill }}
      </span>
    </div>

  </div>
</template>

<script>
export default {
  props: {
    name: { type: String, required: true },
    title: { type: String, required: true },
    description: { type: String, required: true },
    skills: { type: Array, required: true }
  }
}
</script>