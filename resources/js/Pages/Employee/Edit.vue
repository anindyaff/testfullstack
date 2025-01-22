<template>
    <div>
        <h1 class="text-2xl font-bold">Edit Employee</h1>
        <form @submit.prevent="updateEmployee">
            <div>
                <label>Name:</label>
                <input v-model="form.name" type="text" />
            </div>
            <div>
                <label>Job:</label>
                <input v-model="form.job" type="text" />
            </div>
            <div>
                <label>Division:</label>
                <input v-model="form.division" type="text" />
            </div>
            <div>
                <label>Status:</label>
                <input v-model="form.status" type="text" />
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</template>

<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

defineProps({
    employee: Object,
});

const form = reactive({ ...employee });

function updateEmployee() {
    router.put(route('employees.update', employee.id), form);
}
</script>
