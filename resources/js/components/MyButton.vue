<template>
    <div>
<!--        <button type="submit" class="btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>-->
        <button :type="type" class="my-button" v-text="test.name">My Button</button>
    </div>
</template>

<script>
    export default {
        props: ['text', 'type'],
        mounted() {
            console.log('Component mounted.')

            axios.post('api/vue',{})
                .then(response => {
                    this.test = response.data;
                });
        },
        data: function () {
            return {
                test: null,
            }
        },
        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        this.status = ! this.status;
                        console.log(response.data);
                    })
                    .catch(errors => {
                        if (errors.response.status == 401) {
                            window.location = '/login';
                        }
                    });
            }
        },
        computed: {
            buttonText() {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
<style>
    .my-button{
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        font-weight: bold;
    }
</style>
