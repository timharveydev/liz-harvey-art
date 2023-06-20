<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({
    text: {
        type: String,
        required: true,
    }
});
</script>

<template>
    <Head title="Home" />

    <MainLayout>
        <h1>{{ text }}</h1>
    </MainLayout>
</template>
