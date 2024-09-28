<template>
    <aside class="w-64 bg-[#3b3bff] text-white p-4 flex flex-col">
        <div class="flex items-center justify-between mb-6">
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
                    class="w-6 h-6"
                >
                    <path
                        d="M2 13a6 6 0 1 0 12 0 4 4 0 1 0-8 0 2 2 0 0 0 4 0"
                    ></path>
                    <circle cx="10" cy="13" r="8"></circle>
                    <path d="M2 21h12c4.4 0 8-3.6 8-8V7a2 2 0 1 0-4 0v6"></path>
                    <path d="M18 3 19.1 5.2"></path>
                    <path d="M22 3 20.9 5.2"></path>
                </svg>
                <span class="text-xl font-bold">slothui</span>
            </div>
        </div>
        <div class="space-y-4">
            <div class="relative">
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
                    class="absolute left-2 top-2.5 w-4 h-4 text-gray-400"
                >
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </svg>
                <input
                    class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-8 w-full"
                    placeholder="Search"
                    type="search"
                />
            </div>
            <nav class="space-y-2">
                <a class="flex items-center gap-2" href="#" rel="ugc">
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
                        class="w-5 h-5"
                    >
                        <path d="M4 11a9 9 0 0 1 9 9"></path>
                        <path d="M4 4a16 16 0 0 1 16 16"></path>
                        <circle cx="5" cy="19" r="1"></circle>
                    </svg>
                    Feed
                </a>
                <a class="flex items-center gap-2" href="#" rel="ugc">
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
                        class="w-5 h-5"
                    >
                        <path
                            d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"
                        ></path>
                    </svg>
                    Stories
                </a>
                <a class="flex items-center gap-2" href="#" rel="ugc">
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
                        class="w-5 h-5"
                    >
                        <path
                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                        ></path>
                    </svg>
                    Friends
                    <span
                        class="ml-auto bg-red-500 text-white text-xs rounded-full px-2 py-1"
                        >2</span
                    >
                </a>
                <a class="flex items-center gap-2" href="#" rel="ugc">
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
                        class="w-5 h-5"
                    >
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="m14.31 8 5.74 9.94"></path>
                        <path d="M9.69 8h11.48"></path>
                        <path d="m7.38 12 5.74-9.94"></path>
                        <path d="M9.69 16 3.95 6.06"></path>
                        <path d="M14.31 16H2.83"></path>
                        <path d="m16.62 12-5.74 9.94"></path>
                    </svg>
                    APIs
                </a>
                <a class="flex items-center gap-2" href="#" rel="ugc">
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
                        class="w-5 h-5"
                    >
                        <path
                            d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"
                        ></path>
                        <polyline points="10 17 15 12 10 7"></polyline>
                        <line x1="15" x2="3" y1="12" y2="12"></line>
                    </svg>
                    Subscription
                </a>
                <a class="flex items-center gap-2" href="#" rel="ugc">
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
                        class="w-5 h-5"
                    >
                        <path
                            d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"
                        ></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    Settings
                </a>
                <a class="flex items-center gap-2" href="#" rel="ugc">
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
                        class="w-5 h-5"
                    >
                        <path
                            d="M11 12h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 14"
                        ></path>
                        <path
                            d="m7 18 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"
                        ></path>
                        <path d="m2 13 6 6"></path>
                    </svg>
                    Help &amp; Support
                </a>
            </nav>
        </div>
        <div class="mt-auto">
            <button
                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-10 px-4 py-2 w-full mb-4"
            >
                Go Pro
            </button>
            <div class="flex items-center gap-2">
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
                    <p>Azunyan U. Wu</p>
                    <p class="text-sm text-gray-300">Basic Member</p>
                </div>
            </div>
        </div>
    </aside>
</template>
