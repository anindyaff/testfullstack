<script setup>
defineProps({
    employee: Object,
});
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold">Employee Details</h1>
        <p><strong>Name:</strong> {{ employee.name }}</p>
        <p><strong>Job:</strong> {{ employee.job }}</p>
        <p><strong>Division:</strong> {{ employee.division }}</p>
        <p><strong>Status:</strong> {{ employee.status }}</p>
        <a href="/employees" class="btn btn-secondary">Back</a>
    </div>
</template>
