<template>
    <div class="wpe-theme-options" v-loading="page_loader">
        <section>
            <el-row :gutter="30" type="flex">
                <el-col :span="24">
                    <div class="title-section">
                        <h1>{{ $WPEssential.admin_pages.theme_options.page_title }}</h1>
                        <p>{{ $WPEssential.admin_pages.theme_options.page_desc }}</p>
                    </div>
                </el-col>
            </el-row>
        </section>
        <section>
            <el-form :model="form" :rules="form_rules" ref="form" v-bind="form_args">
                <el-row type="flex" :gutter="30">
                    <wpe-tab></wpe-tab>
                    <router-view></router-view>
                </el-row>
            </el-form>
        </section>
    </div>
</template>
<script>
import WpeTab from "./options-controls/WpeTab";
import WpeForm from "./options-controls/WpeForm";
import Mixin from '../wpessential-mixin';

export default {
    components: { WpeForm, WpeTab },
    mixins: [ Mixin ],
    name: "wpe-theme-options",
    data () {
        return {
            form_args: this.$WPEssential.global_options_args,
            form:{},
            form_rules: {
                name: [
                    { required: true, message: 'Please input Activity name', trigger: 'blur' },
                    { min: 3, max: 5, message: 'Length should be 3 to 5', trigger: 'blur' }
                ],
            }
        }
    },
    mounted () {
        this.page_loader = false;
    },
    methods: {}
}
</script>