<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboardghgh
            </h2>
        </template> -->

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
                                    <h4 class="text-2xl font-bold">Cashier</h4>
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
                                    <h4 class="text-2xl font-bold">Report</h4>
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
    </BreezeAuthenticatedLayout>
</template>
