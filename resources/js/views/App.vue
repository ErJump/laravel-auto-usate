<template>
    <section class="container">
        <ul>
            <li v-for="car in cars" :key="car.id">
                {{ car.marca + ' - ' + car.modello }}
            </li>
        </ul>
    </section>
</template>

<script>
import axios from 'axios';

export default{
    name: 'App',
    data(){
        return{
            cars: [],
        }
    },
    methods: {
        getCars(){
            axios.get('/api/cars')
            .then(response => {
                this.cars = response.data.results;
                console.log(this.cars);
            })
        }
    },
    created(){
        this.getCars();
    }
}
</script>

<style>

</style>
