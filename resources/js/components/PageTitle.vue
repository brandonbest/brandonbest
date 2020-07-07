<template>
    <div class="d-flex flex-row page-title mt-4 mb-4">
        <div class="d-flex align-items-center justify-content-center">
            <i :class="this.icon"></i>
        </div>
        <div class="pl-3 pr-3">
            <h1 class="mb-0"><span class="text-blue" v-show="this.titleWord">{{ titleWord }}</span> {{ title }}</h1>
            <p v-show="this.subtitle">{{ subtitle }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'PageTitle',
        props: {
            titleWord: {
                type: String
            },
            title: {
                type: String
            },
            subtitle: {
                type: String
            },
            icon: {
                type: String
            }
        }
    }
</script>