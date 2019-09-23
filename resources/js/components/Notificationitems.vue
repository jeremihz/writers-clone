<template>
    <div class="wrap">
        <a :href="requestUrl">
            <strong>{{ unread.data.user.name }}</strong><br>
            <span style="color: black">{{ unread.data.request }}</span>
            <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> {{unread.data.request.created_at}}</p>
            <div class="dropdown-divider"></div>
        </a>
    </div>
</template>

<script>
    export default {
        props : ['unread'],
        data(){
            return {
                requestUrl: ""
            }
        },
        mounted() {
            this.requestUrl="request/"+ this.unread.data.requestUrl.id
        }
    }
</script>
