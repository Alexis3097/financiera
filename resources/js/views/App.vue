<template>
    <v-app>
        <v-navigation-drawer app color="primary" temporary v-model="drawerOpen">
            <navigation></navigation>
        </v-navigation-drawer>
        <v-app-bar app color="yellow" >
            <v-app-bar-nav-icon @click="drawerOpen=true"></v-app-bar-nav-icon>
             <v-toolbar-title>
                 Financiera
            </v-toolbar-title>
        </v-app-bar>
        <v-content>
            <v-container fluid>
                <router-link tag="li" to="/">Home</router-link>
                <router-link tag="li" to="/about">About</router-link>
                
                <router-view></router-view>
            </v-container>
        </v-content>
        <v-footer app></v-footer>
    </v-app> 
</template>

<script>
import Navigation from '@/js/components/Navigation';
export default {
    components:{
        'navigation':Navigation
    },
    data: ()=> ({
        drawerOpen: false
    })
}
</script>