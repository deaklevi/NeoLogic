<template>
  <div class="lg:mx-6 mx-auto max-w-lg max-[800px]:w-[90%]">
    <form @submit.prevent="handleSubmit" class="about-animate bg-[#17171C] p-8 max-[800px]:p-5 rounded-xl flex flex-col gap-6 text-white shadow-2xl border border-white/5">
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="flex flex-col gap-2">
          <label for="name" class="text-sm font-medium text-gray-400">Név</label>
          <input v-model="form.name" type="text" id="name" placeholder="Kovács János" required
            class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-[#F3A122] transition-all duration-200">
        </div>

        <div class="flex flex-col gap-2">
          <label for="email" class="text-sm font-medium text-gray-400">Email</label>
          <input v-model="form.email" type="email" id="email" placeholder="janos@pelda.hu" required
            class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-[#F3A122] transition-all duration-200">
        </div>
      </div>

      <div class="flex flex-col gap-2">
        <label for="company" class="text-sm font-medium text-gray-400">Cég <span class="text-xs opacity-50">(opcionális)</span></label>
        <input v-model="form.company" type="text" id="company" placeholder="Cégnév Kft." 
          class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-[#F3A122] transition-all duration-200">
      </div>

      <div class="flex flex-col gap-2">
        <label for="message" class="text-sm font-medium text-gray-400">Üzenet</label>
        <textarea v-model="form.message" id="message" rows="4" required
          class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-[#F3A122] transition-all duration-200 resize-none"
          placeholder="Miben segíthetek?"></textarea>
      </div>

      <button type="submit" :disabled="loading"
        class="bg-linear-to-r from-[#F3A122] to-[#EC7C14] text-black font-semibold py-3 px-6 rounded-lg transition-all duration-300 flex items-center justify-center gap-3 group active:scale-[0.98] disabled:opacity-50 disabled:cursor-not-allowed">
        <p v-if="!loading">Üzenet küldése</p>
        <p v-else>Küldés folyamatban...</p>
        <svg v-if="!loading" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform">
          <line x1="22" y1="2" x2="11" y2="13"></line>
          <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
        </svg>
      </button>

      <Transition name="fade">
        <div v-if="feedback.message" 
          :class="feedback.type === 'success' ? 'bg-green-500/10 border-green-500/50 text-green-400' : 'bg-red-500/10 border-red-500/50 text-red-400'"
          class="p-4 rounded-lg border text-sm flex items-center gap-3">
          
          <svg v-if="feedback.type === 'success'" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          
          <svg v-else xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
          
          {{ feedback.message }}
        </div>
      </Transition>

    </form>
  </div>
</template>

<script setup>
import { reactive, ref } from 'vue'
import { http } from '@utils/http.mjs'

const form = reactive({
  name: '',
  email: '',
  company: '',
  message: ''
})

const loading = ref(false)
const feedback = reactive({
  type: null, // 'success' vagy 'error'
  message: null
})

const handleSubmit = async () => {
  loading.value = true
  feedback.message = null
  feedback.type = null
  
  try {
    const response = await http.post('/contact-send', form)
    
    if (response.data.success) {
      feedback.type = 'success'
      feedback.message = "Köszönjük! Az üzenetet sikeresen elküldtük."
      
      // Form ürítése siker esetén
      form.name = ''
      form.email = ''
      form.company = ''
      form.message = ''
    }
  } catch (err) {
    feedback.type = 'error'
    feedback.message = "Hoppá! Hiba történt a küldés során. Kérjük, próbáld újra!"
    console.error(err)
  } finally {
    loading.value = false
  }
}
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>