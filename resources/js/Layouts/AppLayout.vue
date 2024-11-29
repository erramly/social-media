<script setup>
import { ref } from "vue";
import { Head, Link, router, usePage } from "@inertiajs/vue3";
import ApplicationMark from "@/Components/ApplicationMark.vue";
import Banner from "@/Components/Banner.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import sideLeft from "@/components/layouts/sideLeft.vue";
import BottomNavbar from "@/components/mobile/Bottom-Navbar.vue";
import NotificationCard from "@/components/modals/NotificationCard.vue";

const props = defineProps({ title: String });
const page = usePage();

const showingNavigationDropdown = ref(false);
const showingNavigationCard = ref(false);

const switchToTeam = (team) => {
    router.put(
        route("current-team.update"),
        {
            team_id: team.id,
        },
        {
            preserveState: false,
        }
    );
};
const isUserHaveNotivegation = () => {
    return !page.props.auth.notifications.length > 0;
};

const logout = () => {
    router.post(route("logout"));
};
</script>

<template>
    <div>
        <Head :title="title" />
        <Banner />
        <Transition name="slide-fade">
            <NotificationCard v-if="showingNavigationCard"
        /></Transition>
        <div class="min-h-screen bg-[#111827]">
            <nav class="border-b border-gray-700 bg-gray-900">
                <!-- Primary Navigation Menu -->
                <div
                    class="flex items-center justify-between p-4 bg-indigo-600 dark:bg-indigo-900 text-white"
                >
                    <div class="flex h-16 w-full justify-between">
                        <div class="flex items-center">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link href="/">
                                    <ApplicationMark class="block h-9 w-auto" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div
                                class="space-x-8 sm:ms-10 flex items-center"
                            ></div>
                        </div>

                        <!-- icons navbare in desktop -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <!-- Settings Dropdown -->
                            <div class="ms-3 relative"></div>
                        </div>
                        <!-- 4 icons-->
                        <div class="flex items-center space-x-4 max-sm:hidden">
                            <div
                                class="me-3 relative cursor-pointer lucide lucide-message-circle w-6 h-6 block"
                                @click="
                                    showingNavigationCard =
                                        !showingNavigationCard
                                "
                            >
                                <!--note-->
                                <span
                                    :class="{
                                        hidden: isUserHaveNotivegation(),
                                    }"
                                    class="flex absolute right-[-2px] top-[-5px] h-3 w-3"
                                >
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"
                                    ></span>
                                    <span
                                        class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"
                                    ></span>
                                </span>
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
                                    class="lucide lucide-bell w-6 h-6"
                                >
                                    <path
                                        d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"
                                    ></path>
                                    <path
                                        d="M10.3 21a1.94 1.94 0 0 0 3.4 0"
                                    ></path>
                                </svg>
                            </div>
                            <a href="/messages">
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
                                    class="lucide lucide-message-circle w-6 h-6 hidden md:block"
                                >
                                    <path
                                        d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"
                                    ></path></svg></a
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
                                class="lucide lucide-grid3x3 w-6 h-6 hidden md:block"
                            >
                                <rect
                                    width="18"
                                    height="18"
                                    x="3"
                                    y="3"
                                    rx="2"
                                ></rect>
                                <path d="M3 9h18"></path>
                                <path d="M3 15h18"></path>
                                <path d="M9 3v18"></path>
                                <path d="M15 3v18"></path>
                            </svg>
                            <Dropdown align="right" width="48">
                                <!-- prefive -->
                                <template #trigger>
                                    <button
                                        v-if="
                                            $page.props.jetstream
                                                .managesProfilePhotos
                                        "
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"
                                    >
                                        <img
                                            class="h-8 w-8 rounded-full object-cover"
                                            :src="
                                                $page.props.auth.user
                                                    .profile_photo_url
                                            "
                                            :alt="$page.props.auth.user.name"
                                        />
                                    </button>

                                    <span v-else class="inline-flex rounded-md">
                                        <button
                                            type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150"
                                        >
                                            {{ $page.props.auth.user.name }}

                                            <svg
                                                class="ms-2 -me-0.5 h-4 w-4"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                                                />
                                            </svg>
                                        </button>
                                    </span>
                                </template>

                                <template #content>
                                    <!-- Account Management -->
                                    <div
                                        class="block px-4 py-2 text-xs text-gray-400"
                                    >
                                        Manage Account
                                    </div>

                                    <DropdownLink :href="route('profile.show')">
                                        Profile
                                    </DropdownLink>

                                    <DropdownLink
                                        v-if="
                                            $page.props.jetstream.hasApiFeatures
                                        "
                                        :href="route('api-tokens.index')"
                                    >
                                        API Tokens
                                    </DropdownLink>

                                    <div class="border-t border-gray-200" />

                                    <!-- Authentication -->
                                    <form @submit.prevent="logout">
                                        <DropdownLink as="button">
                                            Log Out
                                        </DropdownLink>
                                    </form>
                                </template>
                            </Dropdown>
                        </div>
                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <div
                                class="me-3 relative"
                                @click="
                                    showingNavigationCard =
                                        !showingNavigationCard
                                "
                            >
                                <span
                                    :class="{
                                        hidden: isUserHaveNotivegation(),
                                    }"
                                    class="flex absolute right-[-2px] top-[-5px] h-3 w-3"
                                >
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"
                                    ></span>
                                    <span
                                        class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"
                                    ></span>
                                </span>
                                <svg
                                    data-v-838512c9=""
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-bell w-6 h-6"
                                >
                                    <path
                                        data-v-838512c9=""
                                        d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"
                                    ></path>
                                    <path
                                        data-v-838512c9=""
                                        d="M10.3 21a1.94 1.94 0 0 0 3.4 0"
                                    ></path>
                                </svg>
                            </div>
                            <!--Notification card-->

                            <button
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                @click="
                                    showingNavigationDropdown =
                                        !showingNavigationDropdown
                                "
                            >
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex':
                                                !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex':
                                                showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="sm:hidden"
                >
                    <!-- <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink
                            :href="route('dashboard')"
                            :active="route().current('dashboard')"
                        >
                            Dashboard
                        </ResponsiveNavLink>
                    </div> -->

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            <div
                                v-if="
                                    $page.props.jetstream.managesProfilePhotos
                                "
                                class="shrink-0 me-3"
                            >
                                <img
                                    class="h-10 w-10 rounded-full object-cover"
                                    :src="
                                        $page.props.auth.user.profile_photo_url
                                    "
                                    :alt="$page.props.auth.user.name"
                                />
                            </div>

                            <div>
                                <div class="font-medium text-base text-white">
                                    {{ $page.props.auth.user.name }}
                                </div>
                                <div class="font-medium text-sm text-gray-500">
                                    {{ $page.props.auth.user.email }}
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink
                                :href="`/profileshow/${$page.props.auth.user.id}`"
                                :active="route().current('profile.show')"
                            >
                                Profile
                            </ResponsiveNavLink>

                            <ResponsiveNavLink
                                v-if="$page.props.jetstream.hasApiFeatures"
                                :href="route('api-tokens.index')"
                                :active="route().current('api-tokens.index')"
                            >
                                API Tokens
                            </ResponsiveNavLink>

                            <!-- Authentication -->
                            <form method="POST" @submit.prevent="logout">
                                <ResponsiveNavLink as="button">
                                    Log Out
                                </ResponsiveNavLink>
                            </form>

                            <!-- Team Management -->
                            <template
                                v-if="$page.props.jetstream.hasTeamFeatures"
                            >
                                <div class="border-t border-gray-200" />

                                <div
                                    class="block px-4 py-2 text-xs text-gray-400"
                                >
                                    Manage Team
                                </div>

                                <!-- Team Settings -->
                                <ResponsiveNavLink
                                    :href="
                                        route(
                                            'teams.show',
                                            $page.props.auth.user.current_team
                                        )
                                    "
                                    :active="route().current('teams.show')"
                                >
                                    Team Settings
                                </ResponsiveNavLink>

                                <ResponsiveNavLink
                                    v-if="$page.props.jetstream.canCreateTeams"
                                    :href="route('teams.create')"
                                    :active="route().current('teams.create')"
                                >
                                    Create New Team
                                </ResponsiveNavLink>

                                <!-- Team Switcher -->
                                <template
                                    v-if="
                                        $page.props.auth.user.all_teams.length >
                                        1
                                    "
                                >
                                    <div class="border-t border-gray-200" />

                                    <div
                                        class="block px-4 py-2 text-xs text-gray-400"
                                    >
                                        Switch Teams
                                    </div>

                                    <template
                                        v-for="team in $page.props.auth.user
                                            .all_teams"
                                        :key="team.id"
                                    >
                                        <form
                                            @submit.prevent="switchToTeam(team)"
                                        >
                                            <ResponsiveNavLink as="button">
                                                <div class="flex items-center">
                                                    <svg
                                                        v-if="
                                                            team.id ==
                                                            $page.props.auth
                                                                .user
                                                                .current_team_id
                                                        "
                                                        class="me-2 h-5 w-5 text-green-400"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="1.5"
                                                        stroke="currentColor"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                                        />
                                                    </svg>
                                                    <div>{{ team.name }}</div>
                                                </div>
                                            </ResponsiveNavLink>
                                        </form>
                                    </template>
                                </template>
                            </template>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="flex min-h-screen">
                <sideLeft />
                <main>
                    <slot></slot>
                </main>
            </div>
        </div>
        <!-- BottomNavbar -->
        <BottomNavbar />
    </div>
</template>
<style scoped>
/*
  Enter and leave animations can use different
  durations and timing functions.
*/
.slide-fade-enter-active {
    transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.3s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateX(20px);
    opacity: 0;
}
main {
    max-width: 1200px;
    margin-inline: auto;
}
</style>
