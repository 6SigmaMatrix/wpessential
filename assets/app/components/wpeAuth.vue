<template>
    <el-row :gutter="30" type="flex">
        <el-col :span="12">
            <el-row :gutter="30" type="flex">
                <el-col :span="24">
                    <el-input placeholder="Username" v-model="log_username" clearable></el-input>
                </el-col>
            </el-row>
            <el-row :gutter="30" type="flex">
                <el-col :span="24">
                    <el-input placeholder="Password" v-model="log_password" show-password></el-input>
                </el-col>
            </el-row>
            <el-row :gutter="30" type="flex">
                <el-col :span="24">
                    <el-button type="primary" round>Primary</el-button>
                </el-col>
            </el-row>
        </el-col>
        <el-col :span="12">
            <el-row :gutter="30" type="flex">
                <el-col :span="12">
                    <el-input placeholder="First Name" v-model="first_name" clearable></el-input>
                </el-col>
                <el-col :span="12">
                    <el-input placeholder="Last Name" v-model="last_name" clearable></el-input>
                </el-col>
            </el-row>
            <el-row :gutter="30" type="flex">
                <el-col :span="24">
                    <el-input placeholder="Username" v-model="reg_user" clearable></el-input>
                </el-col>
            </el-row>
            <el-row :gutter="30" type="flex">
                <el-col :span="24">
                    <el-input placeholder="Email Address" v-model="email" clearable></el-input>
                </el-col>
            </el-row>
            <el-row :gutter="30" type="flex">
                <el-col :span="24">
                    <el-input placeholder="Password" v-model="reg_password" show-password></el-input>
                </el-col>
            </el-row>
            <el-row :gutter="30" type="flex">
                <el-col :span="24">
                    <el-button type="primary" round>Primary</el-button>
                </el-col>
            </el-row>
        </el-col>
    </el-row>
</template>
<script>
    export default {
        name: "wpe-auth",
        data() {
            return {
                log_username: "",
                log_password: "",
                first_name: "",
                last_name: "",
                reg_user: "",
                reg_password: "",
                email: ""
            }
        }
    }
</script>
