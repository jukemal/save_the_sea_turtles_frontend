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

        </div>

        <script src="https://unpkg.com/vue@2.6.12/dist/vue.js"></script>
        <script src="https://unpkg.com/bootstrap-vue@2.17.3/dist/bootstrap-vue.min.js"></script>
        <script src="https://unpkg.com/bootstrap-vue@2.17.3/dist/bootstrap-vue-icons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script src="https://unpkg.com/vue-chartjs@3.5.1/dist/vue-chartjs.min.js"></script>

        <script>
            new Vue({
            el: '#app',
            data: function() {
                return { visible: false }
            }
            })
        </script>

    </body>
</html>