<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({
    text: {
        type: String,
        required: true,
    },
    userIsLoggedIn: {
        type: Boolean,
        required: true,
    }
});
</script>

<template>
    <Head title="Home" />

    <MainLayout :user-is-logged-in="userIsLoggedIn">
        <h1>{{ text }}</h1>
    </MainLayout>
</template>
