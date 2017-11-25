<template>
    <section class="content-header">
        <h1> Welcome to your dashboard, {{name}}!</h1>
        <ol class="breadcrumb">
            <li><a href="/user"><i class="fa fa-dashboard"></i> {{name}}</a></li>
            <li class="active">My Dashboard</li>
        </ol>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                role: ''
            }
        },
        mounted(){
            axios.get('/user').then(
                (response)=>{
                    this.name = response.data.firstname;
                },
                function (response) {

                }
            );
        }
    }
</script>
