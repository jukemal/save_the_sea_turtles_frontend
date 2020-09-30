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
                        <b-container class="bv-example-row">
                            <b-row>
                                <b-col>
                                    <b-button variant="success" v-on:click="showList = true" class="m-5">Go Back</b-button>
                                </b-col>
                            </b-row>
                            <b-row class="justify-content-center mb-5">
                                <b-col>
                                    <b-table-simple hover responsive>
                                        <b-thead head-variant="dark">
                                            <b-tr>
                                                <b-th>Date</b-th>
                                                <b-th>Count</b-th>
                                            </b-tr>
                                        </b-thead>
                                        <b-tbody>
                                            <template v-for="(value, name, index) in predicted_values.real">
                                                <b-tr>
                                                    <b-td >{{value.date | formatTime}}</b-td>
                                                    <b-td>{{value.count}}</b-td>
                                                </b-tr>
                                            </template>
                                            <template v-for="(value, name, index) in predicted_values.predicted">
                                                <b-tr variant="success">
                                                    <b-td >{{value.date | formatTime}}</b-td>
                                                    <b-td>{{value.count}}</b-td>
                                                </b-tr>
                                            </template>
                                        </b-tbody>
                                    </b-table-simple>
                                </b-col>
                            </b-row>
                        </b-container>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js" integrity="sha512-Izh34nqeeR7/nwthfeE0SI3c8uhFSnqxV0sI9TvTcXiFJkMd6fB644O64BRq2P/LA/+7eRvCw4GmLsXksyTHBg==" crossorigin="anonymous"></script>

        <script>
            new Vue({
                el: '#app',
                data:  {
                    loading: true,
                    showList:true,
                    district_list:{},
                    predicted_values:{},
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
                        this.loading = true;

                        axios
                        .get(`http://localhost:8000/sea_turtle_count_prediction/${id}/`)
                        .then(response => {
                            this.predicted_values = response.data;
                            console.log(this.predicted_values);
                        })
                        .catch(error => {
                            console.log(error)
                            this.makeToast()
                        })
                        .finally(() => {
                            this.loading = false;
                            this.showList=false;
                        })
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
                },
                filters: {
                    formatTime: function (value) {
                        if (!value) return '';
                        return moment(value).format("YYYY Qo");
                    }
                }
            })
        </script>

    </body>
</html>