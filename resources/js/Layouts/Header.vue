<script setup>
import { Link } from "@inertiajs/vue3";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import AccountIcon from "@/Components/AccountIcon.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";

defineProps({
    userIsLoggedIn: {
        type: Boolean,
        required: true,
    }
})
</script>

<template>
    <header class="bg-gray-900 text-white">

        <!-- Desktop Nav -->
        <nav class="flex justify-between px-12 py-8">
            <Link :href="route('homepage')">
                <ApplicationLogo />
            </Link>

            <div class="flex gap-12 leading-8 text-lg">
                <Link :href="route('homepage')" class="hover:text-slate-300">
                    Gallery
                </Link>
                <Link :href="route('homepage')" class="hover:text-slate-300">
                    About
                </Link>
                <Link :href="route('homepage')" class="hover:text-slate-300">
                    Contact
                </Link>

                <Dropdown v-if="userIsLoggedIn" class="cursor-pointer">
                    <template #trigger>
                        <AccountIcon class="h-8 hover:text-slate-300"/>
                    </template>

                    <template #content>
                        <DropdownLink :href="route('profile.edit')">
                            Profile
                        </DropdownLink>
                        <DropdownLink :href="route('logout')" method="post" as="button">
                            Log Out
                        </DropdownLink>
                    </template>
                </Dropdown>
            </div>
        </nav>

        <!-- Mobile Nav -->
    </header>
</template>
