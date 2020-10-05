<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Predictions - Save the Sea Turtle</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.2/cyborg/bootstrap.min.css" integrity="sha512-v2h7RYQ8d6LaG0M3OZVeTdtGaNInlFiuOBZVoLja0mY7aLM4FL/mQTGjAjqw9n85rCb3RSwo8DAurMfHHTLTJg==" crossorigin="anonymous" />        
        <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@2.17.3/dist/bootstrap-vue.min.css" />

    </head>

    <body>
        <div id="app">
            <div>
                <b-navbar type="dark" variant="info">
                    <b-navbar-brand href="./home.php">Sea Turtle Count Prediction</b-navbar-brand>

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
                        <b-container>
                            <b-row class="justify-content-center">
                                <b-col>
                                    <h3 class="my-4">Select district from the list : </h3>
                                    <b-list-group>
                                        <b-list-group-item button
                                            v-for="district in district_list" 
                                            v-bind:key="district.id" 
                                            v-on:click="showPrediction(district.id)"
                                        >
                                            <h5>{{ district.name }}</h5>
                                        </b-list-group-item>
                                    </b-list-group>
                                </b-col>
                            </b-row>
                        </b-container>
                    </template>
                    <template v-else>
                        <b-container>
                            <b-row>
                                <b-col>
                                    <b-button variant="success" v-on:click="goBack" class="my-4">Go Back</b-button>
                                </b-col>
                            </b-row>
                            <b-row>
                                <h3 class="mb-4">Predictions for {{predicted_values.district.name}}</h3>
                            </b-row>
                            <b-row v-if="showChart">
                                <data-chart :data="predicted_values"></data-chart>
                            </b-row>
                            <b-row class="justify-content-center">
                                <b-col>
                                    <b-table-simple hover responsive class="mt-3">
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
                            <b-row>
                                <b-col>
                                    <b-button variant="success" v-on:click="goBack" class="mt-3 mb-5">Go Back</b-button>
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
        <script src="https://unpkg.com/axios@0.20.0/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js" integrity="sha512-Izh34nqeeR7/nwthfeE0SI3c8uhFSnqxV0sI9TvTcXiFJkMd6fB644O64BRq2P/LA/+7eRvCw4GmLsXksyTHBg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

        <script>
            Vue.component('data-chart', {
                props: ['data'],
                template: `<canvas id="chart"></canvas>`,
                mounted:function(){

                    let real=[];
                    let min=this.data.real[0].count;
                    let max=this.data.real[0].count;

                    for(let key in this.data.real){
                        let i = this.data.real[key]

                        if(i.count<min) min=i.count;
                        if(i.count>max) max=i.count;
                            
                        real.push({
                            x:i.date,
                            y:i.count
                        })
                    }

                    let predicted=[]

                    for(let key in this.data.predicted){
                        let i = this.data.predicted[key]

                        if(i.count<min) min=i.count;
                        if(i.count>max) max=i.count;
                            
                        predicted.push({
                            x:i.date,
                            y:i.count
                        })
                    }

                    let ctx = document.getElementById('chart');
                    let myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            datasets: [
                            {
                                label: "Real",
                                backgroundColor:"green",
                                data: real
                            },
                            {
                                label: "Predicted",
                                backgroundColor:"red",
                                data: predicted
                            }
                            ]
                        },
                        options: {
                            scales: {
                                xAxes: [{
                                    type: 'time',
                                    distribution: 'series',
                                    bounds:"ticks",
                                    offset: true,
                                    time: {
                                        unit: 'quarter',
                                        displayFormats: {
                                            'quarter': 'YYYY [Q]Q',
                                        },
                                        tooltipFormat: "YYYY [Q]Q"
                                    }
                                } ],
                                yAxes:[{
                                    ticks:{
                                        min:min-3,
                                        max:max+3
                                    }
                                }]
                            },
                            legend: {
                                display: true,
                            }
                        }
                    });
                }
            })

            new Vue({
                el: '#app',
                data:  {
                    loading: true,
                    showList:true,
                    showChart:false,
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
                            this.showChart=true;
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
                    goBack(){
                        this.showList=true
                        this.showChart=false;
                    },
                    makeToast() {
                        this.$bvToast.toast(`Error connecting to Server`, {
                            title: 'Connection Error.',
                            autoHideDelay: 10000,
                            variant: "danger",
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