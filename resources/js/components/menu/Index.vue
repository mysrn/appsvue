<template>
    <div class="" id="app">
        <h3>Data Menu</h3>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(menu, index) in userMenu">
                    <td>{{index++}}</td>
                    <td>{{menu.menu}}</td>
                    <td>
                        <a href="">Edit</a> |
                        <a href="">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import axios from 'axios';

    export default{
        data(){
            return{
                userMenu: []
            }
        },
        mounted(){
            axios.get('/api/user_menu')
                .then(response=>{
                    this.userMenu = response.data;
                    console.log(response.data);
                })
                .catch(error=>{
                    console.log(error);
                });
        }
    }
</script>