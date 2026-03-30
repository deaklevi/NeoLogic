<template>
    <div class="about-animate bg-[#17171C] w-lg p-6 rounded-md border border-[#858593] transition-all duration-300 hover:border-[#F3A122] hover:shadow-[0_0_20px_rgba(243,161,34,0.4)] hover:-translate-y-1 cursor-pointer">
        
        <div class="flex">
            <div class="bg-[#222226] p-4 rounded-lg flex items-center justify-center mb-4 mr-5">
                <img src="../assets/script.png" alt="" class="w-6 h-6 object-contain">
            </div>
            <div>
                <h3 class="text-xl font-bold text-white">{{ name }}</h3>
                <p class="text-sm text-[#F3A122]">{{ title }}</p>
            </div>
        </div>
        
        <p class="text-gray-400 leading-relaxed">{{ description }}</p>
        
        <div class="flex flex-wrap mt-5 gap-3">
            <p v-for="skill in skills" :key="skill" class="bg-[#222226] text-gray-300 px-3 py-1 rounded-md text-sm">
                {{ skill }}
            </p>
        </div>

    </div>
</template>

<script>
export default {
    props: {
        name: {
            type: String,
            required: true
        },
        title: {
            type: String,
            required: true
        },
        description: {
            type: String,
            required: true
        },
        skills: {
            type: Array,
            required: true
        }
    }
}
</script>