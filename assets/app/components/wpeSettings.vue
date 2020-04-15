<template>
    <div :class="this.classID[0]" :id="this.classID[0]">
        <el-tabs tab-position="left" type="card" v-loading="loader">
            <el-tab-pane v-if="settings != null" v-for="setting in settings" :key="setting.id" :label="setting.name" :lazy="true">
                <el-row :gutter="15" type="flex" v-for="sets in setting.data" :key="sets.id" :class="classID[1]">
                    <el-col :span="4" v-for="list in sets" :key="list.id">
                        <el-popover placement="top-start" title="Icon Name:" trigger="hover" :content="list.icon_name">
                            <el-card shadow="hover" slot="reference">
                                <i class="er" :class="list.icon_class" @click="popupDataSet(list)"></i>
                            </el-card>
                        </el-popover>
                    </el-col>
                </el-row>
            </el-tab-pane>
        </el-tabs>

        <el-dialog title="Icon Information" :visible.sync="infoPopup" :center="true">
            <el-dialog title="Icon Edit" :visible.sync="infoEditPopup" :center="true" append-to-body>
                <el-form>
                    <el-form-item label="Name">
                        <el-input v-model="iconName" clearable></el-input>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="this.onSubmit" :loading="popupSubmit">Save</el-button>
                        <el-button @click="infoEditPopup = false">Cancel</el-button>
                    </el-form-item>
                </el-form>
            </el-dialog>

            <el-table :data="this.popupData" border style="width: 100%">
                <el-table-column prop="title" label="Title"></el-table-column>
                <el-table-column prop="name" label="Data"></el-table-column>
            </el-table>
            <div slot="footer" class="dialog-footer">
                <el-button type="primary" @click="this.iconEdit">
                    Edit
                </el-button>
            </div>
        </el-dialog>

    </div>
</template>
<script>
    export default {
        name: "wpe-settings",
        data() {
            return {
                settings: [],
                loader: false,
                classID: ["wpessential-settings", "row-bottom-gap-15"],
                infoPopup: false,
                infoEditPopup: false,
                popupData: [],
                iconName: "",
                iconData: {icon_id: '', icon_class: '', icon_name: ''},
                popupSubmit: false
            }
        },
        mounted() {
            this.get_data();
        },
        methods: {
            get_data() {
                this.loader = true;
                let getData = {
                    nonce: WPEssential.nonce,
                    action: "settings_args"
                };
                axios.post(WPEssential.ajaxshort, Qs.stringify(getData)).catch(error => {
                    this.loader = false;
                    this.$notify({
                        type: "error",
                        title: "Error!!!",
                        message: error
                    });
                }).then(response => {
                    this.loader = false;
                    if (response.data.success == true)
                        this.settings = response.data.data;
                    else
                        this.$notify({
                            type: "error",
                            title: "Error!!!",
                            message: "No data founded."
                        });
                });
            },
            popupDataSet(list) {
                this.infoPopup = true;
                this.iconData = list;
                this.popupData = [
                    {
                        title: "Name",
                        name: list.icon_name,
                    }, {
                        title: "ID",
                        name: list.icon_id,
                    }, {
                        title: "Class",
                        name: list.icon_class,
                    }
                ];
            },
            iconEdit() {
                this.iconName = this.iconData.icon_name;
                this.infoEditPopup = true;
            },
            onSubmit() {
                this.popupSubmit = true;
                this.iconData.icon_name = this.iconName;
                let sendData = {
                    nonce: WPEssential.nonce,
                    action: "er_ajax",
                    iconData: {
                        icon_id: this.iconData.icon_id,
                        icon_class: this.iconData.icon_class,
                        icon_name: this.iconData.icon_name,
                    }
                };
                axios.post(WPEssential.ajaxshort, Qs.stringify(sendData)).catch(error => {
                    this.$notify({
                        type: "error",
                        title: "Error!!!",
                        message: error
                    });
                }).then(response => {
                    this.infoEditPopup = false;
                    this.popupSubmit = false;
                    this.infoPopup = false;
                    if (response.data.success == true) {
                        this.settings = response.data.data;
                        this.$notify({
                            type: "success"
                        });
                    } else {
                        this.$notify({
                            type: "error",
                            title: "Error!!!",
                            message: "No data founded."
                        });
                    }
                });
            }
        }
    }
</script>
