<template>
    <section class="wpe-plugins" v-loading="ajax_loader">
        <el-collapse v-if="toggle_data">
            <el-row :gutter="30" type="flex">
                <el-col :span="24">
                    <div class="title-section">
                        <h2>{{ toggle_data.title }}</h2>
                        <p>{{ toggle_data.desc }}</p>
                    </div>
                </el-col>
            </el-row>
            <el-row :gutter="30" type="flex" v-for="(data_set_again, _index) in toggle_data.list" :key="_index">
                <el-col :span="24">
                    <el-collapse-item :title="data_set_again.title" :name="_index">
                        <template v-for="(table_data, td_index) in data_set_again.list">
                            <div class="info-table">
                                <el-table :data="table_data.list" stripe style="width: 100%">
                                    <el-table-column :label="td_index+': '+data_set_again.column_labels.first" prop="first"></el-table-column>
                                    <el-table-column :label="td_index+': '+data_set_again.column_labels.second" prop="second">
                                        <template slot-scope="scope" v-html="scope.row.second">
                                            <div v-html="scope.row.second"></div>
                                        </template>
                                    </el-table-column>
                                </el-table>
                            </div>
                        </template>
                    </el-collapse-item>
                </el-col>
            </el-row>
        </el-collapse>
    </section>
</template>
<script>
import Mixin from '../../wpessential-mixin.js';

export default {
    mixins: [ Mixin ],
    name: "wpe-plugins",
    data () {
        return {
            toggle_data: null,
            table_data: []
        }
    },
    mounted () {
        this.get_data();
    },
    methods: {
        get_data () {
            this.ajax_loader = true;
            $.ajax( {
                url: WPEssential.ajaxurl,
                type: "POST",
                data: {
                    action: "wpe_admin_health_info",
                    subaction: "active_plugins",
                    nonce: WPEssential.nonce,
                },
                success: ( res ) => {
                    this.toggle_data = res.data;
                    this.ajax_loader = false;
                },
                error: ( res ) => {
                    this.ajax_res = res.responseJSON.data;
                    this.ajax_error();
                    this.ajax_loader = false;
                }
            } );
        }
    }
}
</script>