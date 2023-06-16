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
    <Header
        :user-is-logged-in="userIsLoggedIn"
        class="fixed top-0 left-0 w-full"
    />
    <div class="pt-20 lg:pt-24 pb-14 lg:pb-24">
        <slot />
    </div>
    <Footer class="fixed bottom-0 left-0 w-full" />
</template>
