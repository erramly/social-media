<template>
    <div>
        <div class="w-full max-w-[800px] mx-auto">
            <div class="relative h-[300px] overflow-hidden rounded-t-lg">
                <img
                    :src="handlimgae(user.profile_image)"
                    alt="Cover Photo"
                    class="w-full h-full object-contain"
                    width="800"
                    height="300"
                    style="aspect-ratio: 800 / 300; object-fit: cover"
                />
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/50 to-transparent h-[100px] pointer-events-none"
                ></div>
            </div>
            <div
                class="bg-background rounded-b-lg shadow-lg -mt-[80px] relative z-10 px-6 py-4"
            >
                <div class="flex items-center gap-4">
                    <div
                        class="rounded-full border-4 border-background w-[120px] h-[120px] overflow-hidden"
                    >
                        <img
                            :src="handlimgae(user.profile_image)"
                            alt="Profile Picture"
                            class="w-full h-full object-contain"
                        />
                    </div>
                    <div class="flex-1">
                        <h1 class="text-2xl font-bold text-white">
                            {{ user.first_name }}
                            {{ user.last_name }}
                        </h1>
                        <p class="text-muted-foreground">
                            @{{ user.username }}
                        </p>
                    </div>
                </div>
                <div class="mt-4 text-muted-foreground">
                    <p>
                        I'm a passionate software engineer with a love for
                        building innovative products. In my free time, I enjoy
                        exploring the great outdoors and tinkering with new
                        technologies.
                    </p>
                </div>
            </div>
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-8"
            >
                <div
                    class="rounded-lg bg-card text-card-foreground border-0 shadow-none"
                    data-v0-t="card"
                >
                    <div class="p-0">
                        <img
                            src="https://v0.dev/placeholder.svg"
                            alt="Post Image"
                            class="w-full h-[300px] object-cover"
                            width="400"
                            height="300"
                            style="aspect-ratio: 400 / 300; object-fit: cover"
                        />
                    </div>
                    <div class="flex items-center p-6 px-4 py-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-red-500"
                                >
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">123 Likes</span>
                            </div>
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-muted-foreground"
                                >
                                    <path
                                        d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">45 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-card text-card-foreground border-0 shadow-none"
                    data-v0-t="card"
                >
                    <div class="p-0">
                        <div class="bg-muted p-4">
                            <h3 class="text-lg font-bold">Exciting News!</h3>
                            <p class="text-muted-foreground">
                                I'm thrilled to share that I've been promoted to
                                a senior position at my company. I'm excited to
                                take on new challenges and continue growing my
                                skills.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center p-6 px-4 py-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-red-500"
                                >
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">78 Likes</span>
                            </div>
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-muted-foreground"
                                >
                                    <path
                                        d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">12 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-card text-card-foreground border-0 shadow-none"
                    data-v0-t="card"
                >
                    <div class="p-0">
                        <img
                            src="https://v0.dev/placeholder.svg"
                            alt="Post Image"
                            class="w-full h-[300px] object-cover"
                            width="400"
                            height="300"
                            style="aspect-ratio: 400 / 300; object-fit: cover"
                        />
                    </div>
                    <div class="flex items-center p-6 px-4 py-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-red-500"
                                >
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">201 Likes</span>
                            </div>
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-muted-foreground"
                                >
                                    <path
                                        d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">68 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-card text-card-foreground border-0 shadow-none"
                    data-v0-t="card"
                >
                    <div class="p-0">
                        <div class="bg-muted p-4">
                            <h3 class="text-lg font-bold">Weekend Getaway</h3>
                            <p class="text-muted-foreground">
                                Had an amazing time exploring the mountains this
                                weekend. Can't wait to share the photos!
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center p-6 px-4 py-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-red-500"
                                >
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">92 Likes</span>
                            </div>
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-muted-foreground"
                                >
                                    <path
                                        d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">24 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-card text-card-foreground border-0 shadow-none"
                    data-v0-t="card"
                >
                    <div class="p-0">
                        <img
                            src="https://v0.dev/placeholder.svg"
                            alt="Post Image"
                            class="w-full h-[300px] object-cover"
                            width="400"
                            height="300"
                            style="aspect-ratio: 400 / 300; object-fit: cover"
                        />
                    </div>
                    <div class="flex items-center p-6 px-4 py-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-red-500"
                                >
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">156 Likes</span>
                            </div>
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-muted-foreground"
                                >
                                    <path
                                        d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">32 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-card text-card-foreground border-0 shadow-none"
                    data-v0-t="card"
                >
                    <div class="p-0">
                        <div class="bg-muted p-4">
                            <h3 class="text-lg font-bold">New Hobby</h3>
                            <p class="text-muted-foreground">
                                I've recently started learning how to play the
                                guitar. It's been a fun and rewarding experience
                                so far.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center p-6 px-4 py-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-red-500"
                                >
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">64 Likes</span>
                            </div>
                            <div class="flex items-center gap-2">
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
                                    class="w-5 h-5 text-muted-foreground"
                                >
                                    <path
                                        d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"
                                    ></path>
                                </svg>
                                <span class="text-sm">18 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref, onMounted } from "vue";
