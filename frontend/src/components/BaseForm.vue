<template>
    <form action="" class="bg-[#17171C] p-8 rounded-xl flex flex-col gap-6 text-white max-w-lg shadow-2xl border border-white/5">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="flex flex-col gap-2">
            <label for="name" class="text-sm font-medium text-gray-400">Név</label>
            <input type="text" id="name" placeholder="Kovács János" 
                class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-blue-500 transition-all duration-200">
        </div>

        <div class="flex flex-col gap-2">
            <label for="email" class="text-sm font-medium text-gray-400">Email</label>
            <input type="email" id="email" placeholder="janos@pelda.hu" 
                class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-blue-500 transition-all duration-200">
        </div>
    </div>

    <div class="flex flex-col gap-2">
        <label for="company" class="text-sm font-medium text-gray-400">Cég <span class="text-xs opacity-50">(opcionális)</span></label>
        <input type="text" id="company"  placeholder="Cégnév Kft." 
            class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-blue-500 transition-all duration-200">
    </div>

    <div class="flex flex-col gap-2">
        <label for="message" class="text-sm font-medium text-gray-400">Üzenet</label>
        <textarea id="message" rows="4" 
            class="bg-[#222226] border border-white/10 rounded-lg px-4 py-2.5 outline-none focus:border-blue-500 transition-all duration-200 resize-none"
            placeholder="Miben segíthetek? Meséld el, milyen projekten dolgozol..."></textarea>
    </div>

    <button type="submit" 
        class="bg-linear-to-r from-[#F3A122] to-[#EC7C14] text-black font-semibold py-3 px-6 rounded-lg transition-all duration-300 flex items-center justify-center gap-3 group active:scale-[0.98]">
        <p>Üzenet küldése</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform">
            <line x1="22" y1="2" x2="11" y2="13"></line>
            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
        </svg>
    </button>
</form>
</template>

<script>

</script>