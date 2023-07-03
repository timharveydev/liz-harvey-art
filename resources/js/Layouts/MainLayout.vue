<script setup>
import Header from "@/Layouts/Header.vue";
import Footer from "@/Layouts/Footer.vue";

defineProps({
    bgImage: {
        type: String,
        required: true
    },
    bgBrightness: {
        type: Number,
        required: false,
        default: .5
    }
});

</script>

<template>
    <Header />

    <div
        class="text-white w-full h-screen bg-center bg-cover"
        :style="`background-image: url('/storage/uploads/${bgImage}')`"
    >
        <div
            class="w-full h-full py-16 lg:py-24 px-6 lg:px-12 overflow-y-auto"
            :style="`backdrop-filter: brightness(${bgBrightness})`"
        >
            <slot />
        </div>
    </div>

    <Footer />
</template>
