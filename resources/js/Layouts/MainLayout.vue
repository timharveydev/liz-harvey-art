<script setup>
import Header from "@/Layouts/Header.vue";
import Footer from "@/Layouts/Footer.vue";

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
    <Footer />
</template>
