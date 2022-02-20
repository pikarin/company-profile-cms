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
        class="fixed top-0 z-20 w-full border-b border-gray-300 bg-white p-6 lg:relative lg:flex lg:flex-row lg:flex-wrap lg:items-center"
    >
        <!-- logo -->
        <div class="flex w-56 flex-none flex-row items-center">
            <Link :href="route('dashboard')">
                <BreezeApplicationLogo class="inline-block w-10 flex-none" />
            </Link>
            <strong class="ml-1 flex-1 capitalize">Admin</strong>

            <button
                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none lg:hidden"
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
        <!-- end logo -->
    </div>

    <div class="flex h-screen flex-row bg-gray-100 pt-16 lg:pt-0">
        <aside
            class="fixed top-0 z-30 h-screen w-64 bg-white shadow-xl lg:relative lg:ml-0 lg:h-auto lg:overflow-y-auto lg:shadow-none"
            :class="{ 'ml-0': showingNavigationDropdown, '-ml-64': !showingNavigationDropdown }"
        >
            <nav class="border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div>
                    <div class="px-4 pt-6 text-right lg:hidden">
                        <button class="inline-flex items-center" @click="showingNavigationDropdown = false">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </button>
                    </div>
                    <div class="px-4">
                        <div class="text-base font-medium text-gray-800">{{ page.props.value.auth.user.name }}</div>
                        <div class="text-sm font-medium text-gray-500">{{ page.props.value.auth.user.email }}</div>
                    </div>
                    <div class="mt-3 border-t border-gray-200">
                        <div class="py-2">
                            <BreezeResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                Dashboard
                            </BreezeResponsiveNavLink>
                        </div>
                        <div class="py-2">
                            <BreezeResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </BreezeResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>
        </aside>

        <div class="flex-1 p-6">
            <!-- Page Heading -->
            <header v-if="$slots.header">
                <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
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
