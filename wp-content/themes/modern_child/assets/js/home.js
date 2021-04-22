/* Vue.js */
Vue.config.devtools = true;

Vue.component("interior-card", {
    template: `
    <div class="interior-card-wrap"
      @mousemove="handleMouseMove"
      @mouseenter="handleMouseEnter"
      @mouseleave="handleMouseLeave"
      ref="card">
      <div class="interior-card"
        :style="cardStyle">
        <div class="interior-card-bg" :style="[cardBgTransform, cardBgImage]"></div>
        <div class="interior-card-info">
          <slot name="interior-header"></slot>
          <slot name="interior-content"></slot>
        </div>
      </div>
    </div>`,
    mounted() {
        this.width = this.$refs.card.offsetWidth;
        this.height = this.$refs.card.offsetHeight;
    },
    props: ["dataImage"],
    data: () => ({
        width: 0,
        height: 0,
        mouseX: 0,
        mouseY: 0,
        mouseLeaveDelay: null
    }),


    computed: {
        mousePX() {
            return this.mouseX / this.width;
        },
        mousePY() {
            return this.mouseY / this.height;
        },
        cardStyle() {
            const rX = this.mousePX * 30;
            const rY = this.mousePY * -30;
            return {
                transform: `rotateY(${rX}deg) rotateX(${rY}deg)`
            };


        },
        cardBgTransform() {
            const tX = this.mousePX * -50;
            const tY = this.mousePY * -50;
            return {
                transform: `translateX(${tX}px) translateY(${tY}px)`
            };


        },
        cardBgImage() {
            return {
                backgroundImage: `url(${this.dataImage})`
            };


        }
    },


    methods: {
        handleMouseMove(e) {
            this.mouseX = e.pageX - this.$refs.card.offsetLeft - this.width / 2;
            this.mouseY = e.pageY - this.$refs.card.offsetTop - this.height / 2;
        },
        handleMouseEnter() {
            clearTimeout(this.mouseLeaveDelay);
        },
        handleMouseLeave() {
            this.mouseLeaveDelay = setTimeout(() => {
                this.mouseX = 0;
                this.mouseY = 0;
            }, 1000);
        }
    }
});



const app = new Vue({
    el: "#interior-app"
});