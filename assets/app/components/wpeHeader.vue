<template>
    <el-container>
        <el-header :class="this.class">
            <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal" :router="true">
                <el-menu-item index="/">
                    <i class="el-icon-s-home"></i> Home
                </el-menu-item>
                <el-menu-item index="/plugins">
                    <i class="el-icon-setting"></i> Plugins
                </el-menu-item>
                <el-menu-item index="/settings">
                    <i class="el-icon-s-tools"></i> Settings
                </el-menu-item>
                <el-menu-item index="/register">
                    <i class="el-icon-setting"></i> Register
                </el-menu-item>
                <el-menu-item index="/faqs">
                    <i class="el-icon-question"></i> FAQ's
                </el-menu-item>
                <el-menu-item index="/support">
                    <i class="el-icon-s-help"></i> Support
                </el-menu-item>
            </el-menu>
        </el-header>
    </el-container>
</template>
<script>
    export default {
        name: "wpe-header",
        data() {
            return {
                class: "wpe-header-main",
                activeIndex: "1"
            };
        }
    }
</script>
