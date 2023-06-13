<script setup>
import Header from "@/Layouts/Header.vue";

defineProps({
    userIsLoggedIn: {
        type: Boolean,
        required: true,
    }
})
</script>

<template>
    <Header :user-is-logged-in="userIsLoggedIn"/>
    <slot />
</template>
