<style scoped>
    .slide-down-enter-active {
        transition: all .8s ease;
    }

    .slide-down-leave-active {
        transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }

    .slide-down-enter, .slide-down-leave-to {
        transform: translateY(-100%);
    }

    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }

    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
    {
        opacity: 0;
    }
</style>

<template>
    <div class="w-auto md:w-96 bg-brand p-8 h-auto md:h-screen relative md:fixed flex flex-col overflow-y-scroll">
        <h4 class="font-normal tracking-wide text-4xl text-brand-lightest mb-4">
            Rob <span class="text-brand-darker">Burley</span>
        </h4>

        <span class="absolute md:hidden pin-r pin-t mr-8 mt-8">
                <font-awesome-icon icon="bars" class=" text-4xl cursor-pointer"
                                   :class="show ? 'text-brand-darker' : 'text-brand-lightest'"
                                   @click="show = !show"
                ></font-awesome-icon>
            </span>

        <transition :name="windowWidth < 768 ? 'slide-down' : 'fade'">
            <ul class="list-reset md:flex md:flex-col" v-if="show">
                <li class="my-8">
                    <a href="#about"
                       class="py-8 font-thin tracking-wide text-2xl text-brand-lightest no-underline hover:text-brand-darker"
                       v-smooth-scroll>
                        About
                    </a>
                </li>

                <li class="my-8">
                    <a href="#work"
                       class="py-8 font-thin tracking-wide text-2xl text-brand-lightest no-underline hover:text-brand-darker"
                       v-smooth-scroll>
                        Work
                    </a>
                </li>

                <li class="my-8">
                    <a href="#contact"
                       class="py-8 font-thin tracking-wide text-2xl text-brand-lightest no-underline hover:text-brand-darker"
                       v-smooth-scroll>
                        Contact
                    </a>
                </li>
            </ul>
        </transition>

        <div class="flex flex-1 items-end mt-2">
            <div class="flex flex-col">
                <a href="https://twitter.com/BurleyDev"
                   class="flex text-brand-darker items-center mt-2 no-underline hover:text-brand-lightest"
                >
                    <font-awesome-icon :icon="['fab', 'twitter-square']" class="mr-4 text-2xl"></font-awesome-icon>
                    @BurleyDev
                </a>

                <a href="https://github.com/robburley"
                   class="flex text-brand-darker items-center mt-2 no-underline hover:text-brand-lightest"
                >
                    <font-awesome-icon :icon="['fab', 'github-square']" class="mr-4 text-2xl"></font-awesome-icon>
                    /robburley
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {},
        data() {
            return {
                show: false,
                windowWidth: 0,
            }
        },
        watch: {
            windowWidth(newWidth, oldWidth) {
                this.show = newWidth > 768 || (this.show && oldWidth < 768)
            },
        },
        mounted() {
            let self = this

            self.windowWidth = window.innerWidth

            this.$nextTick(function () {
                window.addEventListener('resize', function (e) {
                    self.windowWidth = window.innerWidth
                })
            })
        },
    }
</script>
