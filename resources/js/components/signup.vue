<template>
    <div class="flex items-center justify-center min-h-screen bg-background">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg">
            <div class="p-4">
                <h2 class="text-2xl font-bold text-center">
                    Create an account
                </h2>
                <p class="text-center">
                    Enter your information below to create your account
                </p>
            </div>
            <div class="p-4 space-y-4">
                <form @submit.prevent="handleSubmit" class="space-y-4">
                    <div class="flex justify-center">
                        <div
                            class="relative w-32 h-32 overflow-hidden rounded-full"
                        >
                            <img
                                v-if="image"
                                :src="image"
                                alt="Profile"
                                class="w-full h-full object-cover"
                            />
                            <div
                                v-else
                                class="w-full h-full bg-gray-200 flex items-center justify-center"
                            ></div>
                            <input
                                type="file"
                                ref="fileInput"
                                @change="handleImageUpload"
                                class="tt"
                                accept="image/*"
                            />
                            <button
                                type="button"
                                class="absolute bottom-0 right-0 rounded-full p-2 bg-gray-200"
                                @click="triggerFileInput"
                            ></button>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label for="firstName" class="block"
                                >First Name</label
                            >
                            <input
                                id="firstName"
                                v-model="formData.firstName"
                                type="text"
                                placeholder="John"
                                required
                                class="form-input"
                            />
                        </div>
                        <div class="space-y-2">
                            <label for="lastName" class="block"
                                >Last Name</label
                            >
                            <input
                                id="lastName"
                                v-model="formData.lastName"
                                type="text"
                                placeholder="Doe"
                                required
                                class="form-input"
                            />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="username" class="block">Username</label>
                        <input
                            id="username"
                            v-model="formData.username"
                            type="text"
                            placeholder="johndoe"
                            required
                            class="form-input"
                        />
                    </div>
                    <div class="space-y-2">
                        <label for="email" class="block">Email</label>
                        <input
                            id="email"
                            v-model="formData.email"
                            type="email"
                            placeholder="m@example.com"
                            required
                            class="form-input"
                        />
                        <p v-if="errors.email" class="text-sm text-red-500">
                            {{ errors.email }}
                        </p>
                    </div>
                    <div class="space-y-2">
                        <label for="birthday" class="block">Birthday</label>
                        <input
                            id="birthday"
                            v-model="formData.birthday"
                            type="date"
                            required
                            class="form-input"
                        />
                        <p v-if="errors.birthday" class="text-sm text-red-500">
                            {{ errors.birthday }}
                        </p>
                    </div>
                    <div class="space-y-2">
                        <label for="password" class="block">Password</label>
                        <input
                            id="password"
                            v-model="formData.password"
                            type="password"
                            required
                            class="form-input"
                        />
                    </div>
                    <div class="space-y-2">
                        <label for="confirmPassword" class="block"
                            >Confirm Password</label
                        >
                        <input
                            id="confirmPassword"
                            v-model="formData.confirmPassword"
                            type="password"
                            required
                            class="form-input"
                        />
                        <p v-if="errors.password" class="text-sm text-red-500">
                            {{ errors.password }}
                        </p>
                    </div>
                    <button
                        class="w-full bg-blue-500 text-white py-2 rounded"
                        type="submit"
                    >
                        Sign Up
                    </button>
                </form>
            </div>
            <div class="p-4 text-sm text-muted-foreground text-center">
                Already have an account?
                <a href="#" class="underline text-primary hover:text-primary"
                    >Log in</a
                >
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { useRouter, useRoute } from 'vue-router'
const formData = ref({
    firstName: "",
    lastName: "",
    username: "",
    email: "",
    fileInput: "",
    password: "",
    confirmPassword: "",
    birthday: "",
});

const errors = ref({
    password: "",
    email: "",
    birthday: "",
});

const image = ref(null);
const fileInput = ref(null);
let router = useRouter();

const handleInputChange = (e) => {
    const { name, value } = e.target;
    formData.value[name] = value;

    // Clear errors when user starts typing
    if (errors.value[name]) {
        errors.value[name] = "";
    }
};

