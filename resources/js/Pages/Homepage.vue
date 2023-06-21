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
        <span v-if="byline">{{ byline }}</span>
        <h1>{{ pageHeading }}</h1>
    </MainLayout>
</template>
