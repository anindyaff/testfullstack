<template>
    <div>
        <h1 class="text-2xl font-bold">Employees</h1>
        <a href="/employees/create" class="btn btn-primary">Add Employee</a>
        <table class="table-auto w-full mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Division</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="employee in employees" :key="employee.id">
                    <td>{{ employee.name }}</td>
                    <td>{{ employee.job }}</td>
                    <td>{{ employee.division }}</td>
                    <td>{{ employee.status }}</td>
                    <td>
                        <a :href="`/employees/${employee.id}`" class="text-blue-600">Show</a>
                        <a :href="`/employees/${employee.id}/edit`" class="text-indigo-600 ml-2">Edit</a>
                        <button @click="deleteEmployee(employee.id)" class="text-red-600 ml-2">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import { router } from '@inertiajs/vue3';

// Props dari server
defineProps({
    employees: Array,
});

// Fungsi untuk menghapus employee
function deleteEmployee(id) {
    if (confirm('Are you sure you want to delete this employee?')) {
        router.delete(`/employees/${id}`);
    }
}
</script>
