<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Employee" />

    <AuthenticatedLayout>
        <template #header>
            <div class="mb-4 flex justify-between items-center">
                <h2 class="text-3xl font-bold leading-tight text-gray-900">Employee</h2>
                    <div class="flex items-center gap-4">
                                        <input 
                                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                            id="inline-search" 
                                            type="text" 
                                            placeholder="Search">
                                        <a href="/employee/create"
                                           class="inline-block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline">
                                            Create
                                        </a>
                                    </div>
                                </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="w-full h-screen bg-gray-100">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="flex flex-col">

                                <!-- Table Section -->
                                <div class="-my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                    <div class="align-middle inline-block w-full shadow overflow-x-auto sm:rounded-lg border-b border-gray-200">
                                        <table class="min-w-full">
                                            <!-- Table Header -->
                                            <thead>
                                                <tr class="bg-gray-50 border-b border-gray-200 text-xs leading-4 text-gray-500 uppercase tracking-wider">
                                                    <th class="px-6 py-3 text-left font-medium">Name</th>
                                                    <th class="px-6 py-3 text-left font-medium">Job</th>
                                                    <th class="px-6 py-3 text-left font-medium">Division</th>
                                                    <th class="px-6 py-3 text-left font-medium">Status</th>
                                                    <th class="px-6 py-3 text-right font-medium">Actions</th>
                                                </tr>
                                            </thead>
                                            <!-- Table Body -->
                                            <tbody class="bg-white">
                                                <!-- Example Row -->
                                                <tr class="border-b border-gray-200">
                                                    <td class="px-6 py-4 whitespace-no-wrap">Anindya Fitriani</td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">Designer</td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">UI UX Designer</td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap text-right flex gap-2 justify-end">
                                                        <a href="/employee/show" class="text-blue-600 hover:text-blue-900 focus:outline-none focus:underline">Show</a>
                                                        <a href="/employee/edit" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Edit</a>
                                                        <a href="#" class="text-red-600 hover:text-red-900 focus:outline-none focus:underline">Delete</a>
                                                    </td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>