<template>
    <div class="container" style="height: 200vh">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header">
                        Google Maps
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Author</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(a, index) in arr" :key="index">
                                <td>{{index+1}}</td>
                                <td>{{a.author}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Home.vue",
        data(){
            return{
                arr: [],
            }
        },
        created() {
            fetch('https://newsapi.org/v2/everything?q=bitcoin&from=2019-10-09&sortBy=publishedAt&apiKey=3657e62e069345eb8323ad2fb1599cd5')
                .then((response) => response.json())
                .then((data) => {
                    console.log(data)
                    this.arr = data.articles;
                })
        }
    }
</script>

<style scoped>

</style>
