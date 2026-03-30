<template>
  <div class="about-animate bg-[#17171C] w-full p-8 rounded-xl border border-[#858593]/20 
              transition-all duration-300 ease-out
              hover:border-[#F3A122] hover:shadow-[0_10px_40px_rgba(243,161,34,0.15)] 
              hover:-translate-y-2 cursor-pointer group flex flex-col h-full">
      
      <div class="flex items-center mb-6">
          <div class="bg-[#222226] p-4 rounded-lg flex items-center justify-center mr-5 shrink-0 
                      border border-white/5 transition-all duration-300
                      group-hover:bg-[#F3A122] group-hover:scale-110">
              <img 
                :src="'/' + image" 
                alt="service icon" 
                class="w-7 h-7 object-contain transition-all duration-300 group-hover:brightness-0"
              >
          </div>
          
          <h3 class="text-xl font-bold text-white leading-tight group-hover:text-[#F3A122] transition-colors">
            {{ name }}
          </h3>
      </div>
      
      <p class="text-gray-400 leading-relaxed flex-grow group-hover:text-gray-300 transition-colors">
        {{ description }}
      </p>

      <div class="mt-6 w-8 h-1 bg-[#F3A122] rounded-full opacity-30 
                  transition-all duration-500 group-hover:w-16 group-hover:opacity-100">
      </div>
  </div>
</template>

<script>
export default {
    props: {
        name: { type: String, required: true },
        description: { type: String, required: true },
        image: { type: String, required: true }
    }
}
</script>