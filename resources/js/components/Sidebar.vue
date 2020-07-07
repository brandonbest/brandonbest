<template>
    <div class="page-sidebar-title mt-4 mb-1">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p v-show="this.pretitle">{{ this.pretitle }}</p>

                <h1 v-show="this.title" class="mb-0"><span class="text-blue" v-show="this.titleWord">{{ this.titleWord }}</span> {{ this.title }}</h1>

                <p v-show="this.subtitle">{{ this.subtitle }}}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Sidebar',
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
            pretitle: {
                type: String
            }
        }
    }
</script>