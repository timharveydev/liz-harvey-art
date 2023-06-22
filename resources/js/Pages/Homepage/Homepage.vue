<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import EditPageButton from "@/Components/EditPageButton.vue";
import { ref } from "vue";
import Modal from "@/Components/Modal.vue";
import TextInput from "@/Components/TextInput.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";

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

const modalActive = ref(false);
</script>

<template>
    <Head title="Home" />

    <MainLayout :bg-image="bgImage" :bg-brightness="75">
        <div
            class="h-full flex flex-col justify-center items-center text-center relative"
        >
            <EditPageButton
                v-if="$page.props.auth.user"
                class="absolute top-6 lg:top-10 left-0"
                @click="modalActive = true"
            >
                Edit this page
            </EditPageButton>

            <span v-if="byline" class="text-xl sm:text-2xl mb-2">
                {{ byline }}
            </span>

            <h1 class="font-serif text-6xl sm:text-7xl lg:text-8xl mb-8">
                {{ pageHeading }}
            </h1>

            <Modal :show="modalActive" @close="modalActive = false">
                <h2 class="text-xl font-medium text-gray-900">
                    Edit Homepage
                </h2>

                <hr class="my-4">

                <p class="text-sm text-gray-600">
                    Make your desired changes then click 'Save' to finish, or click 'Cancel' to exit without saving.
                </p>

                <div class="mt-6">
                    <InputLabel>Background Image</InputLabel>
                    <TextInput
                        model-value=""
                        type="text"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="mt-6">
                    <InputLabel>
                        Byline
                        <span class="text-gray-400 text-sm">
                (Optional)
            </span>
                    </InputLabel>
                    <TextInput
                        model-value=""
                        type="text"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="mt-6">
                    <InputLabel>Main Title</InputLabel>
                    <TextInput
                        model-value=""
                        type="text"
                        class="mt-1 block w-full"
                    />
                </div>

                <hr class="my-5">

                <div class="flex justify-end gap-3">
                    <SecondaryButton @click="modalActive = false">
                        Cancel
                    </SecondaryButton>

                    <PrimaryButton>
                        <!-- Use 'DeleteUserForm.vue' for button behavior -->
                        Save
                    </PrimaryButton>
                </div>
            </Modal>
        </div>
    </MainLayout>
</template>
