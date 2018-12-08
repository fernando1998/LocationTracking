<template>
    <div>

        <gmap-map
                :center="center"
                :zoom="14"
                style="width: 1000px; height: 360px"
        >
            <gmap-polyline v-bind:path.sync="path" v-bind:options="{ strokeColor:'#FD2300'}">
            </gmap-polyline>

            <gmap-marker
                    :key="index"
                    v-for="(m,index) in markers"
                    :position="m.position"
                    :clickcable="true"
                    :draggable="true"
                    :clickable="true"
                    @click="toggleInfo(m, index)"
            ></gmap-marker>
        </gmap-map>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                center: {lat: -12.0423995, lng: -76.9474383},
                markers: [
                    /*{position: {lat: -12.0423995, lng: -76.9474383}},
                    {position: {lat: -12.0972833, lng: -76.99510409999999},}*/
                ],
                path: [
                    /*{lat: -12.0423995, lng: -76.9474383 },
                    {lat: -12.0972833, lng: -76.99510409999999 }*/
                ]
            }
        },
        mounted() {
            console.log('Component map mounted.');
            setInterval(this.lastPosition(), 5000);

        },
        created() {
            //this.lastPosition();
            this.message();
        }
        ,
        methods: {
            lastPosition: function () {
                window.axios.get('/api/get-points').then(({data}) => {
                    this.markers = data.markers;
                    this.path = data.path;
                    console.log('Revisando neuva localización');
                }).catch(({error})=>{
                    console.log(error);
                });
            },
            message: function () {
                let self = this;
                setInterval(function () {
                    self.lastPosition();
                }, 10000);
            }
        }
    }
</script>|