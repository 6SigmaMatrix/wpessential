<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
    <transition name="fade">
        <el-row :gutter="15" type="flex">
            <wpe-heading v-if="field.heading" :heading="field.heading" :subtitle="field.subtitle"></wpe-heading>
            <el-col class="wpessential-field" :span="v_if_single(field.help,13,16 )">
                <el-checkbox-group @change="select_change" class="wpessential-form-button-group" v-model="value" v-if="field.options">
                    <el-checkbox-button v-for="option in field.options" :key="option.key" :name="field.id+'_'+option.key" :label="field.id+'_'+option.key">
                        {{option.label}}
                    </el-checkbox-button>
                </el-checkbox-group>
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
                value: [],
            }
        },
        mounted() {
            this.get_value();
            this.field_args_check();
        },
        methods: {
            get_value() {
                let data;
                data = this.options[this.field.id];
                if (data) {
                    jQuery.each(data, (item) => {
                        item = this.field.id + "_" + item;
                        return this.value.push(item);
                    });
                }
                data = this.field.defined;
                if (data) {
                    jQuery.each(data, (item) => {
                        item = this.field.id + "_" + item;
                        return this.value.push(item);
                    });
                }
            },
        }
    }
</script>
