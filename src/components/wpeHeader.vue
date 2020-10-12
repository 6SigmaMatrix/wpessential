<template>
    <el-container>
        <el-header :class="this.class">
            <el-menu :default-active="activeIndex" mode="horizontal" :router="true">
                <el-menu-item index="/">
                    <i class="fas fa-home"></i> Home
                </el-menu-item>
                <el-menu-item index="/plugins">
                    <i class="fas fa-plug"></i> Plugins
                </el-menu-item>
                <el-menu-item index="/settings">
                    <i class="fas fa-cog"></i> Settings
                </el-menu-item>
                <el-menu-item index="/theme-settings">
                    <i class="fas fa-th"></i> Theme Settings
                </el-menu-item>
                <el-menu-item index="/register">
                    <i class="fas fa-key"></i> Register
                </el-menu-item>
                <el-menu-item index="/faqs">
                    <i class="fas fa-question-circle"></i> FAQ's
                </el-menu-item>
                <el-menu-item index="/support">
                    <i class="fas fa-life-ring"></i> Support
                </el-menu-item>
            </el-menu>
            <!--<el-button @click="drawer = true">
                <i class="fas fa-bell"></i>
            </el-button>-->
        </el-header>
        <!--<el-drawer
                title="I am the title"
                :visible.sync="drawer"
                :direction="direction"
                :before-close="handleClose">
            <span>Hi, there!</span>
        </el-drawer>-->
    </el-container>
</template>
<script>
    export default {
        name: "wpe-header",
        data() {
            return {
                /*drawer: false,
                direction: 'rtl',*/
                class: "wpe-header-main",
                activeIndex: "1"
            };
        }
    }
</script>
