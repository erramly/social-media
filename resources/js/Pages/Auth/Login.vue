<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.transform((data) => ({
        ...data,
        remember: form.remember ? "on" : "",
    })).post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Log in" />

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <template #title>
            <div class="flex flex-col space-y-1.5 p-6">
                <h3
                    class="tracking-tight text-2xl font-bold text-center text-gray-800"
                >
                    Welcome Back
                </h3>
                <p class="text-sm text-center text-gray-600 text-gray-300">
                    Login to your account
                </p>
            </div>
        </template>
        <!--form start-->
        <form @submit.prevent="submit">
            <!-- this input email -->
            <div>
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="email"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <!-- this input password -->
            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    placeholder="password"
                    required
                    autocomplete="current-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>
            <!-- this input check for remember -->
            <div class="flex justify-between items-center mt-2">
                <div>
                    <label class="flex items-center">
                        <Checkbox
                            v-model:checked="form.remember"
                            name="remember"
                        />
                        <span class="ms-2 text-sm text-gray-600"
                            >Remember me</span
                        >
                    </label>
                </div>
                <div>
                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Forgot your password?
                    </Link>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4 flex-col">
                <PrimaryButton
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 h-10 px-4 py-2 w-full bg-indigo-600 hover:bg-indigo-700 text-white"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Log in
                </PrimaryButton>
                <p class="text-sm text-gray-600 mt-6">
                    Don't have an account?
                    <Link
                        :href="route('register')"
                        class="text-indigo-600 hover:text-indigo-800 dark:hover:text-indigo-300"
                    >
                        Sign up
                    </Link>
                </p>
            </div>
        </form>
    </AuthenticationCard>
</template>
