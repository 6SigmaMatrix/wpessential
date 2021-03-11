<template>
    <div class="wpe-home" v-loading="page_loader">
        <section>
            <div class="block" style="width: 100%;margin: 0 auto;text-align: center;height: 100vh;">
                <el-image style="transform: translateY(50%);" src="https://ps.w.org/wpessential/assets/banner-772x250.jpg">
                    <div slot="placeholder" class="image-slot">
                        Loading<span class="dot">...</span>
                    </div>
                </el-image>
            </div>
        </section>
    </div>
</template>
<script>
import Mixin from "../wpessential-mixin.js";

export default {
    mixins: [ Mixin ],
    name: "wpe-index",
    data () {
        return {}
    },
    mounted () {
        this.$WPEssential.options_routes = {};
        this.page_loader= false;
    }
}
</script>