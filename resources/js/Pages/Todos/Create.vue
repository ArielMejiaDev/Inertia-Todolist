<template>
    <div class="w-full bg-white rounded shadow-sm p-6">
        <h1 class="text-gray-800">Add a task.</h1>
        <form @submit.prevent="submit" method="POST">
            <input v-model="form.title" type="text" name="title" class="w-full p-2 text-gray-700 bg-gray-200 my-4 rounded focus:outline-none focus:shadow-outline focus:bg-white" placeholder="Task">
            <button type="submit" class="py-2 px-4 rounded bg-indigo-500 hover:bg-indigo-600 text-white hover:no-underline">Add</button>
        </form>
    </div>
</template>

<script>
import Layout from "../../Shared/Layout";

export default {
    name: "Create",
    data: () => ({
        form: {
            title: null,
        },
    }),
    methods: {
        submit() {
            this.$inertia.post('/todos', this.form);
        },
    },
    layout: Layout,
}
</script>

<style scoped>

</style>
