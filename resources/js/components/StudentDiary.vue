<template>
 

    <div class="container">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent mb-3">
                        <div class="row align-items-center">
                            <div class="col col-xl-12 mb-3">
                                <div style="display: -webkit-flex;
                                display: -moz-flex;
                                display: -ms-flex;
                                display: -o-flex;
                                display: flex;">
                                    
                                    <select name="month" id="" style="border-radius: 0">
                                        <option value="1">Январь </option>
                                        <option value="2">Февраль</option>
                                        <option value="3">Март</option>
                                    </select>
                                    <button class="btn btn-primary" style="border-radius: 0" @click="update">
                                        Перейти
                                    </button>
                                </div>
                            </div>
                            <div class="col col-xl-12">
                                <div class="_card-body"> 
                                    <div class="table-container">
                                        <table class="table">
                                            <tr>
                                                <th># / День</th>
                                                <th v-for="day in urldata['days']" class="day-cell">{{  day['day'].substr(8, 2) }}</th>
                                            </tr>
                                            <tr v-for="subject in urldata['subject_array']">
                                                  <td>{{ subject['subject'] }}</td>
                                                  
                                                  <td class="mark-cell" v-for="day in subject['marks']">{{ day['mark'] }}</td>
                                                
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data: function() {
            return {
                urldata: [],
                is_refresh: false,
                id: 0 
            }
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function() {
                this.is_refresh = true;
                axios({
                  method: 'get',
                  url: '/diary/query',
                  params: {
                    month: 2
                  }
                }).then((response) =>{
                    console.log(response);
                    this.urldata = response.data;
                    this.is_refresh = false;
                    this.id++;

                });
            }
        }
    }
</script>
