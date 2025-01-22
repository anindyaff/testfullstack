<template>
    <div>
        <h1 class="text-2xl font-bold">Employee Details</h1>
        <p>Name: {{ employee.name }}</p>
        <p>Job: {{ employee.job }}</p>
        <p>Division: {{ employee.division }}</p>
        <p>Status: {{ employee.status }}</p>
    </div>
</template>

<script setup>
defineProps({
    employee: Object,
});
</script>
