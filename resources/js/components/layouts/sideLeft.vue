<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <aside
        class="w-[250px] min-h-screen bg-indigo-600 dark:bg-indigo-900 text-white p-6 bg-[#3b3bff] text-white p-4 flex flex-col max-lg:hidden"
    >
        <div class="flex items-center gap-2 mb-8">
            <div class="w-8 h-8 bg-white/20 rounded-lg"></div>
            <span class="text-xl font-semibold">glovirop</span>
        </div>
        <nav class="space-y-1">
            <a
                href="#"
                class="flex items-center gap-3 text-white/80 hover:text-white py-2"
                ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-rss w-5 h-5"
                >
                    <path d="M4 11a9 9 0 0 1 9 9"></path>
                    <path d="M4 4a16 16 0 0 1 16 16"></path>
                    <circle cx="5" cy="19" r="1"></circle></svg
                ><span>Feed</span></a
            ><a
                href="#"
                class="flex items-center gap-3 text-white/80 hover:text-white py-2"
                ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-book-open w-5 h-5"
                >
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                    <path
                        d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"
                    ></path></svg
                ><span>Stories</span></a
            >
            <!-- friends  -->
            <Link href="/friend-page">
                <div
                    class="flex items-center gap-3 text-white hover:text-white bg-white/10 rounded-lg px-3 py-2"
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
                        class="lucide lucide-users w-5 h-5"
                    >
                        <path
                            d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg
                    ><span>Friends</span
                    ><span class="ml-auto bg-red-500 text-xs rounded-full px-2"
                        >2</span
                    >
                </div></Link
            >

            <a
                href="#"
                class="flex items-center gap-3 text-white/80 hover:text-white py-2"
                ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-shopping-bag w-5 h-5"
                >
                    <path
                        d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"
                    ></path>
                    <path d="M3 6h18"></path>
                    <path d="M16 10a4 4 0 0 1-8 0"></path></svg
                ><span>marketplace</span></a
            ><a
                href="/messages"
                class="flex items-center gap-3 text-white/80 hover:text-white py-2"
                ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-message-square w-5 h-5"
                >
                    <path
                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                    ></path></svg
                ><span>Messages</span></a
            ><Link
                href="user/profile"
                class="flex items-center gap-3 text-white/80 hover:text-white py-2"
                ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-settings w-5 h-5"
                >
                    <path
                        d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"
                    ></path>
                    <circle cx="12" cy="12" r="3"></circle></svg
                ><span>Settings</span></Link
            ><a
                href="#"
                class="flex items-center gap-3 text-white/80 hover:text-white py-2"
                ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-circle-help w-5 h-5"
                >
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                    <path d="M12 17h.01"></path></svg
                ><span>Help &amp; Support</span></a
            >
        </nav>
    </aside>
</template>
<style scoped></style>
