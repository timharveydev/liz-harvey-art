<script setup>
import Header from "@/Layouts/Header.vue";
import Footer from "@/Layouts/Footer.vue";

</script>

<template>
    <Header />
    <div class="pt-16 lg:pt-24 pb-10 lg:pb-16">
        <slot />
    </div>
    <Footer />
</template>
