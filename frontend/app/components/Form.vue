<template>
  <div class="lg:mx-6 mx-auto max-w-lg w-full px-4">
    <form @submit.prevent="handleSubmit" 
          class="about-animate bg-[#17171C] p-8 max-[800px]:p-5 rounded-xl flex flex-col gap-6 text-white shadow-2xl border border-white/5 transition-all">
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="flex flex-col gap-2">
          <label for="name" class="text-sm font-medium text-gray-400">Név</label>
          <input v-model="form.name" type="text" id="name" placeholder="Teljes név" required
            class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-[#F3A122] focus:ring-1 focus:ring-[#F3A122] transition-all duration-200">
        </div>

        <div class="flex flex-col gap-2">
          <label for="email" class="text-sm font-medium text-gray-400">Email</label>
          <input v-model="form.email" type="email" id="email" placeholder="email@pelda.com" required
            class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-[#F3A122] focus:ring-1 focus:ring-[#F3A122] transition-all duration-200">
        </div>
      </div>

      <div class="flex flex-col gap-2">
        <label for="company" class="text-sm font-medium text-gray-400">Cég <span class="text-xs opacity-50">(opcionális)</span></label>
        <input v-model="form.company" type="text" id="company" placeholder="Cégnév" 
          class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-[#F3A122] focus:ring-1 focus:ring-[#F3A122] transition-all duration-200">
      </div>

      <div class="flex flex-col gap-2">
        <label for="message" class="text-sm font-medium text-gray-400">Üzenet</label>
        <textarea v-model="form.message" id="message" rows="4" required
          class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-[#F3A122] focus:ring-1 focus:ring-[#F3A122] transition-all duration-200 resize-none"
          placeholder="Miben segíthetünk?"></textarea>
      </div>

      <button type="submit" :disabled="loading"
        class="bg-gradient-to-r from-[#F3A122] to-[#EC7C14] text-black font-bold py-3 px-6 rounded-lg transition-all duration-300 flex items-center justify-center gap-3 group active:scale-[0.96] disabled:opacity-50 disabled:cursor-not-allowed shadow-lg hover:shadow-[#F3A122]/20">
        <span v-if="!loading">{{ feedback.type === 'success' ? 'Elküldve!' : 'Üzenet küldése' }}</span>
        <span v-else>Küldés...</span>
        
        <svg v-if="!loading" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">
          <line x1="22" y1="2" x2="11" y2="13"></line>
          <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
        </svg>

        <svg v-else class="animate-spin h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
      </button>

      <Transition name="fade">
        <div v-if="feedback.message" 
          :class="feedback.type === 'success' ? 'bg-green-500/10 border-green-500/30 text-green-400' : 'bg-red-500/10 border-red-500/30 text-red-400'"
          class="p-4 rounded-lg border text-sm flex items-center gap-3 backdrop-blur-sm">
          <svg v-if="feedback.type === 'success'" class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          <svg v-else class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
          {{ feedback.message }}
        </div>
      </Transition>
    </form>
  </div>
</template>

<script setup>
// A Nuxt 3 automatikusan importálja a ref, reactive, useRuntimeConfig függvényeket!
const config = useRuntimeConfig();

// Form adatok állapota
const form = reactive({
  name: '',
  email: '',
  company: '',
  message: ''
})

const loading = ref(false)
const feedback = reactive({
  type: null, 
  message: null
})

// Üzenet küldése
const handleSubmit = async () => {
  loading.value = true
  feedback.message = null
  feedback.type = null
  
  try {
    // Nuxt 3-ban ajánlott a beépített $fetch használata az axios/http segédfájlok helyett
    // De ha ragaszkodsz a saját @utils/http.mjs-edhez, az is maradhat.
    // Itt most a modernebb $fetch-re mutatok példát:
    const response = await $fetch(`${config.public.apiBase}/api/contact-send`, {
      method: 'POST',
      body: form
    })
    
    // Feltételezve, hogy a backend success: true-val tér vissza
    if (response.success) {
      feedback.type = 'success'
      feedback.message = "Köszönjük! Az üzenetet sikeresen elküldtük."
      
      // Form ürítése
      Object.assign(form, { name: '', email: '', company: '', message: '' })
    }
  } catch (err) {
    feedback.type = 'error'
    feedback.message = "Hoppá! Hiba történt a küldés során."
    console.error('Küldési hiba:', err)
  } finally {
    loading.value = false
    
    // 5 másodperc után tüntessük el a visszajelzést
    setTimeout(() => { feedback.message = null }, 5000)
  }
}
</script>