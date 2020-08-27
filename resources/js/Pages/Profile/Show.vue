<template>
    <div class="w-full bg-white rounded shadow-sm p-6">
        <h1 class="text-gray-800">Profile.</h1>
        <div class="flex items-center">
            <img class="h-16 w-16 object-cover rounded-full shadow-sm block" :src="profile.profile_picture" alt="profile picture">
            <InertiaLink :href="`/profile/edit`" class="py-2 px-4 rounded bg-indigo-500 text-white hover:bg-indigo-600 hover:no-underline cursor-pointer ml-4">Editar</InertiaLink>
        </div>
    </div>
</template>

<script>
import Layout from "../../Shared/Layout";

export default {
    name: "Show",
    layout: Layout,
    data: () => ({
        form: {
            profile_picture: null,
        }
    }),
    props: [
        'profile',
    ],
    methods: {
        submit() {
            //
        }
    }
}
</script>

<style scoped>

</style>
