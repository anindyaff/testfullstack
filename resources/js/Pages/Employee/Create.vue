<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    job: '',
    division: '',
    status: 'Active',
});

const jobOptions = ['Software Engineer', 'UI/UX Designer', 'Data Analyst', 'DevOps Engineer', 'Full Stack Developer'];
const divisionOptions = ['Development', 'Quality Assurance', 'IT Support', 'Infrastructure', 'Research & Development'];

function submit() {
    form.post('/employees', {
        onSuccess: () => {
            // Arahkan ke halaman dashboard setelah berhasil menyimpan data
            window.location.href = '/dashboard'; // Menggunakan URL statis
        },
    });
}
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
            <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Add Employee</h1>
            <form @submit.prevent="submit" class="space-y-4">
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input
                        id="name"
                        v-model="form.name"
                        type="text"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500"
                        placeholder="Enter employee name"
                    />
                </div>
                <!-- Job Field -->
                <div>
                    <label for="job" class="block text-sm font-medium text-gray-700">Job</label>
                    <select
                        id="job"
                        v-model="form.job"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500"
                    >
                        <option value="" disabled selected>Select a job</option>
                        <option v-for="job in jobOptions" :key="job" :value="job">{{ job }}</option>
                    </select>
                </div>
                <!-- Division Field -->
                <div>
                    <label for="division" class="block text-sm font-medium text-gray-700">Division</label>
                    <select
                        id="division"
                        v-model="form.division"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500"
                    >
                        <option value="" disabled selected>Select a division</option>
                        <option v-for="division in divisionOptions" :key="division" :value="division">{{ division }}</option>
                    </select>
                </div>
                <!-- Submit Button -->
                <div class="text-center">
                    <button
                        type="submit"
                        class="w-full px-4 py-2 text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-500 rounded-md shadow-sm"
                    >
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
