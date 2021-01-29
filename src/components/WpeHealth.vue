<template>
    <div class="wpe-health-info" v-loading="page_loader">
        <section>
            <el-row :gutter="30" type="flex">
                <el-col :span="24">
                    <div class="title-section">
                        <h1>{{ $WPEssential.admin_pages.health.page_title }}</h1>
                        <p>{{ $WPEssential.admin_pages.health.page_desc }}</p>
                    </div>
                </el-col>
            </el-row>
        </section>
        <wpe-plugins-hooks></wpe-plugins-hooks>
        <wpe-plugins></wpe-plugins>
        <wpe-constants></wpe-constants>
    </div>
</template>
<script>
import Mixin from '../wpessential-mixin.js';
import WpeConstants from "./info/WpeConstants";
import WpePlugins from "./info/WpePlugins";
import WpePluginsHooks from "./info/WpePluginsHooks";

export default {
    components: { WpePluginsHooks, WpePlugins, WpeConstants },
    mixins: [ Mixin ],
    name: "wpe-health",
    data () {
        return {}
    },
    mounted () {
        this.page_loader = false;
    },
    methods: {}
}
</script>