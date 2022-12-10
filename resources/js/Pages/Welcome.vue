<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="min-h-screen bg-gray-100">
        <div
            class="relative pb-10 items-top bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
        >
            <div
                class="w-full flex fixed justify-between bg-white dark:bg-gray-800 overflow-hidden shadow px-2"
            >
                <div class="shrink-0 flex items-center">
                    <Link :href="route('welcome')">
                        <BreezeApplicationLogo class="block h-9 w-auto" />
                    </Link>
                </div>
                <div
                    v-if="canLogin"
                    class="hidden top-0 right-0 px-6 py-4 sm:block"
                >
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="text-sm text-gray-700"
                    >
                        Dashboard
                    </Link>

                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="text-sm text-gray-700"
                        >
                            Log in
                        </Link>

                        <Link
                            v-if="canRegister"
                            :href="route('register')"
                            class="ml-4 text-sm text-gray-700"
                        >
                            Register
                        </Link>
                    </template>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div
                        class="bg-white overflow-hidden shadow-sm sm:rounded-lg"
                    >
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="flex justify-between">
                                <Link
                                    :href="route('management')"
                                    class="text-sm text-gray-700"
                                >
                                    <div>
                                        <h4 class="text-2xl font-bold">
                                            Management
                                        </h4>
                                        <img
                                            class="w-12"
                                            src="images/management.png"
                                            alt="app-managment"
                                        />
                                    </div>
                                </Link>
                                <Link
                                    :href="route('cashier')"
                                    class="text-sm text-gray-700"
                                >
                                    <div>
                                        <h4 class="text-2xl font-bold">
                                            Cashier
                                        </h4>
                                        <img
                                            class="w-12"
                                            src="images/cashier-machine.png"
                                            alt="cashier"
                                        />
                                    </div>
                                </Link>
                                <Link
                                    :href="route('report')"
                                    class="text-sm text-gray-700"
                                >
                                    <div>
                                        <h4 class="text-2xl font-bold">
                                            Report
                                        </h4>
                                        <img
                                            class="w-12"
                                            src="images/report.png"
                                            alt="app-report"
                                        />
                                    </div>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<style scoped>
.bg-gray-100 {
    background-color: #f7fafc;
    background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
    border-color: #edf2f7;
    border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
    color: #a0aec0;
    color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
    color: #718096;
    color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
    color: #4a5568;
    color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
    color: #1a202c;
    color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-gray-800 {
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
    }

    .dark\:bg-gray-900 {
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
    }

    .dark\:border-gray-700 {
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--tw-border-opacity));
    }

    .dark\:text-white {
        color: #fff;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
    }

    .dark\:text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }
}
</style>
