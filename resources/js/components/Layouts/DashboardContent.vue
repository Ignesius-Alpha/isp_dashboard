<template>
    <div id="move_with_sidebar" class="pt-[118px] w-full h-screen p-4 mr-9 ml-0" 
         :class="side ? (windowWidth >= 1000 ? 'pl-[300px] pr-9' : 'pl-12 pr-9') : 'pl-12 pr-9'">
      <slot name="content"></slot>
    </div>
  </template>

<script>
export default {
    data() {
        return {
            side: true,
            windowWidth: window.innerWidth,
        };
    },
    watch: {
        side() {
            this.toggleSide()
        }
    },
    beforeMount() {
        if (localStorage.getItem('sideBarState') === null) {
            localStorage.setItem('sideBarState', this.side);
        }

        if (localStorage.getItem('sideBarState') === 'false') {
            this.side = false;
        }
        else {
            this.side = true;
        }
    },
    mounted() {
        this.emitter.on("toggle-sidebar", side => {
            this.side = side;
        });
        window.addEventListener('resize', this.updateWindowSize);
    },
    beforeDestroy() {
        window.removeEventListener('resize', this.updateWindowSize);
    },
    methods: {
        updateWindowSize() {
            this.windowWidth = window.innerWidth;
        },
        toggleSide() {
            if (!this.side) {
                if (window.innerWidth < 640) {
                    document.getElementById("move_with_sidebar").style.transition = "all 0.5s ease";
                }
                else {
                    document.getElementById("move_with_sidebar").style.transition = "all 0.5s ease";
                }
            }
            else {
                if (window.innerWidth < 640) {
                    document.getElementById("move_with_sidebar").style.transition = "all 0.5s ease";
                }
                else {
                    document.getElementById("move_with_sidebar").style.transition = "all 0.5s ease";
                }

            }
        },
    },
};
</script>

<style lang="scss" scoped></style>