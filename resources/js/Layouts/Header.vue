<script setup>
import { Link } from "@inertiajs/vue3";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import AccountIcon from "@/Components/AccountIcon.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import MenuBarsIcon from "@/Components/MenuIcon.vue";
import {ref} from "vue";
import CrossIcon from "@/Components/CrossIcon.vue";

defineProps({
    userIsLoggedIn: {
        type: Boolean,
        required: true,
    }
})

const menuIsOpen = ref(false);
</script>

<template>
    <header class="bg-gray-900 text-white">

        <!-- Desktop Nav -->
        <nav class="hidden lg:flex justify-between px-12 py-8">
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
                        <AccountIcon class="h-8 hover:text-slate-300" />
                    </template>

                    <template #content>
                        <DropdownLink :href="route('profile.edit')">
                            Profile
                        </DropdownLink>
                        <DropdownLink
                            :href="route('logout')"
                            method="post"
                            as="button"
                        >
                            Log Out
                        </DropdownLink>
                    </template>
                </Dropdown>
            </div>
        </nav>

        <!-- Mobile Nav -->
        <nav class="flex lg:hidden justify-between p-6">
            <Link :href="route('homepage')">
                <ApplicationLogo />
            </Link>

            <div class="flex gap-6 leading-8 text-lg">
                <Dropdown v-if="userIsLoggedIn" class="cursor-pointer">
                    <template #trigger>
                        <AccountIcon class="h-8" />
                    </template>

                    <template #content>
                        <DropdownLink :href="route('profile.edit')">
                            Profile
                        </DropdownLink>
                        <DropdownLink
                            :href="route('logout')"
                            method="post"
                            as="button"
                        >
                            Log Out
                        </DropdownLink>
                    </template>
                </Dropdown>

                <MenuBarsIcon
                    v-show="!menuIsOpen"
                    @click="menuIsOpen = !menuIsOpen"
                    class="h-8 cursor-pointer"
                />
                <CrossIcon
                    v-show="menuIsOpen"
                    @click="menuIsOpen = !menuIsOpen"
                    class="h-8 cursor-pointer"
                />
            </div>

            <div
                v-show="menuIsOpen"
                class="absolute left-0 top-0 w-full mt-20 pb-6 bg-gray-900 text-white flex flex-col"
            >
                <Link :href="route('homepage')" class="text-center py-4">
                    Gallery
                </Link>
                <Link :href="route('homepage')" class="text-center py-4">
                    About
                </Link>
                <Link :href="route('homepage')" class="text-center py-4">
                    Contact
                </Link>
            </div>
        </nav>
    </header>
</template>
