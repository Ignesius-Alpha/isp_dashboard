<template>
    <!-- Side Bar Menu-->
    <div id="transition"
        class="w-full z-10 mt-8 fixed translate-x-[0px] transition delay-150 duration-300 ease-in-out md:translate-x-[0px]">
        <div>
            <div id='my-link' @click="toggleSide" class="fixed flex top-8">
                <button class="cursor-pointer"><!----><span
                        class="material-symbols-outlined text-3xl ml-80 md:ml-[250px] py-[0.65rem] px-2.5 text-white bg-[#173D6B] rounded-br">menu</span></button>
            </div>
            <div class="w-64 h-screen bg-[#173D6B] fixed left-0 mt-8">
                <div class="h-5/6 xl:h-[80%] place-items-center">
                    <div class="flex flex-col ml-5 mt- 2xl:mt-6 p-8 space-y-7 2xl:space-y-10 overflow-auto">
                        <div v-for="(navigationList, index) in navigationLists" :key="index"
                            :class="{ 'text-white text-opacity-65 hover:text-white text-sm': true, 'text-white bg-opacity-25': currentRoute === navigationList.url }">
                            <div>
                                <a :href="navigationList.url" @click="setActiveRoute(navigationList.url)">{{
                                    navigationList.title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-8 flex flex-col justify-end">
                    <hr class="border mx-4 border-white border-opacity-50">
                    <a href="/logout"
                        class="block px-4 py-2 text-xl text-white text-opacity-85 hover:text-white active:text-bold">Log
                        out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Side Bar Menu-->
</template>

<script>
export default {
    data() {
        return {
            navigationLists: [
                { title: "Dashboard", url: '/dashboard' },
                // { title:"ISP(s)", url: '/isps'},
                { title: "Quick Link Search", url: '/linksearch' },
                { title: "Coverage Map", url: '/coverage' },
                { title: "Orders", url: '/orders' },
                { title: "Active Services", url: '/activeservices' },
                { title: "Support", url: '/support' },
                { title: "Resources", url: '/resources' },
                { title: "CA News", url: '/canews' },
                { title: "Marketing", url: '/marketing' },
                { title: "Reports", url: '/reports' }
            ],
            currentRoute: window.location.pathname,
            navOpen: false,
            side: true,
        }
    },
    methods: {
        setActiveRoute(url) {
            this.currentRoute = url;
        },
        toggleSide() {
            this.side = !this.side;
            localStorage.setItem('sideBarState', this.side);
            if (localStorage.getItem('sideBarState') === 'false') {
                if (window.innerWidth < 640) {
                    document.getElementById("transition").style.transform = "translate(-320px)";
                    document.getElementById("transition").style.transition = "all 0.5s ease";
                }
                else {
                    document.getElementById("transition").style.transform = "translate(-254px)";
                    document.getElementById("transition").style.transition = "all 0.5s ease";
                }
            }
            else {
                if (window.innerWidth < 640) {
                    document.getElementById("transition").style.transform = "translate(0px)";
                    document.getElementById("transition").style.transition = "all 0.5s ease";
                }
                else {
                    document.getElementById("transition").style.transform = "translate(0px)";
                    document.getElementById("transition").style.transition = "all 0.5s ease";
                }

            }
            this.emitter.emit("toggle-sidebar", this.side);
        }
    },
    mounted() {
        if (window.innerWidth < 640) {
            document.getElementById("transition").style.transform = "translate(-320px)";
            document.getElementById("transition").style.transition = "all 1s ease";
        }
        else {
            if (localStorage.getItem('sideBarState') === 'false') {
                document.getElementById("transition").style.transform = "translate(-253px)";
                document.getElementById("transition").style.transition = "all 0.5s ease";
            }
            else {
                document.getElementById("transition").style.transform = "translate(0px)";
                document.getElementById("transition").style.transition = "all 0.5s ease";
            }
        }
    },
    created() {
        if (localStorage.getItem('sideBarState') === null) {
            localStorage.setItem('sideBarState', this.side);
        }

        if (localStorage.getItem('sideBarState') === 'false') {
            this.side = false;
        }
        else {
            this.side = true;
        }
    }
}
</script>

<style>
.text-white.bg-opacity-25 {
    color: white;
    font-size: large;
}
</style>
