<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import BreezeSidebar from "@/Components/Sidebar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Management" />

    <BreezeAuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="p-2">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white border border-gray-200">
                                <BreezeSidebar :href="route('category')">
                                    <div
                                        class="text-sm text-gray-700 p-2 space-x-1.5 text-sm border-b border-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50"
                                    >
                                        <i class="fa fa-align-justify"></i>
                                        <span>Category</span>
                                    </div>
                                </BreezeSidebar>

                                <BreezeSidebar :href="route('menu')">
                                    <div
                                        class="text-sm text-gray-700 p-2 space-x-1.5 text-sm border-b border-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50"
                                    >
                                        <i class="fa fa-hamburger"></i>
                                        <span>Menu</span>
                                    </div>
                                </BreezeSidebar>

                                <BreezeSidebar :href="route('table')">
                                    <div
                                        class="text-sm text-gray-700 p-2 space-x-1.5 text-sm border-b border-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50"
                                    >
                                        <i class="fa fa-chair"></i>
                                        <span>Table</span>
                                    </div>
                                </BreezeSidebar>

                                <BreezeSidebar :href="route('user')">
                                    <div
                                        class="text-sm text-gray-700 p-2 space-x-1.5 text-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50"
                                    >
                                        <i class="fa fa-users-cog"></i>
                                        <span>User</span>
                                    </div>
                                </BreezeSidebar>
                            </div>
                            <div
                                class="col-span-2 bg-white border border-gray-200"
                            >
                                Content
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
