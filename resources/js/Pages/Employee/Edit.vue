<script setup>
import { useForm } from '@inertiajs/vue3';

defineProps({
    employee: Object,
});

const form = useForm({
    name: employee.name,
    job: employee.job,
    division: employee.division,
    status: employee.status,
});

function submit() {
    form.put(`/employees/${employee.id}`);
}
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold">Edit Employee</h1>
        <form @submit.prevent="submit">
            <div>
                <label>Name</label>
                <input v-model="form.name" type="text" class="input" />
            </div>
            <div>
                <label>Job</label>
                <input v-model="form.job" type="text" class="input" />
            </div>
            <div>
                <label>Division</label>
                <input v-model="form.division" type="text" class="input" />
            </div>
            <div>
                <label>Status</label>
                <select v-model="form.status" class="select">
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</template>