const handleImageUpload = (e) => {
    const file = e.target.files?.[0];
    fileInput.value = e.target.files?.[0];

    if (file) {
        const reader = new FileReader();
        reader.onloadend = () => {
            image.value = reader.result;
        };
        reader.readAsDataURL(file);
    }
};

const validateForm = () => {
    let isValid = true;
    const newErrors = { ...errors.value };

    if (formData.value.password !== formData.value.confirmPassword) {
        newErrors.password = "Passwords do not match";
        isValid = false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(formData.value.email)) {
        newErrors.email = "Invalid email format";
        isValid = false;
    }

    const birthDate = new Date(formData.value.birthday);
    const today = new Date();
    const minAge = 13;
    const maxAge = 120;
    const minDate = new Date(
        today.getFullYear() - maxAge,
        today.getMonth(),
        today.getDate()
    );
    const maxDate = new Date(
        today.getFullYear() - minAge,
        today.getMonth(),
        today.getDate()
    );

    if (
        isNaN(birthDate.getTime()) ||
        birthDate < minDate ||
        birthDate > maxDate
    ) {
        newErrors.birthday = `You must be between ${minAge} and ${maxAge} years old`;
        isValid = false;
    }

    errors.value = newErrors;
    return isValid;
};

const handleSubmit = () => {
    if (validateForm()) {
        const formdata = new FormData();
        if (fileInput.value?.files[0]) {
            formdata.append("profile_image", fileInput.value?.files[0]);
        }
        const myHeaders = new Headers();

        myHeaders.append(
            "Cookie",
            "XSRF-TOKEN=eyJpdiI6Im02L0I4V2xuT0hRSEF1c0VJTUpYcXc9PSIsInZhbHVlIjoiMmtFM3VMVWM0U1RMb2JIS3hkYWU4U29Ldm9pWlV5STREdzM4YzEyVWI3T3NSbFJzY2NrUTJvcFBpbXVqdERLTG9Nb0VyZFE3d29aYTkwMUxOSE1YVGFCZTB0MmwwMndUcEM4SXR3R0h3dVRMYVA2V3hjSTY1SlU4MmgwUUhGZDAiLCJtYWMiOiI3MGExOTNlYTIzZTM4MmEyMDc4ZDkzMjFjZTQwYjExY2NjMjE2ZGY0MDg1MjAzOTAzYTVlN2UyMDFkM2ZmYzc5IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImMvMzFLdG5TVlBtOGV1MmFRQTU1ekE9PSIsInZhbHVlIjoiZUFLK1ZicWt4RUdKSUNOdStZTjUyTUJMUm1tWktud2k1RmdQWG45c2s2ZnJsTUlvVVFaTWZWQWwxOHJYMDlBWG1vY0JYdVJJOCs0QzZ2T1orL3lJYlVvMVFaZ1JJY0swbUVuZFdSS3pCVFNRZThmUWxtS1FDRnFYZTFLQVV6MHoiLCJtYWMiOiI0MzJlZmUzMmNiZjlhYTZhYzRkZWMxOGIwNzg5MTU3OTZiMTRiY2U4NTBjODA0ZGUzYmNjM2Y3ODYxMThmNzU4IiwidGFnIjoiIn0%3D"
        );
        formdata.append("first_name", formData.value.firstName);
        formdata.append("last_name", formData.value.lastName);
        formdata.append("username", formData.value.username);
        formdata.append("birthday", formData.value.birthday);
        formdata.append("email", formData.value.email);
        formdata.append("password", formData.value.password);

        const requestOptions = {
            method: "POST",
            headers: myHeaders,
            body: formdata,
            redirect: "follow",
        };

        fetch("http://localhost:8000/api/signup", requestOptions)
            .then((response) => response.json()) // Assuming the server returns JSON
            .then((result) => {
                if (result) {
                    console.log(result);
                    console.log(router);
                    
                    router.push("/login");
                }
            })
            .catch((error) => console.error(error));
    }
};

const triggerFileInput = () => {
    fileInput.value.click();
};
</script>

<style scoped>
.form-input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 0.375rem;
    outline: none;
}
.form-input:focus {
    border-color: #4a90e2;
}
input.tt {
    width: 100%;
    height: 100px;
    position: absolute;
    top: 53px;
    right: 20px;
}
</style>
