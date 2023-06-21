<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({
    bgImage: {
        type: String,
        required: true
    },
    byline: {
        type: String,
        required: false
    },
    pageHeading: {
        type: String,
        required: true
    }
});
</script>

<template>
    <Head title="Home" />

    <MainLayout :bg-image="bgImage" :bg-brightness="75">
        <div class="h-full flex flex-col justify-center items-center text-center">
            <span v-if="byline" class="text-xl sm:text-2xl mb-2">{{ byline }}</span>
            <h1 class="font-serif text-6xl sm:text-7xl lg:text-8xl mb-8">{{ pageHeading }}</h1>
        </div>
    </MainLayout>
</template>
