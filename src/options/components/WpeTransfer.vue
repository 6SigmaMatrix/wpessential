<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
    <transition name="fade">
        <el-row :gutter="15" type="flex">
            <wpe-heading v-if="field.heading" :heading="field.heading" :subtitle="field.subtitle"></wpe-heading>
            <el-col class="wpessential-field" :span="v_if_single(field.help,13,16 )">
                <el-transfer @change="select_change" v-bind="attr" class="wpessential-form-transfer" v-model="value" :data="data"></el-transfer>
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
        data() {
            return {
               data: [],
            }
        },
        mounted() {
            this.get_value();
            this.field_args_check();
            jQuery.each(this.field.options, (key, label) => {
                this.data.push({key: key, label: label});
            });
            this.attributes();
        },
    }
</script>
