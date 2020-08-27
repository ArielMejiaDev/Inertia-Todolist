<template>
    <div class="w-full bg-white rounded shadow-sm p-6">
        <h1 class="text-gray-800">Edit Profile</h1>
        <form @submit.prevent="submit" method="POST" enctype="multipart/form-data">
            <input type="file" name="profile_picture" @change="getFile" ref="upload">
            <button type="submit" class="py-2 px-4 rounded bg-indigo-500 hover:bg-indigo-600 text-white hover:no-underline">Add</button>
        </form>
    </div>
</template>

<script>
import Layout from "../../Shared/Layout";

export default {
    name: "Edit",
    layout: Layout,
    data: () => ({
        profile_picture: null,
    }),
    methods: {
        getFile() {
          this.profile_picture = this.$refs.upload.files[0];
        },
        submit() {
            const form = new FormData();
            console.log(this.profile_picture);
            form.append('profile_picture', this.profile_picture);
            form.append('_method', 'put')
            this.$inertia.post('/profile', form);
        }
    }
}
</script>

<style scoped>

</style>
