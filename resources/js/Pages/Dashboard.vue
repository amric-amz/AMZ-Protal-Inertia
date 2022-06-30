<template>
  <Head title="Dashboard" />
  <slot id="header"></slot>
  <BreezeAuthenticatedLayout>
    <div>Dashboard</div>
    <mycomVue/>
  </BreezeAuthenticatedLayout>
</template>

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue"
import { Head } from "@inertiajs/inertia-vue3"
import mycomVue from "@/Components/mycom.vue";

Vue.component('mycomVue', mycomVue);
</script>
