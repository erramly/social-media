<template>
    <div class="flex min-h-screen w-full bg-background">
        <aside class="border-r bg-background px-4 py-6 sm:px-6 sm:py-8">
            <div class="mb-6 flex items-center justify-between">
                <h3 class="text-lg font-semibold">Contacts</h3>
                <div class="relative w-full max-w-sm">
                    <div
                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
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
                            class="w-5 h-5 text-muted-foreground"
                        >
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                    <input
                        class="flex h-10 w-full border border-input px-3 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-10 pr-4 py-2 rounded-md bg-muted text-foreground focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary"
                        placeholder="Search contacts..."
                        type="text"
                    />
                </div>
            </div>
            <div class="space-y-4">
                <a
                    class="flex items-center gap-4 p-2 rounded-md hover:bg-muted transition-colors"
                    href="#"
                >
                    <span
                        class="relative flex shrink-0 overflow-hidden rounded-full w-10 h-10 border"
                    >
                        <img
                            class="aspect-square h-full w-full"
                            alt="Avatar"
                            src="https://v0.dev/placeholder-user.jpg"
                        />
                    </span>
                    <div class="flex-1 truncate">
                        <div class="font-medium">John Doe</div>
                        <div class="text-sm text-muted-foreground truncate">
                            Hey, how's it going?
                        </div>
                    </div>
                    <div class="text-sm text-muted-foreground">2h</div>
                </a>
                <!-- Repeat similar blocks for other contacts -->
            </div>
        </aside>
        <div class="flex flex-col flex-1">
            <div class="flex-1 overflow-auto p-6 sm:p-8">
                <div class="grid gap-6">
                    <!-- Messages -->
                    <div class="flex items-start gap-4">
                        <span
                            class="relative flex shrink-0 overflow-hidden rounded-full w-10 h-10 border"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="Avatar"
                                src="https://v0.dev/placeholder-user.jpg"
                            />
                        </span>
                        <div class="flex-1 space-y-2">
                            <div class="rounded-lg bg-muted p-4">
                                <p>Hey, how's it going?</p>
                            </div>
                            <div class="text-xs text-muted-foreground">
                                2:34 PM
                            </div>
                        </div>
                    </div>
                    <!-- Repeat similar blocks for other messages -->
                </div>
            </div>
            <div class="border-t bg-background px-4 py-3 sm:px-6 sm:py-4">
                <div class="flex items-center gap-2">
                    <input
                        class="flex h-10 w-full border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 flex-1 rounded-md bg-muted text-foreground focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary"
                        placeholder="Type your message..."
                        type="text"
                    />
                    <button
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10"
                    ></button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
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

img[src="/placeholder.svg"],
img[src="https://v0.dev/placeholder-user.jpg"] {
    filter: sepia(0.3) hue-rotate(-60deg) saturate(0.5) opacity(0.8);
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Inter", sans-serif;
}

body {
    font-family: "Inter", sans-serif;
}
</style>
