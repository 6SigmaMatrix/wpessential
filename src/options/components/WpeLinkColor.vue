<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
    <transition name="fade">
        <el-row :gutter="15" type="flex">
            <wpe-heading v-if="field.heading" :heading="field.heading" :subtitle="field.subtitle"></wpe-heading>
            <el-col class="wpessential-field" :span="v_if_single(field.help,13,16 )">
                <el-row :gutter="15" type="flex">
                    <el-col class="wpessential-field">
                        <span class="wpessential-field-link-color-headings">Regular</span>
                        <el-color-picker @change="select_change" class="wpessential-form-link-color" v-model="value.regular"></el-color-picker>
                    </el-col>
                    <el-col class="wpessential-field" v-if="field.settings.hover">
                        <span class="wpessential-field-link-color-headings">Hover</span>
                        <el-color-picker @change="select_change" class="wpessential-form-link-color" v-model="value.hover"></el-color-picker>
                    </el-col>
                    <el-col class="wpessential-field" v-if="field.settings.active">
                        <span class="wpessential-field-link-color-headings">Active</span>
                        <el-color-picker @change="select_change" class="wpessential-form-link-color" v-model="value.active"></el-color-picker>
                    </el-col>
                </el-row>
                <div class="wpessential-field-desc el-col el-col-24" v-if="field.desc">{{field.desc}}</div>
            </el-col>
            <wpe-help v-if="field.help" :help="field.help"></wpe-help>
        </el-row>
    </transition>
</template>

<script>

    import {WpeMixins} from "../mixins";

    export default {
        mixins: [WpeMixins],
        mounted() {
            this.get_value();
            this.field_args_check();
        }
    }
</script>
