<template>
    <div :class="this.classID[0]" :id="this.classID[0]" v-loading="loader">
        <el-form ref="options">
            <el-form-item>
                <el-alert
                        v-if="message_change"
                        show-icon
                        type="warning"
                        title="Please save the changes by clicking on save button"
                ></el-alert>
                <el-tabs v-if="tabs.length > 1" tab-position="left" type="card" v-model="active_tab_id">
                    <el-tab-pane
                            v-for="(tab, index) in tabs"
                            v-bind="tab_args_check(tab, index)"
                            :key="tab.tab_id"
                            :lazy="true"
                            :name="tab.tab_id"
                    >
                      <span slot="label">
                        <i :class="tab.tab_icon"></i>
                        {{tab.tab_title}}
                      </span>
                        <div class="wpessential-tab-info">
                            <h1 v-if="tab.tab_title">{{tab.tab_title}}</h1>
                            <span v-if="tab.tab_desc">{{tab.tab_desc}}</span>
                        </div>
                        <component
                                v-if="tab.tab_fields"
                                v-for="field in tab.tab_fields"
                                :key="field.id"
                                :is="field.type"
                                :field="field"
                                :options_set="options"
                        ></component>
                    </el-tab-pane>
                </el-tabs>
                <slot v-else-if="tabs.length == 1">
                    <div class="wpessential-tab-info">
                        <h1 v-if="tabs[0].tab_title">{{tabs[0].tab_title}}</h1>
                        <span v-if="tabs[0].tab_desc">{{tabs[0].tab_desc}}</span>
                    </div>
                    <component
                            v-if="tabs[0].tab_fields"
                            v-for="field in tabs[0].tab_fields"
                            :key="field.id"
                            :is="field.type"
                            :field="field"
                            :options_set="options"
                    ></component>
                </slot>
            </el-form-item>
            <el-form-item>
                <el-button type="primary" @click.prevent="onSubmit">Create</el-button>
                <el-button @click="reset_form">Reset All</el-button>
                <el-button v-if="tabs.length > 1" @click="tab_rest">Reset Section</el-button>
            </el-form-item>
        </el-form>
    </div>
</template>
<script>
    import {WpeMixins} from "./mixins";

    export default {
        mixins: [WpeMixins],
        data() {
            return {
                classID: ["wpessential-plugin-settings", "row-bottom-gap-15"],
                options:{}
            };
        },
        mounted() {
            this.get_data();
        },
        methods: {
            data(tab) {
                console.log(tab);
            },
            get_data() {
                this.loader = true;
                let get_data = {
                    security: WPEssential.nonce,
                    action: "plugin_options"
                };
                axios.post(WPEssential.ajaxshort, Qs.stringify(get_data)).catch(error => {
                    this.loader = false;
                    this.notify_error(error);
                }).then(response => {
                    this.loader = false;
                    if (response.data.success == true) {
                        this.tabs = response.data.data.plugin_options;
                        this.options = response.data.data.saved_options;

                        jQuery.each(this.tabs, (tab_index, tab) => {
                            jQuery.each(tab.tab_fields, (index, item) => {
                                if (this.options[item.id]) {
                                    this.options[item.id] = this.options[item.id];
                                } else {
                                    if (item.defined) {
                                       // console.log(item.defined);
                                        this.options[item.id] = item.defined;
                                    } else {
                                        this.options[item.id] = '';
                                    }
                                }
                            });
                        });
                    } else {
                        this.error_message = "No data founded";
                        this.notify_error();
                    }
                });
            },
            onSubmit() {
                this.loader = true;
                let set_data = {
                    security: WPEssential.nonce,
                    action: "plugin_save_options",
                    save_options: this.options
                };
                axios.post(WPEssential.ajaxshort, Qs.stringify(set_data)).catch(error => {
                    this.loader = false;
                    this.notify_error(error);
                }).then(response => {
                    this.loader = false;
                    if (response.data.success == true) {
                        this.success_message = response.data.data;
                        this.notify_success();
                    } else {
                        this.error_message = response.data.data;
                        this.notify_error();
                    }
                });
            },
            reset_form(formName) {
                console.log(formName);
                this.$refs[formName].resetFields();
            }
        }
    };
</script>
