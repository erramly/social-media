<script setup>
import { ref, computed } from "vue";
import { useForm } from "@inertiajs/vue3";

let form = useForm({
    title: "",
    content: "",
    image: null,
});

const imgPreview = ref(null);

const submit = () => {
    form.post("posts-create", {
        onSuccess: () => {
            close();
        },
    });
};

const emit = defineEmits(["close"]);

const close = () => {
    emit("close");
};

function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            imgPreview.value.src = e.target.result;
        };
        reader.readAsDataURL(file);
        form.image = file;
    }
}

function activeinpute() {
    document.getElementById("fileInput").click();
}

const showError = computed(() => {
    if (form.title === "") {
        return "input title empty";
    }
    if (form.content === "") {
        return "input content is empty";
    }
    return false;
});

const now = computed(() => Date.now());
</script>

<template>
    <div
        class="fixed z-[99999] bg-[#333333bd] inset-0 flex justify-center items-center"
    >
        <div
            class="fixed bg-white mi-auto rounded-lg border bg-card text-card-foreground shadow-sm lg:w-[40%] max-w-2xl"
            data-v0-t="card"
        >
            <div class="flex flex-col space-y-1.5 p-6">
                <div class="flex items-center gap-4">
                    <span
                        class="relative flex shrink-0 overflow-hidden rounded-full w-10 h-10 border"
                    >
                        <img
                            class="aspect-square h-full w-full"
                            alt="profile photo"
                            :src="$page.props.auth.user.profile_photo_url"
                        />
                    </span>
                    <div class="grid gap-1">
                        <p class="text-sm font-medium">
                            {{ $page.props.auth.user.name }}
                        </p>
                        <p class="text-sm text-muted-foreground">
                            Sharing an update with the team
                        </p>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid gap-4">
                    <img
                        ref="imgPreview"
                        height="250"
                        alt="Post Image"
                        class="aspect-video rounded-md object-cover w-[300px] m-auto"
                        src="https://v0.dev/placeholder.svg"
                    />
                    <button
                        class="border-inherit border-solid border-2 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10"
                        @click="activeinpute()"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-5 w-5"
                        >
                            <rect
                                width="18"
                                height="18"
                                x="3"
                                y="3"
                                rx="2"
                                ry="2"
                            ></rect>
                            <circle cx="9" cy="9" r="2"></circle>
                            <path
                                d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"
                            ></path>
                        </svg>
                        <span class="sr-only">Add Image</span>
                    </button>
                    <div class="space-y-2">
                        <input
                            v-model="form.title"
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 text-sm font-bold"
                            placeholder="Add a title..."
                        />
                        <textarea
                            v-model="form.content"
                            class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 text-sm leading-relaxed"
                            placeholder="Write your post content here..."
                            rows="4"
                        ></textarea>
                    </div>
                </div>
            </div>
            <div class="p-6 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <input
                        type="file"
                        id="fileInput"
                        style="display: none"
                        accept="image/*"
                        @change="previewImage"
                    />
                </div>
                <div class="flex items-center gap-2">
                    <button
                        @click="close()"
                        class="bg-red-700 text-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-10 px-4 py-2"
                    >
                        Draft
                    </button>
                    <button
                        @click="submit"
                        class="bg-black text-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2"
                    >
                        Post
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
:root {
    --background: 0 0% 100%;
    --foreground: 240 10% 3.9%;
    --card: 0 0% 100%;
    --card-foreground: 240 10% 3.9%;
    --popover: 0 0% 100%;
    --popover-foreground: 240 10% 3.9%;
    --primary: 240 5.9% 10%;
    --primary-foreground: 0 0% 98%;
    --secondary: 240 4.8% 95.9%;
    --secondary-foreground: 240 5.9% 10%;
    --muted: 240 4.8% 95.9%;
    --muted-foreground: 240 3.8% 45%;
    --accent: 240 4.8% 95.9%;
    --accent-foreground: 240 5.9% 10%;
    --destructive: 0 72% 51%;
    --destructive-foreground: 0 0% 98%;
    --border: 240 5.9% 90%;
    --input: 240 5.9% 90%;
    --ring: 240 5.9% 10%;
    --chart-1: 173 58% 39%;
    --chart-2: 12 76% 61%;
    --chart-3: 197 37% 24%;
    --chart-4: 43 74% 66%;
    --chart-5: 27 87% 67%;
    --radius: 0.5rem;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Inter", sans-serif;
    --font-sans-serif: "Inter";
}

body {
    font-family: "Inter", sans-serif;
    --font-sans-serif: "Inter";
}
</style>
