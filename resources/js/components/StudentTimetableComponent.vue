<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">STUDEBT Component</div>

                    <div class="card-body">
                       
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
        props: [
            'urldata'
        ],
        mounted() {
            this.update();
        },
        methods: {
            update: function() {
                console.log(this.urldata);
            }
        }
    }
</script>
