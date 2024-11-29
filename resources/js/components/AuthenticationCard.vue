<template>
    <!-- auth card ui -->
    <div
        class="min-h-screen bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center p-4 relative overflow-hidden"
    >
    <div
        class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg rounded-lg border text-card-foreground shadow-sm w-full max-w-md bg-white/80 backdrop-blur-sm"
    >
        <div  class="w-full flex justify-center">
            <slot name="logo" />
        </div>
        <div>
            <slot name="title" />
        </div>

        <div class="">
            <slot />
        </div>
    </div>
    </div>
</template>
