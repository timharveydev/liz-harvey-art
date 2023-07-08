<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import EditPageButton from "@/Components/EditPageButton.vue";
import { ref } from "vue";
import Modal from "@/Components/Modal.vue";
import TextInput from "@/Components/TextInput.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";

const modalActive = ref(false);
const mainHeadingInput = ref(null);

const props = defineProps({
    pageData: {
        type: Object,
        required: true
    }
})

const form = useForm({
    preHeading: props.pageData.pre_heading ?? '',
    mainHeading: props.pageData.main_heading,
})

const submitForm = () => {
    form.defaults();
    form.patch(route('homepage.update'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => mainHeadingInput.value.focus(),
        onFinish: () => form.reset(),
    });
}

const closeModal = () => {
    modalActive.value = false;
    form.reset();
}
</script>

<template>
    <Head title="Home" />

    <MainLayout :bg-brightness=".75">
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

            <span v-if="pageData.pre_heading" class="text-xl sm:text-2xl mb-2">
                {{ pageData.pre_heading }}
            </span>

            <h1 class="font-serif text-6xl sm:text-7xl lg:text-8xl mb-8">
                {{ pageData.main_heading }}
            </h1>

            <Modal :show="modalActive" @close="closeModal">
                <h2 class="text-xl font-medium text-gray-900">
                    Edit Homepage
                </h2>

                <hr class="my-4">

                <p class="text-sm text-gray-600">
                    Make your desired changes then click 'Save' to finish, or click 'Cancel' to exit without saving.
                </p>

                <div class="mt-6">
                    <!--                    <InputLabel>Background Image</InputLabel>-->
                    <!--                    <TextInput-->
                    <!--                        model-value=""-->
                    <!--                        type="text"-->
                    <!--                        class="mt-1 block w-full"-->
                    <!--                    />-->
                </div>

                <div class="mt-6">
                    <InputLabel for="preHeading">
                        Byline
                        <span class="text-gray-400 text-sm">
                            (Optional)
                        </span>
                    </InputLabel>

                    <TextInput
                        id="preHeading"
                        v-model="form.preHeading"
                        type="text"
                        class="mt-1 block w-full"
                        @keyup.enter="submitForm"
                    />

                    <InputError :message="form.errors.preHeading" class="mt-2" />
                </div>

                <div class="mt-6">
                    <InputLabel for="mainHeading" value="Main Title" />

                    <TextInput
                        id="mainHeading"
                        ref="mainHeadingInput"
                        v-model="form.mainHeading"
                        type="text"
                        class="mt-1 block w-full"
                        @keyup.enter="submitForm"
                    />

                    <InputError :message="form.errors.mainHeading" class="mt-2" />
                </div>

                <hr class="my-5">

                <div class="flex justify-end gap-3">
                    <SecondaryButton @click="closeModal">
                        Cancel
                    </SecondaryButton>

                    <PrimaryButton
                        :disabled="form.processing"
                        :class="{ 'opacity-25': form.processing }"
                        @click="submitForm"
                    >
                        Save
                    </PrimaryButton>
                </div>
            </Modal>
        </div>
    </MainLayout>
</template>
