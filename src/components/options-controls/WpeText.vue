<template>
    <el-row :gutter="15" type="flex">
        <wpe-heading v-if="field.heading" :heading="field.heading" :subtitle="field.subtitle"></wpe-heading>
        <el-col class="wpessential-field" :span="v_if_single(field.help,13,16 )">
            <el-input @input="on_change" v-bind="attr" :name="field.id" type="text" class="wpessential-form-input-text" v-model="value"></el-input>
            <div class="wpessential-field-desc el-col el-col-24" v-if="field.desc">{{ field.desc }}</div>
        </el-col>
        <wpe-help v-if="field.help" :help="field.help"></wpe-help>
    </el-row>
</template>

<script>

//import { WpeMixins } from "../mixins";

export default {
    //mixins: [ WpeMixins ],
    mounted () {
        /*this.get_value();
        this.field_args_check();
        this.attributes();*/
    }
}
</script>
