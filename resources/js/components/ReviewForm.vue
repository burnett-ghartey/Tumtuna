<template>

    <div>

        <form @submit.prevent="postReview">

            <div class="form-group">
                <div class="form-group">
                    <label>Rate it</label>
                    <star-rating v-model="formData.rating" name="rating"></star-rating>
                </div>
            </div>
            <div class="form-group">
                <label>Headline</label>
                <input type="text" placeholder="headline.." class="form-control" v-model="formData.headline" name="headline">
                <div v-if="errors && errors.headline" class="text-danger">{{ errors.headline[0] }}</div>
            </div>

            <div class="form-group">
                <label>Tell us more</label>
                <input type="text" placeholder="more.." class="form-control" v-model="formData.description" name="description">
                <div v-if="errors && errors.description" class="text-danger">{{ errors.description[0] }}</div>
            </div>

          

            <button type="submit" class="btn-mycolor">Submit</button>
        </form>

    </div>
</template>
<script>
    export default {
        props: ['post', 'url'],
        data() {
            return {
                formData: {},
                errors: {}
            }
        },
        methods: {
            postReview() {
             this.errors = {};
                this.formData.post_id=this.post.id;
               axios.post(this.url, this.formData)
               .then(data => {
                    alert('Review Submitted!');
                   location.reload();
               

                  
               })
               .catch(error=>{
                //    window.location.href='/login';
                //    console.log(error);
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                }
               })
            }
        },
    }

</script>