import { useRouter, useRoute } from "vue-router";
let route = useRoute();

let user = ref({});

let getUser = () => {
    const myHeaders = new Headers();
    myHeaders.append(
        "Cookie",
        "XSRF-TOKEN=eyJpdiI6ImVKU3ZsTzhKZXRZbTdmYXZIMTY1NFE9PSIsInZhbHVlIjoib2dzL0IwWjZDMGw2YnFlZFJNbGVmclJ5NkI0UWJXTFdSdWQyNHZ4WlBtYzRka2U1cFdvOWNlV2RPOFNoNWZpd1lwcTEyVzFpL01JQzB4VlJvU2xndFZxRGFCVDM3VjVuWURRUUtjU1owQjJ0Q1k0YlZyRFpMcHF3RXJiWlVlNzQiLCJtYWMiOiIwNjBmMjliMzMzZDZkYTFmNzgwYmIwYmQ0YWVlM2I1NzkxYTQ4N2NhZTM2Yzc5N2FjMzllNWE0NjM0MGJhZjM1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InF6RHowK1Mwa3BmKzJUR1k4L0FOZ1E9PSIsInZhbHVlIjoiRlpnZGpXS1VBUXUzRytIbUY3YmY1QkxPaDgxcUovQlB5dXEwYUtSWUpXc3Z4aS9ISHVlbXUxQTlLMmFKK2V6NGdNd1FtOEQ3OEliSnozTHNHUjJkRTUyMkJtMThvWnhoNnlhMEpCT01XVjhGRW5KOXF3RC9WMGhaNzlLQ1dTWEMiLCJtYWMiOiI0YzcyY2ZlZTk5NjUzNDY2Y2UxMzcyZjdlODgxMGU3MjJmMzUwYzIzZDQzMjIwNjdhYjgyNzdhNjc3MmJlMzZkIiwidGFnIjoiIn0%3D"
    );

    const requestOptions = {
        method: "GET",
        headers: myHeaders,
        redirect: "follow",
    };

    fetch(`http://localhost:8000/api/users/${route.params.id}`, requestOptions)
        .then((response) => response.json())
        .then((result) => {
            user.value = result;
            console.log(result);
        })
        .catch((error) => console.error(error));
};

let handlimgae = (e) => {
    return "http://localhost:8000/storage/" + e;
};

onMounted(() => {
    getUser();
});
</script>
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
img[src="https://v0.dev/placeholder.svg"],
img[src="/placeholder-user.jpg"] {
    filter: sepia(0.3) hue-rotate(-60deg) saturate(0.5) opacity(0.8);
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
