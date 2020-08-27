<template>
    <div class="mt-6 -mb-1 flex flex-wrap">
        <template v-for="(link, key) in links">
            <div v-if="link.url === null" :key="key"
                 class="cursor-pointer border bg-white border-gray-200 text-gray-800 py-2 px-3 hover:text-blue-500 hover:no-underline" :class="{ '': link.label === 'Next' }">{{ link.label }}</div>
            <inertia-link v-else :key="key" class="bg-white border border-gray-200 text-gray-800 py-2 px-3 hover:text-blue-500 hover:no-underline" :class="{ 'text-blue-500': link.active }" :href="link.url">{{ link.label }}</inertia-link>
        </template>
    </div>
</template>

<script>
export default {
    name: 'Pagination',
    props: {
        links: Array,
    },
}
</script>
<!--<div v-if="link.url === null" :key="key" class="mr-1 mb-1 px-4 py-3 text-sm border rounded text-grey" :class="{ 'ml-auto': link.label === 'Next' }">{{ link.label }}</div>-->
<!--<inertia-link v-else :key="key" class="mr-1 mb-1 px-4 py-3 text-sm border rounded hover:bg-white focus:border-indigo focus:text-indigo" :class="{ 'bg-white': link.active, 'ml-auto': link.label === 'Next' }" :href="link.url">{{ link.label }}</inertia-link>-->
