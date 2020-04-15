<template>
    <div :class="this.classID[0]" :id="this.classID[0]">
        <wpe-header></wpe-header>
        <el-container>
            <el-main :class="this.classID[1]" :id="this.classID[1]">
                <transition :name="transitionName">
                    <router-view class="view"></router-view>
                </transition>
            </el-main>
        </el-container>
        <wpe-footer></wpe-footer>
    </div>
</template>
<script>
    import WpeHeader from "./components/wpeHeader";
    import WpeFooter from "./components/wpeFooter";
    import WpeMain from "./components/wpeMain";
    import WpePlugins from "./components/wpePlugins";
    import WpeRegister from "./components/wpeAuth";
    import WpeFaqs from "./components/wpeFaqs";
    import WpeSupport from "./components/wpeSupport";
    import WpeSettings from "./components/wpeSettings";

    const router = new VueRouter({
        routes: [
            {path: "/", component: WpeMain, name: "Home"},
            {path: "/plugins", component: WpePlugins, name: "Plugins"},
            {path: "/register", component: WpeRegister, name: "Auth"},
            {path: "/faqs", component: WpeFaqs, name: "FAQ's"},
            {path: "/support", component: WpeSupport, name: "Support"},
            {path: "/settings", component: WpeSettings, name: "Settings"}
        ]
    });
    router.beforeResolve((to, from, next) => {
        if (to.name) {
            NProgress.start()
        }
        next()
    });
    router.afterEach((to, from) => {
        NProgress.done()
    });
    export default {
        name: "wpe",
        components: {WpeMain, WpeFooter, WpeHeader},
        data() {
            return {
                classID: ["wpessential-panel", "wpe-description"],
                transitionName: "slide-left"
            }
        },
        router,
        watch: {
            '$route'(to, from) {
                const toDepth = to.path.split('/').length
                const fromDepth = from.path.split('/').length
                this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left'
            }
        },
        mounted: () => {
            NProgress.configure({parent: "#wpessential-panel"});
        }
    }
</script>
