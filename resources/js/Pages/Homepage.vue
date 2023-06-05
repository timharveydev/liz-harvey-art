<script setup>
import { Head } from '@inertiajs/vue3';

defineProps({
    text: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Home" />

    <h1>{{ text }}</h1>
</template>

<style scoped>

</style>
