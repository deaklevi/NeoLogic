<template>
    <div class="about-animate bg-[#17171C] w-sm p-6 rounded-md border border-[#858593] transition-all duration-300 hover:border-[#F3A122] hover:shadow-[0_0_20px_rgba(243,161,34,0.4)] hover:-translate-y-1 cursor-pointer">
        
        <div class="flex">
            <div class="bg-[#222226] p-4 rounded-lg flex items-center justify-center mb-4 mr-5">
                <img :src="'/' + image" alt="service image" class="w-6 h-6 object-contain">
            </div>
            <div>
                <h3 class="text-xl font-bold text-white">{{ name }}</h3>
            </div>
        </div>
        
        <p class="text-gray-400 leading-relaxed">{{ description }}</p>

    </div>
</template>

<script>
export default {
    props: {
        name: {
            type: String,
            required: true
        },
        description: {
            type: String,
            required: true
        },
        image: {
            type: String,
            required: true
        },
    }
}
</script>