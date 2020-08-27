<template>
    <div>
        <template v-if="todos.data.length > 0">
            <div class="flex items-center w-full mb-4">
                <h2 class="mr-auto">Tasks</h2>
                <InertiaLink href="/todos/create" class="rounded py-2 px-4 bg-indigo-500 hover:bg-indigo-600 hover:no-underline text-white">Create</InertiaLink>
            </div>
            <ul class="flex flex-col bg-white p-6 rounded-lg shadow-xs">
                <li v-for="(todo, index) in todos.data" :key="index" class="border-gray-400 flex flex-row mb-2">
                    <div class="select-none cursor-pointer bg-gray-200 rounded-md flex flex-1 items-center py-1 px-2  transition duration-500 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                        <InertiaLink :href="todo.links.show" class="flex flex-col rounded-md w-10 h-10 bg-gray-300 justify-center items-center mr-4 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6 fill-current"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        </InertiaLink>
                        <div class="flex-1 pl-1 mr-16">
                            <InertiaLink :href="todo.links.show" class="text-gray-600 text-sm font-bold hover:underline hover:text-gray-600 cursor-pointer">{{ todo.title }}</InertiaLink>
                        </div>
                        <InertiaLink onclick="return confirm('are you sure?')" class="text-red-500 hover:text-red-600 font-bold text-xs uppercase tracking-tighter hover:underline" :href="`${todo.links.destroy}`" method="delete">Delete</InertiaLink>
                    </div>
                </li>
            </ul>
            <pagination :links="todos.links"></pagination>
        </template>

        <template v-else>
            <div class="flex flex-col items-center bg-gray-200 p-6 rounded">
                <h3 class="w-full text-center">No tasks available.</h3>
                <InertiaLink href="/todos/create" class="py-2 px-4 rounded text-white bg-indigo-500 mt-6 hover:bg-indigo-600 hover:no-underline">Add new task.</InertiaLink>
            </div>
        </template>

    </div>
</template>

<script>
import Layout from "../../Shared/Layout";
import Pagination from "../../Shared/Pagination";

export default {
    name: "Index",
    components: {
        Pagination,
    },
    layout: Layout,
    props: ['todos'],
}
</script>

<style scoped>

</style>
