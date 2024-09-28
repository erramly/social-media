<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import sideLeft from "@/components/layouts/sideLeft.vue";
import postCard from "@/components/postCard.vue";
</script>

<template>
    <AppLayout title="Dashboard">
        <div class="flex min-h-screen bg-gray-100">
            <sideLeft />
            <main class="flex-1 p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-2 space-y-6">
                        <!--posts card-->
                        <postCard v-for="(item, index) in 10" :key="index" />
                    </div>
                    <aside class="space-y-6">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-lg font-bold">
                                    Friend Suggestions
                                </h2>
                                <a class="text-blue-500" href="#" rel="ugc">
                                    See All
                                </a>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <span
                                        class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                                    >
                                        <img
                                            class="aspect-square h-full w-full"
                                            alt="Julia Smith"
                                            src="https://v0.dev/placeholder-user.jpg"
                                        />
                                    </span>
                                    <div>
                                        <p class="font-bold">Julia Smith</p>
                                        <p class="text-sm text-gray-500">
                                            @juliasmith
                                        </p>
                                    </div>
                                    <button
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 ml-auto"
                                    >
                                        +
                                    </button>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                                    >
                                        <img
                                            class="aspect-square h-full w-full"
                                            alt="Vermillion D. Gray"
                                            src="https://v0.dev/placeholder-user.jpg"
                                        />
                                    </span>
                                    <div>
                                        <p class="font-bold">
                                            Vermillion D. Gray
                                        </p>
                                        <p class="text-sm text-gray-500">
                                            @vermilliongray
                                        </p>
                                    </div>
                                    <button
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 ml-auto"
                                    >
                                        +
                                    </button>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                                    >
                                        <img
                                            class="aspect-square h-full w-full"
                                            alt="Mai Senpai"
                                            src="https://v0.dev/placeholder-user.jpg"
                                        />
                                    </span>
                                    <div>
                                        <p class="font-bold">Mai Senpai</p>
                                        <p class="text-sm text-gray-500">
                                            @maisenpai
                                        </p>
                                    </div>
                                    <button
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 ml-auto"
                                    >
                                        +
                                    </button>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                                    >
                                        <img
                                            class="aspect-square h-full w-full"
                                            alt="Azunyan U. Wu"
                                            src="https://v0.dev/placeholder-user.jpg"
                                        />
                                    </span>
                                    <div>
                                        <p class="font-bold">Azunyan U. Wu</p>
                                        <p class="text-sm text-gray-500">
                                            @azunyanw
                                        </p>
                                    </div>
                                    <button
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 ml-auto"
                                    >
                                        +
                                    </button>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span
                                        class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                                    >
                                        <img
                                            class="aspect-square h-full w-full"
                                            alt="Oarack Babama"
                                            src="https://v0.dev/placeholder-user.jpg"
                                        />
                                    </span>
                                    <div>
                                        <p class="font-bold">Oarack Babama</p>
                                        <p class="text-sm text-gray-500">
                                            @obama21
                                        </p>
                                    </div>
                                    <button
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 ml-auto"
                                    >
                                        +
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h2 class="text-lg font-bold mb-4">
                                Profile Activity
                            </h2>
                            <div class="flex items-center gap-2 mb-4">
                                <span
                                    class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                                >
                                    <img
                                        class="aspect-square h-full w-full"
                                        alt="Profile"
                                        src="https://v0.dev/placeholder-user.jpg"
                                    />
                                </span>
                                <div>
                                    <p class="font-bold">+1,158 Followers</p>
                                    <p class="text-sm text-green-500">
                                        +23% vs last month
                                    </p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-500">
                                You gained a substantial amount of followers
                                this month!
                            </p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h2 class="text-lg font-bold mb-4">
                                Upcoming Events
                            </h2>
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
                                    class="w-5 h-5 text-gray-500"
                                >
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect
                                        width="18"
                                        height="18"
                                        x="3"
                                        y="4"
                                        rx="2"
                                    ></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                                <div>
                                    <p class="font-bold">Friend's Birthday</p>
                                    <p class="text-sm text-gray-500">
                                        Jun 25, 2028
                                    </p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </main>
        </div>
    </AppLayout>
</template>
<style scoped>
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Inter", sans-serif;
    --font-sans-serif: "Inter";
}
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
body {
    font-family: "Inter", sans-serif;
    --font-sans-serif: "Inter";
}
img[src="/placeholder.svg"],
img[src="/placeholder-user.jpg"] {
    filter: sepia(0.3) hue-rotate(-60deg) saturate(0.5) opacity(0.8);
}
</style>
