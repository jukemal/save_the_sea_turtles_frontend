<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Predictions - Save the Sea Turtle</title>

        <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.2/dist/css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@2.17.3/dist/bootstrap-vue.min.css" />

    </head>

    <body>
        <div id="app">
            <div>
                <b-navbar type="dark" variant="info">
                    <b-navbar-brand href="#">Sea Turtle Count Prediction</b-navbar-brand>

                    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                    <b-collapse id="nav-collapse" is-nav>
                        <b-navbar-nav>
                            <b-nav-item href="./home.php">Home</b-nav-item>
                        </b-navbar-nav>
                    </b-collapse>
                </b-navbar>
            </div>
            
            <transition name="fade">
                <template v-if="!loading">
                    <template v-if="showList">
                        <div class="container m-5">
                            <h3 class="mb-3">Select district from the list : </h3>
                            <b-list-group>
                                <b-list-group-item button 
                                variant="success"
                                v-for="district in district_list" 
                                v-bind:key="district.id" 
                                v-on:click="showPrediction(district.id)"
                                >
                                    <b-icon icon="check" variant="primary"></b-icon>
                                    {{ district.name }}
                                </b-list-group-item>
                            </b-list-group>
                        </div>
                    </template>
                    <template v-else>
                        <div>
                            <b-table striped hover :items="items"></b-table>
                        </div>
                    </template>
                </template>
                <template v-else>
                    <b-row class="text-center" style="height: 800px;" align-v="center">
                        <b-col>
                            <b-spinner label="Loading..." variant="warning" ></b-spinner>
                        </b-col>
                    </b-row>
                </template>
            </transition>
        </div>

        <script src="https://unpkg.com/vue@2.6.12/dist/vue.js"></script>
        <script src="https://unpkg.com/bootstrap-vue@2.17.3/dist/bootstrap-vue.min.js"></script>
        <script src="https://unpkg.com/bootstrap-vue@2.17.3/dist/bootstrap-vue-icons.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script src="https://unpkg.com/axios@0.20.0/dist/axios.min.js"></script>

        <script>
            new Vue({
                el: '#app',
                data:  {
                    loading: true,
                    showList:true,
                    district_list:{},
                    items: [
                        { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
                        { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
                        { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
                        { age: 38, first_name: 'Jami', last_name: 'Carney' }
                    ]
                },
                mounted:function(){
                    axios
                    .get('http://localhost:8000/districts/')
                    .then(response => {
                        this.district_list = response.data.results;
                    })
                    .catch(error => {
                        console.log(error)
                        this.makeToast()
                    })
                    .finally(() => {
                        this.loading = false;
                        this.showList=true;
                    })
                },
                methods: {
                    showPrediction(id){
                        console.log(id);
                    },
                    makeToast() {
                        this.toastCount++
                        this.$bvToast.toast(``, {
                        title: 'Connection Error.',
                        autoHideDelay: 5000,
                        variant: variant,
                        solid: true,
                        toaster:'b-toaster-bottom-right'
                        })
                    },
                }
            })
        </script>

    </body>
</html>