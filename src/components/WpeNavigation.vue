<template>
    <el-header>
        <el-menu default-active="/theme-options" class="el-menu-demo" mode="horizontal" :router="true">
            <template v-for="page in $WPEssential.admin_pages">
                <el-menu-item :index="page.path">{{ page.menu_title }}</el-menu-item>
            </template>
        </el-menu>
    </el-header>
</template>
<script>
import Mixin from '../wpessential-mixin';

export default {
    mixins: [ Mixin ],
    name: "wpe-navigation",
    data () {
        return {
        }
    },
    mounted () {

    },
    methods: {}
}
</script>