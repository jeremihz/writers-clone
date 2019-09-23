<template>
    <li class="nav-item dropdown"  @click="markNotificationAsRead">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-lg orange"></i> Notification <span class="badge badge-warning navbar-badge">{{unreadNotifications.length}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <notification-item v-for="unread in unreadNotifications" :unread="unread" :key="unread.id"></notification-item>
            <span class="dropdown-header"><i class="fa fa-envelope mr-2"></i>New Messages</span>
        </div>
    </li>
</template>

<script>
    import NotificationItem from "./Notificationitems.vue";
    export default {
        props: ['unreads','userid'],
        components: {NotificationItem},
        data(){
            return {
                unreadNotifications : this.unreads
            }
        },
        methods: {
            markNotificationAsRead() {
                if (this.unreadNotifications.length) {
                    axios.get('/markAsRead');
                }
            }
        },
        mounted() {
            console.log('Component mounted.');
            Echo.private('App.User.' + this.userid)
                .notification((notification) => {
                    console.log(notification);
                    let newUnreadNotifications={data:{request:notification.request,user:notification.user}};
                    this.unreadNotifications.push(new newUnreadNotifications);
                });
        }

    }
</script>
