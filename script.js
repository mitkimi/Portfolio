new Vue({
  el: '#app',
  data: {
    visible: false,
    activeIndex: localStorage.navIndex || 0,
    input5: '',
  },
  methods: {
    show: function () {
        this.visible = true;
    },
    handleSelect(key, keyPath) {
      console.log(key, keyPath);
    },
    handleOpen(key, keyPath) {
      console.log(key, keyPath);
    },
    handleClose(key, keyPath) {
      console.log(key, keyPath);
    },
    route(mid,link) {
      this.$message.success(mid);
      localStorage.navIndex = mid;
      location.href = link;
    }
  }
})