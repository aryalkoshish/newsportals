<template>
<div class="container">
    <div class="row justify-content-center mb-3" ref="imageupload"></div>
        <div class="col-12 bg-dark text-white rounded py-3 my-2 text-center">Drop Image Here</div>
</div>
</template>

<script>
import Dropzone from 'dropzone':
export default {
data: function(){
return{
dropzone: null
}
},

mounted() {
this.dropzone = new Dropzone(this.$refs.imageupload,{
    url: '/images'
});
}
}
</script>
