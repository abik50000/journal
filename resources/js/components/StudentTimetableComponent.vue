<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">STUDEBT Component</div>
    

                    <div class="card-body">
                       <button @click="update" class="btn btn-default" v-if="!is_refresh">обновить - {{ id }}...</button>
                       <span class="badge badge-primary mb-l" v-if="is_refresh">Обновление...</span>
                       <table>
                           <tr>
                               <th>name</th>
                               <th>URL</th>
                           </tr>
                           <tr v-for="url in urldata">
                               <td>{{ url.title }}</td>
                               <td>{{ url.url }}</td>
                           </tr>
                       </table>
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
                axios.get('/start/get-json').then((response) =>{
                    console.log(response);
                    this.urldata = response.data;
                    this.is_refresh = false;
                    this.id++;

                });
            }
        }
    }
</script>
