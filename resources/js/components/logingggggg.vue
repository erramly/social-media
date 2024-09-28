<template>
    <div
        class="flex min-h-[100dvh] items-center justify-center bg-background px-4 py-12 sm:px-6 lg:px-8"
    >
        <div class="mx-auto w-full max-w-md space-y-8">
            <div>
                <h2
                    class="mt-6 text-center text-3xl font-bold tracking-tight text-foreground"
                >
                    Sign in to your account
                </h2>
                <p class="mt-2 text-center text-sm text-muted-foreground">
                    Or
                    <router-link
                        to="/signup"
                        class="font-medium text-primary hover:underline"
                    >
                        create a new account
                    </router-link>
                </p>
            </div>
            <div class="space-y-4">
                <button
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full"
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
                        class="mr-2 h-5 w-5"
                    >
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="4"></circle>
                        <line x1="21.17" x2="12" y1="8" y2="8"></line>
                        <line x1="3.95" x2="8.54" y1="6.06" y2="14"></line>
                        <line x1="10.88" x2="15.46" y1="21.94" y2="14"></line>
                    </svg>
                    Sign in with Google
                </button>
                <button
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full"
                >
                    <img
                        class="w-[30px] h-[30px] mr-[5px]"
                        src="https://github.githubassets.com/assets/GitHub-Mark-ea2971cee799.png"
                        alt=""
                    />
                    Sign in with GitHub
                </button>
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-muted"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span
                            class="bg-white text-[#9a9797] px-2 text-muted-foreground"
                            >Or continue with</span
                        >
                    </div>
                </div>
                <form class="space-y-4">
                    <div>
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="email"
                        >
                            Email address
                        </label>
                        <input
                            class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1 w-full"
                            id="email"
                            autocomplete="email"
                            required=""
                            placeholder="name@example.com"
                            type="email"
                        />
                    </div>
                    <div>
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="password"
                        >
                            Password
                        </label>
                        <div
                            class="grid grid-cols-2 cursor-pointer h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1 w-full"
                        >
                            <input
                                class="focus:outline-none"
                                id="password"
                                autocomplete="current-password"
                                required=""
                                placeholder="Enter your password"
                                type="password"
                            />
                            <svg
                                class="w-[20px]"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"
                            >
                                <path
                                    d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"
                                />
                            </svg>
                        </div>
                    </div>
                    <button
                        class="bg-black text-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full"
                        type="submit"
                    >
                        Sign in
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<style>
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Inter", sans-serif;
    --font-sans-serif: "Inter";
}
</style>
<style>
body {
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
img[src="/placeholder.svg"],
img[src="/placeholder-user.jpg"] {
    filter: sepia(0.3) hue-rotate(-60deg) saturate(0.5) opacity(0.8);
}
</style>
