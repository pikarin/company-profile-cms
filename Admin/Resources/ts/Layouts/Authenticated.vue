<script lang="ts" setup>
import BreezeApplicationLogo from '@admin/Components/ApplicationLogo.vue'
import BreezeResponsiveNavLink from '@admin/Components/ResponsiveNavLink.vue'
import { Link, usePage } from '@inertiajs/inertia-vue3'
import { ref } from 'vue'

let showingNavigationDropdown = ref(false)

interface PageProps {
    auth: Auth
}

const page = usePage<PageProps>()
</script>

<template>
    <div
        class="fixed w-full top-0 z-20 lg:flex lg:flex-row lg:flex-wrap lg:items-center bg-white p-6 border-b border-gray-300"
    >
        <!-- logo -->
        <div class="flex-none w-56 flex flex-row items-center">
            <!-- <img src="img/logo.png" class="w-10 flex-none"> -->
            <strong class="capitalize ml-1 flex-1">Admin Panel</strong>

            <button class="flex-none text-right text-gray-900 lg:hidden block">burg</button>
        </div>
        <!-- end logo -->
    </div>

    <div class="min-h-screen bg-gray-100 lg:flex mt-16 p-6 lg:mt-0">
        <aside class="w-full lg:w-56 lg:h-screen lg:overflow-y-auto">
            <nav class="bg-white border-b border-gray-100 lg:min-h-full">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:pt-6">
                    <div class="flex justify-between">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <BreezeApplicationLogo class="block h-9 w-auto" />
                                </Link>
                            </div>
                        </div>
                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
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
                <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }" class="lg:block">
                    <div class="pt-2 pb-3 space-y-1">
                        <BreezeResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </BreezeResponsiveNavLink>
                    </div>
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">{{ page.props.value.auth.user.name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ page.props.value.auth.user.email }}</div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <BreezeResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </BreezeResponsiveNavLink>
                        </div>

                        <!-- Responsive Settings Options -->
                        <div class="border-t border-gray-200 pt-4 pb-1">
                            <div class="px-4">
                                <div class="text-base font-medium text-gray-800">
                                    {{ page.props.value.auth.user.name }}
                                </div>
                                <div class="text-sm font-medium text-gray-500">
                                    {{ page.props.value.auth.user.email }}
                                </div>
                            </div>

                            <div class="mt-3 space-y-1">
                                <BreezeResponsiveNavLink :href="route('logout')" method="post" as="button">
                                    Log Out
                                </BreezeResponsiveNavLink>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </aside>

        <div class="lg:flex-1">
            <!-- Page Heading -->
            <header v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
